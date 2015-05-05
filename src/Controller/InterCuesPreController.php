<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InterCuesPre Controller
 *
 * @property \App\Model\Table\InterCuesPreTable $InterCuesPre
 */
class InterCuesPreController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('interCuesPre', $this->paginate($this->InterCuesPre));
        $this->set('_serialize', ['interCuesPre']);
    }

    /**
     * View method
     *
     * @param string|null $id Inter Cues Pre id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $interCuesPre = $this->InterCuesPre->get($id, [
            'contain' => []
        ]);
        $this->set('interCuesPre', $interCuesPre);
        $this->set('_serialize', ['interCuesPre']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $interCuesPre = $this->InterCuesPre->newEntity();
        if ($this->request->is('post')) {
            $interCuesPre = $this->InterCuesPre->patchEntity($interCuesPre, $this->request->data);
            if ($this->InterCuesPre->save($interCuesPre)) {
                $this->Flash->success('The inter cues pre has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The inter cues pre could not be saved. Please, try again.');
            }
        }
        $this->set(compact('interCuesPre'));
        $this->set('_serialize', ['interCuesPre']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Inter Cues Pre id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $interCuesPre = $this->InterCuesPre->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $interCuesPre = $this->InterCuesPre->patchEntity($interCuesPre, $this->request->data);
            if ($this->InterCuesPre->save($interCuesPre)) {
                $this->Flash->success('The inter cues pre has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The inter cues pre could not be saved. Please, try again.');
            }
        }
        $this->set(compact('interCuesPre'));
        $this->set('_serialize', ['interCuesPre']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inter Cues Pre id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $interCuesPre = $this->InterCuesPre->get($id);
        if ($this->InterCuesPre->delete($interCuesPre)) {
            $this->Flash->success('The inter cues pre has been deleted.');
        } else {
            $this->Flash->error('The inter cues pre could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
