<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class CategoriasController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
 
    public function index(){
        $this->loadModel('Categorias');
        $consulta = $this->Categorias->find('all')->order(['denominacion' => 'ASC'])->toArray();
        $this->set('consulta', $consulta);

        if ($this->request->is('post')) {
            $this->loadModel('Categorias');
            $agregar = $this->Categorias->newEntity();
            $agregar = $this->Categorias->patchEntity($agregar, $this->request->getData());

            if ($this->Categorias->save($agregar)) {
                $this->Flash->success(__('Se ha agregado una nueva categoria'));
            }else{
                $this->Flash->error(__('Error. Vuelva a intentar.'));
            }
            return $this->redirect(['action' => 'index']);
        } 
    }

    public function change($estatus = null, $id = null){
        if($id){
            $this->loadModel('Categorias');
            $variable = $this->Categorias->query();
            $variable->update()
                ->set(['estatus' => $estatus])
                ->where(['id' => $id])
                ->execute(); 
        }
        return $this->redirect(['action' => 'index']);
    }

    public function editar(){
        $this->request->allowMethod(['post', 'get', 'save']);
        $this->loadModel('Categorias');
        $editar = @$this->Categorias->get($this->request->data['id']);
        $editar = $this->Categorias->patchEntity($editar, $this->request->getData());
        $editar->denominacion = @$this->request->data['denominacion'];
        if ($this->Categorias->save($editar)) {
            $this->Flash->success(__('Se ha modificado exitosamente.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function eliminar($id = null){
            $this->loadModel('Categorias');
            $this->request->allowMethod(['delete', 'post']);
            $eliminar = $this->Categorias->get($id);
            if ($this->Categorias->delete($eliminar)) {
                 $this->Flash->success(__('Se ha eliminado el usuario'));
            } else {
                $this->Flash->error(__('Error. Intente de Nuevo'));
            }
        return $this->redirect(['action' => 'index']);
    }
} 