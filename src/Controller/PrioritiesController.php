<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Priorities Controller
 *
 * @property \App\Model\Table\PrioritiesTable $Priorities
 */
class PrioritiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $priorities = $this->paginate($this->Priorities);

        $this->set(compact('priorities'));
        $this->set('_serialize', ['priorities']);
    }

    /**
     * View method
     *
     * @param string|null $id Priority id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $priority = $this->Priorities->get($id, [
            'contain' => []
        ]);

        $this->set('priority', $priority);
        $this->set('_serialize', ['priority']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $priority = $this->Priorities->newEntity();
        if ($this->request->is('post')) {
            $priority = $this->Priorities->patchEntity($priority, $this->request->data);
            if ($this->Priorities->save($priority)) {
                $this->Flash->success(__('The priority has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The priority could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('priority'));
        $this->set('_serialize', ['priority']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Priority id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $priority = $this->Priorities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $priority = $this->Priorities->patchEntity($priority, $this->request->data);
            if ($this->Priorities->save($priority)) {
                $this->Flash->success(__('The priority has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The priority could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('priority'));
        $this->set('_serialize', ['priority']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Priority id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $priority = $this->Priorities->get($id);
        if ($this->Priorities->delete($priority)) {
            $this->Flash->success(__('The priority has been deleted.'));
        } else {
            $this->Flash->error(__('The priority could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
