<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class CandidatasController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
 
    public function index(){
        $this->loadModel('ViewCandidatas');
        $candidatas = $this->ViewCandidatas->find('all')->order(['posicion' => 'ASC', 'municipio' => 'ASC', 'nombres' => 'ASC'])->toArray();
        $this->set('candidatas', $candidatas);

        $this->loadModel('Categorias');
        $categorias = $this->Categorias->find('all')->where(['id <>' => '0'])->toArray();
        $this->set('categorias', $categorias);

        if ($this->request->is('post')) {
            $this->loadModel('Candidatas');
            $agregar = $this->Candidatas->newEntity();

            $agregar = $this->Candidatas->patchEntity($agregar, $this->request->getData());

            $agregar->busto = @$this->talla($this->request->data['busto']);
            $agregar->cintura = @$this->talla($this->request->data['cintura']);
            $agregar->cadera = @$this->talla($this->request->data['cadera']);
            $agregar->estatura = @$this->talla($this->request->data['estatura']);
           
            if ($this->Candidatas->save($agregar)) {
                $this->Flash->success(__('La candidata se ha registrado'));
            }else{
                $this->Flash->error(__('La candidata no se ha podido guardar. Vuelva a intentar.'));
            }
            return $this->redirect(['action' => 'index']);
        } 
    }

    public function editar(){
        $this->request->allowMethod(['post', 'get', 'save']);
        $this->loadModel('Candidatas');
        $editar = @$this->Candidatas->get($this->request->data['id']);
        $editar = $this->Candidatas->patchEntity($editar, $this->request->getData());
        
        $editar->id_categoria = @$this->request->data['id_categoria'];
        $editar->municipio = @$this->request->data['municipio'];
        $editar->nombres = @$this->request->data['nombres'];
        $editar->edad = @$this->request->data['edad'];
        $editar->cedula = @$this->request->data['cedula'];
        $editar->fecha_nacimiento = @$this->request->data['fecha_nacimiento'];
        $editar->telefono_1 = @$this->request->data['telefono_1'];
        $editar->telefono_2 = @$this->request->data['telefono_2'];
        $editar->instagram = @$this->request->data['instagram'];
        $editar->facebook = @$this->request->data['facebook'];
        $editar->ocupacion = @$this->request->data['ocupacion'];
        $editar->hobbie = @$this->request->data['hobbie'];
        $editar->busto = @$this->talla($this->request->data['busto']);
        $editar->cintura = @$this->talla($this->request->data['cintura']);
        $editar->cadera = @$this->talla($this->request->data['cadera']);
        $editar->estatura = @$this->talla($this->request->data['estatura']);
        $editar->experiencia = @$this->request->data['experiencia'];
        $editar->direccion = @$this->request->data['direccion'];
        $editar->posicion = @$this->request->data['posicion'];


        if ($this->Candidatas->save($editar)) {
            $this->Flash->success(__('Se ha modificado exitosamente.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function delete($id = null){
        /*$this->loadModel('Candidatas');
        $n = $this->Candidatas->find('all')->where(['id_catalogo' => $id])->count();
        if($n == 0){*/
            $this->loadModel('Candidatas');
            $this->request->allowMethod(['delete', 'post']);
            $eliminar = $this->Candidatas->get($id);
            if ($this->Candidatas->delete($eliminar)) {
                 $this->Flash->success(__('Se ha eliminado la candidata'));
            } else {
                $this->Flash->error(__('Error. Intente de Nuevo'));
            }
        /*}else{
            $this->Flash->error(__('Imposible eliminar.'));
        }*/
        return $this->redirect(['action' => 'index']);
    }

    public function change($estatus = null, $id = null){
        if($id){
            $this->loadModel('Candidatas');
            $variable = $this->Candidatas->query();
            $variable->update()
                ->set(['estatus' => $estatus])
                ->where(['id' => $id])
                ->execute(); 
        }
        return $this->redirect(['action' => 'index']);
    }
} 