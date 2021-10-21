<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class RondasController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
 
    public function index(){
        $this->loadModel('Rondas');
        $rondas = $this->Rondas->find('all')->order(['id' => 'ASC'])->toArray();
        $this->set('rondas', $rondas);

        if ($this->request->is('post')) {
            $this->loadModel('Rondas');
            $agregar = $this->Rondas->newEntity();
            $agregar = $this->Rondas->patchEntity($agregar, $this->request->getData());

            if ($this->Rondas->save($agregar)) {
                $this->Flash->success(__('La ronda se ha registrado'));
            }else{
                $this->Flash->error(__('La ronda no se ha podido guardar. Vuelva a intentar.'));
            }
            return $this->redirect(['action' => 'index']);
        } 
    }

    public function change($estatus = null, $id = null){
        if($id){
            $this->loadModel('Rondas');
            $variable = $this->Rondas->query();
            $variable->update()
                ->set(['estatus' => $estatus])
                ->where(['id' => $id])
                ->execute(); 
        }
        return $this->redirect(['action' => 'index']);
    }

    public function editar(){
        $this->request->allowMethod(['post', 'get', 'save']);
        $this->loadModel('Rondas');
        $editar = @$this->Rondas->get($this->request->data['id']);
        $editar = $this->Rondas->patchEntity($editar, $this->request->getData());
        
        $editar->denominacion = @$this->request->data['denominacion'];
        if ($this->Rondas->save($editar)) {
            $this->Flash->success(__('Se ha modificado exitosamente.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function delete($id = null){
        /*$this->loadModel('Rondas');
        $n = $this->Rondas->find('all')->where(['id_catalogo' => $id])->count();
        if($n == 0){*/
            $this->loadModel('Rondas');
            $this->request->allowMethod(['delete', 'post']);
            $eliminar = $this->Rondas->get($id);
            if ($this->Rondas->delete($eliminar)) {
                 $this->Flash->success(__('Se ha eliminado el usuario'));
            } else {
                $this->Flash->error(__('Error. Intente de Nuevo'));
            }
        /*}else{
            $this->Flash->error(__('Imposible eliminar.'));
        }*/
        return $this->redirect(['action' => 'index']);
    }
} 