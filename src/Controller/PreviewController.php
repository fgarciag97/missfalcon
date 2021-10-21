<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class PreviewController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    public function index(){
        $this->viewBuilder()->setLayout('preview');
        $this->loadModel('FotoPreView');
        $pre = $this->FotoPreView->find('all')->where(['estatus' => TRUE])->order(['municipio' => 'ASC'])->toArray();
        $this->set('pre', $pre);
    }

    public function candidatas(){
        $this->loadModel('FotoPreView');
        $pre = $this->FotoPreView->find('all')->order(['municipio' => 'ASC'])->toArray();
        $this->set('pre', $pre);

        if ($this->request->is('post')) {
            $this->loadModel('FotoPreView');
            $agregar = $this->FotoPreView->newEntity();
            $agregar = $this->FotoPreView->patchEntity($agregar, $this->request->getData());

            if ($this->FotoPreView->save($agregar)) {
                $this->Flash->success(__('La ronda se ha registrado'));
            }else{
                $this->Flash->error(__('La ronda no se ha podido guardar. Vuelva a intentar.'));
            }
            return $this->redirect(['action' => 'candidatas']);
        } 
    }

    public function change($estatus = null, $id = null){
        if($id){
            $this->loadModel('FotoPreView');
            $variable = $this->FotoPreView->query();
            $variable->update()
                ->set(['estatus' => $estatus])
                ->where(['id' => $id])
                ->execute(); 
        }
        return $this->redirect(['action' => 'candidatas']);
    }

     public function edit(){
        $this->request->allowMethod(['post', 'get', 'save']);
        $this->loadModel('FotoPreView');
        $editar = @$this->FotoPreView->get($this->request->data['id']);
        $editar = $this->FotoPreView->patchEntity($editar, $this->request->getData());
        $editar->municipio = @$this->request->data['municipio'];
        if ($this->FotoPreView->save($editar)) {
            $this->Flash->success(__('Se ha modificado exitosamente.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'candidatas']);
    }

    public function delete($id = null){
        /*$this->loadModel('Rondas');
        $n = $this->Rondas->find('all')->where(['id_catalogo' => $id])->count();
        if($n == 0){*/
            $this->loadModel('FotoPreView');
            $this->request->allowMethod(['delete', 'post']);
            $eliminar = $this->FotoPreView->get($id);
            if ($this->FotoPreView->delete($eliminar)) {
                 $this->Flash->success(__('Se ha eliminado el usuario'));
            } else {
                $this->Flash->error(__('Error. Intente de Nuevo'));
            }
        /*}else{
            $this->Flash->error(__('Imposible eliminar.'));
        }*/
        return $this->redirect(['action' => 'candidatas']);
    }
} 