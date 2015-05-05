<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InterEjIm Controller
 *
 * @property \App\Model\Table\InterEjImTable $InterEjIm
 */
class InterEjImController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('interEjIm', $this->paginate($this->InterEjIm));
        $this->set('_serialize', ['interEjIm']);
    }

    /**
     * View method
     *
     * @param string|null $id Inter Ej Im id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $interEjIm = $this->InterEjIm->get($id, [
            'contain' => []
        ]);
        $this->set('interEjIm', $interEjIm);
        $this->set('_serialize', ['interEjIm']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $interEjIm = $this->InterEjIm->newEntity();
        if ($this->request->is('post')) {
            $interEjIm = $this->InterEjIm->patchEntity($interEjIm, $this->request->data);
            if ($this->InterEjIm->save($interEjIm)) {
                $this->Flash->success('The inter ej im has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The inter ej im could not be saved. Please, try again.');
            }
        }
        $this->set(compact('interEjIm'));
        $this->set('_serialize', ['interEjIm']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Inter Ej Im id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $interEjIm = $this->InterEjIm->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $interEjIm = $this->InterEjIm->patchEntity($interEjIm, $this->request->data);
            if ($this->InterEjIm->save($interEjIm)) {
                $this->Flash->success('The inter ej im has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The inter ej im could not be saved. Please, try again.');
            }
        }
        $this->set(compact('interEjIm'));
        $this->set('_serialize', ['interEjIm']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inter Ej Im id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $interEjIm = $this->InterEjIm->get($id);
        if ($this->InterEjIm->delete($interEjIm)) {
            $this->Flash->success('The inter ej im has been deleted.');
        } else {
            $this->Flash->error('The inter ej im could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
