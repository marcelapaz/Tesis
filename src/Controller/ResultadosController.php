<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Resultados Controller
 *
 * @property \App\Model\Table\ResultadosTable $Resultados
 */
class ResultadosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('resultados', $this->paginate($this->Resultados));
        $this->set('_serialize', ['resultados']);
    }

    /**
     * View method
     *
     * @param string|null $id Resultado id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $resultado = $this->Resultados->get($id, [
            'contain' => []
        ]);
        $this->set('resultado', $resultado);
        $this->set('_serialize', ['resultado']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $resultado = $this->Resultados->newEntity();
        if ($this->request->is('post')) {
            $resultado = $this->Resultados->patchEntity($resultado, $this->request->data);
            if ($this->Resultados->save($resultado)) {
                $this->Flash->success('The resultado has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The resultado could not be saved. Please, try again.');
            }
        }
        $this->set(compact('resultado'));
        $this->set('_serialize', ['resultado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Resultado id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $resultado = $this->Resultados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $resultado = $this->Resultados->patchEntity($resultado, $this->request->data);
            if ($this->Resultados->save($resultado)) {
                $this->Flash->success('The resultado has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The resultado could not be saved. Please, try again.');
            }
        }
        $this->set(compact('resultado'));
        $this->set('_serialize', ['resultado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Resultado id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $resultado = $this->Resultados->get($id);
        if ($this->Resultados->delete($resultado)) {
            $this->Flash->success('The resultado has been deleted.');
        } else {
            $this->Flash->error('The resultado could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
