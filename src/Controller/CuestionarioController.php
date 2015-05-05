<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cuestionario Controller
 *
 * @property \App\Model\Table\CuestionarioTable $Cuestionario
 */
class CuestionarioController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('cuestionario', $this->paginate($this->Cuestionario));
        $this->set('_serialize', ['cuestionario']);
    }

    /**
     * View method
     *
     * @param string|null $id Cuestionario id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cuestionario = $this->Cuestionario->get($id, [
            'contain' => []
        ]);
        $this->set('cuestionario', $cuestionario);
        $this->set('_serialize', ['cuestionario']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cuestionario = $this->Cuestionario->newEntity();
        if ($this->request->is('post')) {
            $cuestionario = $this->Cuestionario->patchEntity($cuestionario, $this->request->data);
            if ($this->Cuestionario->save($cuestionario)) {
                $this->Flash->success('The cuestionario has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The cuestionario could not be saved. Please, try again.');
            }
        }
        $this->set(compact('cuestionario'));
        $this->set('_serialize', ['cuestionario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cuestionario id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cuestionario = $this->Cuestionario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cuestionario = $this->Cuestionario->patchEntity($cuestionario, $this->request->data);
            if ($this->Cuestionario->save($cuestionario)) {
                $this->Flash->success('The cuestionario has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The cuestionario could not be saved. Please, try again.');
            }
        }
        $this->set(compact('cuestionario'));
        $this->set('_serialize', ['cuestionario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cuestionario id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cuestionario = $this->Cuestionario->get($id);
        if ($this->Cuestionario->delete($cuestionario)) {
            $this->Flash->success('The cuestionario has been deleted.');
        } else {
            $this->Flash->error('The cuestionario could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
