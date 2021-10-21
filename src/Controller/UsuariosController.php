<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsuariosController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
 
    public function index(){
        $this->loadModel('ViewUsuarios');
        $usuarios = $this->ViewUsuarios->find('all')->where(['privilegio <>' => 0])->order(['nombres_mostrar' => 'ASC'])->toArray();
        $this->set('usuarios', $usuarios);

        $this->loadModel('Privilegios');
        $privilegios = $this->Privilegios->find('all')->where(['id <>' => '0'])->toArray();
        $this->set('privilegios', $privilegios);

        if ($this->request->is('post')) {
            $this->loadModel('Usuarios');
            $agregar = $this->Usuarios->newEntity();
            $agregar = $this->Usuarios->patchEntity($agregar, $this->request->getData());
            $agregar->password = @strtoupper($this->request->data['password']);

            if ($this->Usuarios->save($agregar)) {
                $this->Flash->success(__('El usuario se ha registrado'));
            }else{
                $this->Flash->error(__('El usuario no se ha podido guardar. Vuelva a intentar.'));
            }
            return $this->redirect(['action' => 'index']);
        } 
    }

    public function change($estatus = null, $id = null){
        if($id){
            $this->loadModel('Usuarios');
            $variable = $this->Usuarios->query();
            $variable->update()
                ->set(['estatus' => $estatus])
                ->where(['id' => $id])
                ->execute(); 
        }
        return $this->redirect(['action' => 'index']);
    }

    public function editar(){
        $this->request->allowMethod(['post', 'get', 'save']);
        $this->loadModel('Usuarios');
        $editar = @$this->Usuarios->get($this->request->data['id']);
        $editar = $this->Usuarios->patchEntity($editar, $this->request->getData());
        
        if(@$this->request->data['password']){
            $editar->password = @strtoupper($this->request->data['password']);
        }

        $editar->nombres_mostrar = @$this->request->data['nombres_mostrar'];
        $editar->cedula = @$this->request->data['cedula'];
        $editar->usuario = @$this->request->data['usuario'];
        $editar->correo = @$this->request->data['correo'];
        $editar->privilegio = @$this->request->data['privilegio'];
        if ($this->Usuarios->save($editar)) {
            $this->Flash->success(__('Se ha modificado exitosamente.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function delete($id = null){
        /*$this->loadModel('Usuarios');
        $n = $this->Usuarios->find('all')->where(['id_catalogo' => $id])->count();
        if($n == 0){*/
            $this->loadModel('Usuarios');
            $this->request->allowMethod(['delete', 'post']);
            $eliminar = $this->Usuarios->get($id);
            if ($this->Usuarios->delete($eliminar)) {
                 $this->Flash->success(__('Se ha eliminado el usuario'));
            } else {
                $this->Flash->error(__('Error. Intente de Nuevo'));
            }
        /*}else{
            $this->Flash->error(__('Imposible eliminar.'));
        }*/
        return $this->redirect(['action' => 'index']);
    }
} 