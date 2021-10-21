<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

class InicioController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    public function index(){
        $this->loadModel('Rondas');
        $rondas = $this->Rondas->find('all')->order(['id' => 'ASC'])->toArray();
        $this->set('rondas', $rondas);

        $ronda = $this->Rondas->find('all')->where(['apertura' => true])->last();
        $this->set('ronda', $ronda);

        $this->loadModel('Candidatas');
        $candidatas = $this->Candidatas->find('all')->order(['municipio' => 'ASC', 'id_categoria' => 'ASC'])->toArray();
        $this->set('candidatas', $candidatas);

        $this->loadModel('Usuarios');
        $jurados = $this->Usuarios->find('all')->where(['privilegio' => 2])->count();
        $this->set('jurados', $jurados);

        $this->loadModel('Calificacion');
        $calificacion = $this->Calificacion->find('all')->where(['id_ronda' => $ronda['id']])->toArray();
        $this->set('calificacion', $calificacion);

        $this->loadModel('VotacionActividad');
        $estatus = $this->VotacionActividad->find('all')->where(['id' => 1])->last();
        $this->set('estatus', (!$estatus['estatus']) ? 1 : 0);
    }

    public function apertura($id = null){

        $this->loadModel('Rondas');
        $x = $this->Rondas->find('all')->where(['apertura' => 1])->last();

        $this->loadModel('Rondas');
        $update = $this->Rondas->query();
        $update->update()
            ->set(['apertura' => 0])
            ->execute(); 

        if($x['id'] != $id){
            $this->loadModel('Rondas');
            $update = $this->Rondas->query();
            $update->update()
                ->set(['apertura' => 1])
                ->where(['id' => $id])
                ->execute(); 
        }

        $this->loadModel('Rondas');
        $x = $this->Rondas->find('all')->where(['id' => $id])->last();

        $query = json_encode([$x]);
        @$this->response->type('json');
        @$this->response->body($query);
        return $this->response;
    }

    public function consulta(){

        $this->loadModel('Rondas');
        $ronda = $this->Rondas->find('all')->where(['apertura' => 1])->last();

        $this->loadModel('ViewCalificacionFinal');
        $x = $this->ViewCalificacionFinal->find('all')->where(['id_ronda' => $ronda['id']])->toArray();

        $query = json_encode([$x]);
        @$this->response->type('json');
        @$this->response->body($query);
        return $this->response;
    }

    public function votaciones($estatus = null){
        if($_SERVER['SERVER_NAME'] != 'desa1.falcon.gob.ve' && $_SERVER['SERVER_NAME'] != 'missfalcon.systecsgl.ga'){
            $db = ConnectionManager::get('public');
            $query = $db
                ->execute(
                    'UPDATE votacion_actividad set estatus = false where id = '.$estatus
                )
                ->fetchAll('assoc');
        }else{
            $this->loadModel('VotacionActividad');
            $variable = $this->VotacionActividad->query();
            $variable->update()
                ->set(['estatus' => $estatus])
                ->where(['id' => 1])
                ->execute(); 
        }
        return $this->redirect(['action' => 'index']);
    } 
}
