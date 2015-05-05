<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ejercicio Controller
 *
 * @property \App\Model\Table\EjercicioTable $Ejercicio
 */
class EjercicioController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('ejercicio', $this->paginate($this->Ejercicio));
        $this->set('_serialize', ['ejercicio']);
    }

    /**
     * View method
     *
     * @param string|null $id Ejercicio id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ejercicio = $this->Ejercicio->get($id, [
            'contain' => []
        ]);
        $this->set('ejercicio', $ejercicio);
        $this->set('_serialize', ['ejercicio']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ejercicio = $this->Ejercicio->newEntity();
        if ($this->request->is('post')) {
            $ejercicio = $this->Ejercicio->patchEntity($ejercicio, $this->request->data);
            if ($this->Ejercicio->save($ejercicio)) {
                $this->Flash->success('The ejercicio has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ejercicio could not be saved. Please, try again.');
            }
        }
        $this->set(compact('ejercicio'));
        $this->set('_serialize', ['ejercicio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ejercicio id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ejercicio = $this->Ejercicio->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ejercicio = $this->Ejercicio->patchEntity($ejercicio, $this->request->data);
            if ($this->Ejercicio->save($ejercicio)) {
                $this->Flash->success('The ejercicio has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ejercicio could not be saved. Please, try again.');
            }
        }
        $this->set(compact('ejercicio'));
        $this->set('_serialize', ['ejercicio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ejercicio id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ejercicio = $this->Ejercicio->get($id);
        if ($this->Ejercicio->delete($ejercicio)) {
            $this->Flash->success('The ejercicio has been deleted.');
        } else {
            $this->Flash->error('The ejercicio could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
