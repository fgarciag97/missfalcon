<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;

class PrincipalController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'registro']);
    }

    public function index(){
        $this->viewBuilder()->setLayout('principal');

        $this->loadModel('Patrocinantes');
        $logos = $this->Patrocinantes->find('all')->where(['estatus' => TRUE])->order(['denominacion' => 'ASC'])->toArray();
        $this->set('logos', $logos);

        $this->loadModel('FotoPricipalCandidatas');
        $miss = $this->FotoPricipalCandidatas->find('all')->where(['estatus' => TRUE])->order(['municipio' => 'ASC'])->toArray();
        $this->set('miss', $miss);
    }

    public function login(){
        if($this->request->is('post')){
            @$this->request->data['password'] = @strtoupper($this->request->data['password']);
            @$this->request->data['usuario'] = @strtoupper($this->request->data['usuario']);
            $user = $this->Auth->identify();
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
        }
    }

    public function logout(){
        $this->Auth->logout();
        return $this->redirect($this->Auth->logout());
    }
}