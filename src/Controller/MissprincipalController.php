<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class MissprincipalController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
 
    public function index(){
        $this->loadModel('FotoPricipalCandidatas');
        $consulta = $this->FotoPricipalCandidatas->find('all')->order(['municipio' => 'ASC'])->toArray();
        $this->set('consulta', $consulta);

        if ($this->request->is('post')) {
            $this->loadModel('FotoPricipalCandidatas');
            $agregar = $this->FotoPricipalCandidatas->newEntity();
            $agregar = $this->FotoPricipalCandidatas->patchEntity($agregar, $this->request->getData());
            $agregar->id_usuario = @$this->request->getSession()->read("Auth.User.id");

            if ($this->FotoPricipalCandidatas->save($agregar)) {
                $this->Flash->success(__('Se ha agregado una nueva categoria'));
            }else{
                $this->Flash->error(__('Error. Vuelva a intentar.'));
            }
            return $this->redirect(['action' => 'index']);
        } 
    }

    public function change($estatus = null, $id = null){
        if($id){
            $this->loadModel('FotoPricipalCandidatas');
            $variable = $this->FotoPricipalCandidatas->query();
            $variable->update()
                ->set(['estatus' => $estatus])
                ->where(['id' => $id])
                ->execute(); 
        }
        return $this->redirect(['action' => 'index']);
    }

    public function editar(){
        $this->request->allowMethod(['post', 'get', 'save']);
        $this->loadModel('FotoPricipalCandidatas');
        $editar = @$this->FotoPricipalCandidatas->get($this->request->data['id']);
        $editar = $this->FotoPricipalCandidatas->patchEntity($editar, $this->request->getData());
        $editar->nombres_candidata = @$this->request->data['nombres_candidata'];
        $editar->municipio = @$this->request->data['municipio'];
        $editar->categoria = @$this->request->data['categoria'];
        if ($this->FotoPricipalCandidatas->save($editar)) {
            $this->Flash->success(__('Se ha modificado exitosamente.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function eliminar($id = null){
            $this->loadModel('FotoPricipalCandidatas');
            $this->request->allowMethod(['delete', 'post']);
            $eliminar = $this->FotoPricipalCandidatas->get($id);
            if ($this->FotoPricipalCandidatas->delete($eliminar)) {
                 $this->Flash->success(__('Se ha eliminado el usuario'));
            } else {
                $this->Flash->error(__('Error. Intente de Nuevo'));
            }
        return $this->redirect(['action' => 'index']);
    }
} 