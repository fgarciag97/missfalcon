<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class PatrocinantesController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
 
    public function index(){
        $this->loadModel('Patrocinantes');
        $consulta = $this->Patrocinantes->find('all')->order(['denominacion' => 'ASC'])->toArray();
        $this->set('consulta', $consulta);

        if ($this->request->is('post')) {
            $this->loadModel('Patrocinantes');
            $agregar = $this->Patrocinantes->newEntity();
            $agregar = $this->Patrocinantes->patchEntity($agregar, $this->request->getData());

            if ($this->Patrocinantes->save($agregar)) {
                $this->Flash->success(__('Se ha agregado una nueva categoria'));
            }else{
                $this->Flash->error(__('Error. Vuelva a intentar.'));
            }
            return $this->redirect(['action' => 'index']);
        } 
    }

    public function change($estatus = null, $id = null){
        if($id){
            $this->loadModel('Patrocinantes');
            $variable = $this->Patrocinantes->query();
            $variable->update()
                ->set(['estatus' => $estatus])
                ->where(['id' => $id])
                ->execute(); 
        }
        return $this->redirect(['action' => 'index']);
    }

    public function editar(){
        $this->request->allowMethod(['post', 'get', 'save']);
        $this->loadModel('Patrocinantes');
        $editar = @$this->Patrocinantes->get($this->request->data['id']);
        $editar = $this->Patrocinantes->patchEntity($editar, $this->request->getData());
        $editar->nomrbe = @$this->request->data['nomrbe'];
        $editar->denominacion = @$this->request->data['denominacion'];
        if ($this->Patrocinantes->save($editar)) {
            $this->Flash->success(__('Se ha modificado exitosamente.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function eliminar($id = null){
            $this->loadModel('Patrocinantes');
            $this->request->allowMethod(['delete', 'post']);
            $eliminar = $this->Patrocinantes->get($id);
            if ($this->Patrocinantes->delete($eliminar)) {
                 $this->Flash->success(__('Se ha eliminado el usuario'));
            } else {
                $this->Flash->error(__('Error. Intente de Nuevo'));
            }
        return $this->redirect(['action' => 'index']);
    }
} 