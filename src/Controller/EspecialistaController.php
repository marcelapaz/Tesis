<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Especialista Controller
 *
 * @property \App\Model\Table\EspecialistaTable $Especialista
 */
class EspecialistaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('especialista', $this->paginate($this->Especialista));
        $this->set('_serialize', ['especialista']);
    }

    /**
     * View method
     *
     * @param string|null $id Especialistum id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $especialistum = $this->Especialista->get($id, [
            'contain' => []
        ]);
        $this->set('especialistum', $especialistum);
        $this->set('_serialize', ['especialistum']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $especialistum = $this->Especialista->newEntity();
        if ($this->request->is('post')) {
            $especialistum = $this->Especialista->patchEntity($especialistum, $this->request->data);
            if ($this->Especialista->save($especialistum)) {
                $this->Flash->success('The especialistum has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The especialistum could not be saved. Please, try again.');
            }
        }
        $this->set(compact('especialistum'));
        $this->set('_serialize', ['especialistum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Especialistum id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $especialistum = $this->Especialista->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $especialistum = $this->Especialista->patchEntity($especialistum, $this->request->data);
            if ($this->Especialista->save($especialistum)) {
                $this->Flash->success('The especialistum has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The especialistum could not be saved. Please, try again.');
            }
        }
        $this->set(compact('especialistum'));
        $this->set('_serialize', ['especialistum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Especialistum id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $especialistum = $this->Especialista->get($id);
        if ($this->Especialista->delete($especialistum)) {
            $this->Flash->success('The especialistum has been deleted.');
        } else {
            $this->Flash->error('The especialistum could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
