<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tasktypes Controller
 *
 * @property \App\Model\Table\TasktypesTable $Tasktypes
 */
class TasktypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tasktypes = $this->paginate($this->Tasktypes);

        $this->set(compact('tasktypes'));
        $this->set('_serialize', ['tasktypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Tasktype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tasktype = $this->Tasktypes->get($id, [
            'contain' => ['Tasks']
        ]);

        $this->set('tasktype', $tasktype);
        $this->set('_serialize', ['tasktype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tasktype = $this->Tasktypes->newEntity();
        if ($this->request->is('post')) {
            $tasktype = $this->Tasktypes->patchEntity($tasktype, $this->request->data);
            if ($this->Tasktypes->save($tasktype)) {
                $this->Flash->success(__('The tasktype has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tasktype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tasktype'));
        $this->set('_serialize', ['tasktype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tasktype id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tasktype = $this->Tasktypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tasktype = $this->Tasktypes->patchEntity($tasktype, $this->request->data);
            if ($this->Tasktypes->save($tasktype)) {
                $this->Flash->success(__('The tasktype has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tasktype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tasktype'));
        $this->set('_serialize', ['tasktype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tasktype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tasktype = $this->Tasktypes->get($id);
        if ($this->Tasktypes->delete($tasktype)) {
            $this->Flash->success(__('The tasktype has been deleted.'));
        } else {
            $this->Flash->error(__('The tasktype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
