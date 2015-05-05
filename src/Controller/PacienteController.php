<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Paciente Controller
 *
 * @property \App\Model\Table\PacienteTable $Paciente
 */
class PacienteController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('paciente', $this->paginate($this->Paciente));
        $this->set('_serialize', ['paciente']);
    }

    /**
     * View method
     *
     * @param string|null $id Paciente id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paciente = $this->Paciente->get($id, [
            'contain' => []
        ]);
        $this->set('paciente', $paciente);
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paciente = $this->Paciente->newEntity();
        if ($this->request->is('post')) {
            $paciente = $this->Paciente->patchEntity($paciente, $this->request->data);
            if ($this->Paciente->save($paciente)) {
                $this->Flash->success('The paciente has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The paciente could not be saved. Please, try again.');
            }
        }
        $this->set(compact('paciente'));
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Paciente id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paciente = $this->Paciente->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paciente = $this->Paciente->patchEntity($paciente, $this->request->data);
            if ($this->Paciente->save($paciente)) {
                $this->Flash->success('The paciente has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The paciente could not be saved. Please, try again.');
            }
        }
        $this->set(compact('paciente'));
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Paciente id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paciente = $this->Paciente->get($id);
        if ($this->Paciente->delete($paciente)) {
            $this->Flash->success('The paciente has been deleted.');
        } else {
            $this->Flash->error('The paciente could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
