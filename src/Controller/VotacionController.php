<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class VotacionController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    public function index(){
        $this->viewBuilder()->setLayout('votacion');

        $this->loadModel('Rondas');
        $ronda = $this->Rondas->find('all')->where(['apertura' => true])->last();
        $this->set('ronda', $ronda);

        $this->loadModel('Calificacion');
        $calificacion = $this->Calificacion->find('all')->where(['id_ronda' => $ronda['id'], 'id_jurado' => @$this->request->getSession()->read("Auth.User.id")])->toArray();
        $this->set('calificacion', $calificacion);

        if($ronda){
            $this->loadModel('Candidatas');
            $candidatas = $this->Candidatas->find('all')->where(['estatus' => true])->order(['posicion' => 'ASC'])->toArray();
            $this->set('candidatas', $candidatas);
        }else{
            $this->Flash->error(__('La ronda ha sido cerrado'));
            return $this->redirect(['controller' => 'Inicio', 'action' => 'index']);
        }
    }

    public function votar($ronda = null, $candidata = null, $puntaje = null){
        
        $this->loadModel('Calificacion');
        $this->Calificacion->deleteAll(['id_ronda IN' => $ronda, 'id_candidata IN' => $candidata, 'id_jurado' => @$this->request->getSession()->read("Auth.User.id")]);

        $save = $this->Calificacion->newEntity();
        $save->id_ronda = $ronda;
        $save->id_candidata = $candidata;
        $save->id_jurado = @$this->request->getSession()->read("Auth.User.id");
        $save->puntuacion = $puntaje;
        $this->Calificacion->save($save);

        $query = json_encode([true]);
        @$this->response->type('json');
        @$this->response->body($query);
        return $this->response;
    }

    public function consulta($actual = null){

        $this->loadModel('Rondas');
        $ronda = $this->Rondas->find('all')->where(['apertura' => 1, 'id' => $actual])->count();

        $query = json_encode([$ronda]);
        @$this->response->type('json');
        @$this->response->body($query);
        return $this->response;
    }
} 