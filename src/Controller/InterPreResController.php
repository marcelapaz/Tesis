<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InterPreRes Controller
 *
 * @property \App\Model\Table\InterPreResTable $InterPreRes
 */
class InterPreResController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('interPreRes', $this->paginate($this->InterPreRes));
        $this->set('_serialize', ['interPreRes']);
    }

    /**
     * View method
     *
     * @param string|null $id Inter Pre Re id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $interPreRe = $this->InterPreRes->get($id, [
            'contain' => []
        ]);
        $this->set('interPreRe', $interPreRe);
        $this->set('_serialize', ['interPreRe']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $interPreRe = $this->InterPreRes->newEntity();
        if ($this->request->is('post')) {
            $interPreRe = $this->InterPreRes->patchEntity($interPreRe, $this->request->data);
            if ($this->InterPreRes->save($interPreRe)) {
                $this->Flash->success('The inter pre re has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The inter pre re could not be saved. Please, try again.');
            }
        }
        $this->set(compact('interPreRe'));
        $this->set('_serialize', ['interPreRe']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Inter Pre Re id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $interPreRe = $this->InterPreRes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $interPreRe = $this->InterPreRes->patchEntity($interPreRe, $this->request->data);
            if ($this->InterPreRes->save($interPreRe)) {
                $this->Flash->success('The inter pre re has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The inter pre re could not be saved. Please, try again.');
            }
        }
        $this->set(compact('interPreRe'));
        $this->set('_serialize', ['interPreRe']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inter Pre Re id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $interPreRe = $this->InterPreRes->get($id);
        if ($this->InterPreRes->delete($interPreRe)) {
            $this->Flash->success('The inter pre re has been deleted.');
        } else {
            $this->Flash->error('The inter pre re could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
