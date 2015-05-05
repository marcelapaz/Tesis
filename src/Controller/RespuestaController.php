<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Respuesta Controller
 *
 * @property \App\Model\Table\RespuestaTable $Respuesta
 */
class RespuestaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('respuesta', $this->paginate($this->Respuesta));
        $this->set('_serialize', ['respuesta']);
    }

    /**
     * View method
     *
     * @param string|null $id Respuestum id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $respuestum = $this->Respuesta->get($id, [
            'contain' => []
        ]);
        $this->set('respuestum', $respuestum);
        $this->set('_serialize', ['respuestum']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $respuestum = $this->Respuesta->newEntity();
        if ($this->request->is('post')) {
            $respuestum = $this->Respuesta->patchEntity($respuestum, $this->request->data);
            if ($this->Respuesta->save($respuestum)) {
                $this->Flash->success('The respuestum has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The respuestum could not be saved. Please, try again.');
            }
        }
        $this->set(compact('respuestum'));
        $this->set('_serialize', ['respuestum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Respuestum id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $respuestum = $this->Respuesta->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $respuestum = $this->Respuesta->patchEntity($respuestum, $this->request->data);
            if ($this->Respuesta->save($respuestum)) {
                $this->Flash->success('The respuestum has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The respuestum could not be saved. Please, try again.');
            }
        }
        $this->set(compact('respuestum'));
        $this->set('_serialize', ['respuestum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Respuestum id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $respuestum = $this->Respuesta->get($id);
        if ($this->Respuesta->delete($respuestum)) {
            $this->Flash->success('The respuestum has been deleted.');
        } else {
            $this->Flash->error('The respuestum could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
