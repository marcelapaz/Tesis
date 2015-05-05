<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Imagen Controller
 *
 * @property \App\Model\Table\ImagenTable $Imagen
 */
class ImagenController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('imagen', $this->paginate($this->Imagen));
        $this->set('_serialize', ['imagen']);
    }

    /**
     * View method
     *
     * @param string|null $id Imagen id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagen = $this->Imagen->get($id, [
            'contain' => []
        ]);
        $this->set('imagen', $imagen);
        $this->set('_serialize', ['imagen']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagen = $this->Imagen->newEntity();
        if ($this->request->is('post')) {
            $imagen = $this->Imagen->patchEntity($imagen, $this->request->data);
            if ($this->Imagen->save($imagen)) {
                $this->Flash->success('The imagen has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The imagen could not be saved. Please, try again.');
            }
        }
        $this->set(compact('imagen'));
        $this->set('_serialize', ['imagen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagen id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagen = $this->Imagen->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagen = $this->Imagen->patchEntity($imagen, $this->request->data);
            if ($this->Imagen->save($imagen)) {
                $this->Flash->success('The imagen has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The imagen could not be saved. Please, try again.');
            }
        }
        $this->set(compact('imagen'));
        $this->set('_serialize', ['imagen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagen id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagen = $this->Imagen->get($id);
        if ($this->Imagen->delete($imagen)) {
            $this->Flash->success('The imagen has been deleted.');
        } else {
            $this->Flash->error('The imagen could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
