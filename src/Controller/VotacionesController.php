<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class VotacionesController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }

    public function index($candidata = null){
        $this->viewBuilder()->setLayout('votaciones');

        $ip = $this->IPreal();

        $this->loadModel('Candidatas');
        $consulta = $this->Candidatas->find('all')->where(['estatus' => true])->toArray();
        $this->set('consulta', $consulta);

        $this->loadModel('VotacionesGente');
        $verificacion = $this->VotacionesGente->find('all')->where(['ip' => $ip])->count();
        $this->set('verificacion', $verificacion);

        $this->loadModel('VotacionActividad');
        $estatus = $this->VotacionActividad->find('all')->where(['estatus' => TRUE])->count();
        $this->set('estatus', $estatus);

        if ($candidata != null) {
            if (!$verificacion) {
                    $this->loadModel('VotacionesGente');
                    $agregar = $this->VotacionesGente->newEntity();
                    $agregar->id_candidata = $candidata;
                    $agregar->ip = $ip;
                    if ($this->VotacionesGente->save($agregar)) {
                        return $this->redirect(['action' => 'index']);
                    }else{
                        $this->Flash->error(__('Lo sentimos ha ocurrido un error, por favor vuelva a intentar.'));
                        return $this->redirect(['action' => 'index']);
                    }
            }else{
                $this->Flash->error(__('Lo sentimos, usted ya pose un voto registrado.'));
            }
        } 
    }

    public function IPreal() {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];
           
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
       
        return $_SERVER['REMOTE_ADDR'];
    }   
} 