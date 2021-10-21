<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

class ResultadosInteractivosController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    public function index(){
        $this->loadModel('Categorias');
        $categorias = $this->Categorias->find('all')->order(['id' => 'ASC'])->toArray();
        $this->set('categorias', $categorias);

        $this->loadModel('ViewVotacionesGente');
        $calificacion = $this->ViewVotacionesGente->find('all')->order(['calificacion' => 'DESC'])->toArray();
        $this->set('calificacion', $calificacion);

        $this->carga();
    }

     public function carga(){

        if($_SERVER['SERVER_NAME'] != 'desa1.falcon.gob.ve' && $_SERVER['SERVER_NAME'] != 'missfalcon.systecsgl.ga'){
            $db = ConnectionManager::get('public');
            $query = $db
                ->execute(
                    'SELECT * FROM votaciones_gente'
                )
                ->fetchAll('assoc');
            if($query){
                $this->loadModel('VotacionesGente');
                $this->VotacionesGente->deleteAll(['id <>' => 0]);

                foreach ($query as $key) {
                    $reg = $this->VotacionesGente->newEntity();
                    $reg->id_candidata = $key['id_candidata'];
                    $reg->ip = $key['ip'];
                    $this->VotacionesGente->save($reg);
                }
            }
        }
        return true;
    }

}
