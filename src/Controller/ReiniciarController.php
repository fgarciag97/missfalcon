<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ReiniciarController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'gente']);
    }

    public function index(){
        $this->loadModel('Calificacion');
        $this->Calificacion->deleteAll(['id <>' => 0]);
        return $this->redirect(['controller' => 'Inicio', 'action' => 'index']);
    }
    public function gente(){
        $this->loadModel('VotacionesGente');
        $this->VotacionesGente->deleteAll(['id <>' => 0]);
        return $this->redirect(['controller' => 'Inicio', 'action' => 'index']);
    }




















   
} 