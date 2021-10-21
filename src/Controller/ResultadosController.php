<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ResultadosController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    public function index(){
        $this->loadModel('Categorias');
        $categorias = $this->Categorias->find('all')->order(['id' => 'ASC'])->toArray();
        $this->set('categorias', $categorias);

        $this->loadModel('ViewCalificacionFinalResultados');
        $calificacion = $this->ViewCalificacionFinalResultados->find('all')->order(['calificacion' => 'DESC'])->toArray();
        $this->set('calificacion', $calificacion);

        $this->loadModel('Usuarios');
        $jurados = $this->Usuarios->find('all')->where(['privilegio' => 2])->count();
        $this->set('jurados', $jurados);

        $this->loadModel('Rondas');
        $rondas = $this->Rondas->find('all')->where(['estatus' => true])->count();
        $this->set('rondas', $rondas);
    }

}
