<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;

class LoginController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'registro', 'recuperar', 'recuperarpassword']);
        $this->viewBuilder()->setLayout('login');
    }

    public function index()
    {
        $this->loadModel('Municipios');
        $municipio = $this->Municipios->find('all')->order(['denominacion' => 'ASC'])->toArray();
        $this->set('municipio', $municipio);
        /*=========================================================================================*/
        $this->loadModel('Parroquias');
        $parroquia = $this->Parroquias->find('all')->order(['denominacion' => 'ASC'])->toArray();
        $this->set('parroquia', $parroquia);
    }

    public function registro()
    {
        $this->loadModel('Usuarios');
        $agregar = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            $agregar = $this->Usuarios->patchEntity($agregar, $this->request->getData());
            $agregar->cedula = @$this->request->data['cedula'];
            $agregar->nombre = strtoupper(@$this->request->data['nombre']);
            $agregar->apellido = strtoupper(@$this->request->data['apellido']);
            $agregar->direccion = strtoupper(@$this->request->data['direccion']);
            $agregar->id_privilegio = 3;

            if($this->Usuarios->find('all')->where(['cedula' => @$this->request->data['cedula']])->count()){
                $this->Flash->error(__('Este usuario ya se encuentra registrado'));
                return $this->redirect(['action' => 'index']);
            }

            if ($this->Usuarios->save($agregar)) {
                $this->Flash->success(__('Registro realizado con exito.'));
            } else {
                $this->Flash->error(__('Error, vuelva a intentar.'));
            }
                return $this->redirect(['action' => 'index']);
        }
    }
    
    public function login(){
        if($this->request->is('post')){
            @$this->request->data['password'] = @strtoupper($this->request->data['password']);
            $user = $this->Auth->identify();
            if ($user['estatus'] == TRUE) {
                if($user){
                    $this->Auth->setUser($user);

                    $this->loadModel('Usuarios');
                    $data = $this->Usuarios->find('all')->where(['id' => $user['id']])->last();

                    $this->Flash->success('Sesión iniciada');
                    return $this->redirect($this->Auth->redirectUrl());
                }else{
                    $this->Flash->error('Datos Incorrectos. Inténtalo de nuevo');
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                $this->Flash->error('Este usuario esta Inactivo');
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function logout()
    {
        $this->Auth->logout();
        return $this->redirect($this->Auth->logout());
    }

    public function recuperar()
    {
        $this->viewBuilder()->setLayout('recuperar');
    }

    public function recuperarpassword()
    {
        @$this->autoRender = false;
        $nueva = strtoupper($this->ramdonString());

        $this->loadModel('Usuarios');
        $data = $this->Usuarios->find('all')->where(['cedula' => strtoupper(@$this->request->data['cedula'])])->last();

        if ($data['correo'] <> null) {
            $this->loadModel('Usuarios');
            $usuario = @$this->Usuarios->get($data['id']);
            $usuario->password = $nueva;
            $this->Usuarios->save($usuario);

            $correo = new Email();
            @$correo
                ->setTransport('confirmacion')
                ->setEmailFormat('html') //formato de correo
                ->setTo($data['correo']) //correo para
                ->setSubject('Recuperacion de contraseña - Gobernación') //asunto
                ->setFrom(['recupecacion@gmail.com'  => 'Gobernación']) //correo de
                ->ViewVars([
                    'password' => @$nueva
                ]);
            $correo->viewBuilder()->setTemplate('recuperar');
            if (!$correo->send()) {
                $this->Flash->info(__('Correo de Alerta no se ha enviado. Ha colapsado el Envío de Correos por HOY'));
            } else {
                $this->Flash->success('Contraseña enviada a su correo electrónico');
            }
        } else {
            $this->Flash->error('Este Usuario no existe o no se encuetra autenticado.');
        }

        return $this->redirect(['action' => 'index']);
    }
}
