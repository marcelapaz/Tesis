<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoImagen Controller
 *
 * @property \App\Model\Table\TipoImagenTable $TipoImagen
 */
class TipoImagenController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tipoImagen', $this->paginate($this->TipoImagen));
        $this->set('_serialize', ['tipoImagen']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Imagen id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoImagen = $this->TipoImagen->get($id, [
            'contain' => []
        ]);
        $this->set('tipoImagen', $tipoImagen);
        $this->set('_serialize', ['tipoImagen']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoImagen = $this->TipoImagen->newEntity();
        if ($this->request->is('post')) {
            $tipoImagen = $this->TipoImagen->patchEntity($tipoImagen, $this->request->data);
            if ($this->TipoImagen->save($tipoImagen)) {
                $this->Flash->success('The tipo imagen has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tipo imagen could not be saved. Please, try again.');
            }
        }
        $this->set(compact('tipoImagen'));
        $this->set('_serialize', ['tipoImagen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Imagen id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoImagen = $this->TipoImagen->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoImagen = $this->TipoImagen->patchEntity($tipoImagen, $this->request->data);
            if ($this->TipoImagen->save($tipoImagen)) {
                $this->Flash->success('The tipo imagen has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tipo imagen could not be saved. Please, try again.');
            }
        }
        $this->set(compact('tipoImagen'));
        $this->set('_serialize', ['tipoImagen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Imagen id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoImagen = $this->TipoImagen->get($id);
        if ($this->TipoImagen->delete($tipoImagen)) {
            $this->Flash->success('The tipo imagen has been deleted.');
        } else {
            $this->Flash->error('The tipo imagen could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
