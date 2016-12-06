<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tasks Controller
 *
 * @property \App\Model\Table\TasksTable $Tasks
 */
class TasksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Types', 'Priorities', 'States', 'Projects', 'Products', 'Assigners', 'Receivers']
        ];
        $tasks = $this->paginate($this->Tasks);

        $this->set(compact('tasks'));
        $this->set('_serialize', ['tasks']);
    }

    /**
     * View method
     *
     * @param string|null $id Task id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $task = $this->Tasks->get($id, [
            'contain' => ['Types', 'Priorities', 'States', 'Projects', 'Products', 'Assigners', 'Receivers']
        ]);

        $this->set('task', $task);
        $this->set('_serialize', ['task']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $task = $this->Tasks->newEntity();
        if ($this->request->is('post')) {
            $task = $this->Tasks->patchEntity($task, $this->request->data);
            $task->assigner_id = $this->Auth->user('id');
            if ($this->Tasks->save($task)) {
                $this->Flash->success(__('The task has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The task could not be saved. Please, try again.'));
            }
        }
        $types = $this->Tasks->Types->find('list', ['limit' => 200]);
        $priorities = $this->Tasks->Priorities->find('list', ['limit' => 200]);
        $states = $this->Tasks->States->find('list', ['limit' => 200]);
        $projects = $this->Tasks->Projects->find('list', ['limit' => 200]);
        $products = $this->Tasks->Products->find('list', ['limit' => 200]);
        $assigners = $this->Tasks->Assigners->find('list', ['limit' => 200]);
        $receivers = $this->Tasks->Receivers->find('list', ['limit' => 200]);
        $this->set(compact('task', 'types', 'priorities', 'states', 'projects', 'products', 'assigners', 'receivers'));
        $this->set('_serialize', ['task']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Task id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $task = $this->Tasks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $task = $this->Tasks->patchEntity($task, $this->request->data);
            $task->assigner_id = $this->Auth->user('id');
            if ($this->Tasks->save($task)) {
                $this->Flash->success(__('The task has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The task could not be saved. Please, try again.'));
            }
        }
        $types = $this->Tasks->Types->find('list', ['limit' => 200]);
        $priorities = $this->Tasks->Priorities->find('list', ['limit' => 200]);
        $states = $this->Tasks->States->find('list', ['limit' => 200]);
        $projects = $this->Tasks->Projects->find('list', ['limit' => 200]);
        $products = $this->Tasks->Products->find('list', ['limit' => 200]);
        $assigners = $this->Tasks->Assigners->find('list', ['limit' => 200]);
        $receivers = $this->Tasks->Receivers->find('list', ['limit' => 200]);
        $this->set(compact('task', 'types', 'priorities', 'states', 'projects', 'products', 'assigners', 'receivers'));
        $this->set('_serialize', ['task']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Task id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $task = $this->Tasks->get($id);
        if ($this->Tasks->delete($task)) {
            $this->Flash->success(__('The task has been deleted.'));
        } else {
            $this->Flash->error(__('The task could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function activeTasks()
    {
        $this->paginate = [
            'contain' => ['Types', 'Priorities', 'States', 'Projects', 'Products', 'Assigners', 'Receivers']
        ];

        $tasks = $this->Tasks->find()->matching(
            'States', function ($q) {
                return $q->where(['States.name !=' => 'Solved']);
            }
        );

        $tasks = $this->paginate($tasks);
        $this->set(compact('tasks'));
    }

    public function myTodo()
    {
        $userId = $this->Auth->user('id');
        $this->paginate = [
            'contain' => ['Types', 'Priorities', 'States', 'Projects', 'Products', 'Assigners', 'Receivers']
        ];

        $tasks = $this->Tasks->find()->matching(
            'Receivers', function ($q) use ($userId){
                return $q->where(['Receivers.id' => $userId]);
            }
        )->matching(
            'States', function ($q) {
                return $q->where(['States.name !=' => 'Solved']);
            }
        );

        $tasks = $this->paginate($tasks);
        $this->set(compact('tasks'));
    }

    public function assignedToMe()
    {
        $userId = $this->Auth->user('id');
        $this->paginate = [
            'contain' => ['Types', 'Priorities', 'States', 'Projects', 'Products', 'Assigners', 'Receivers']
        ];

        $tasks = $this->Tasks->find()->matching(
            'Receivers', function ($q) use ($userId){
                return $q->where(['Receivers.id' => $userId]);
            }
        );

        $tasks = $this->paginate($tasks);
        $this->set(compact('tasks'));
    }

    public function assignedToOthers()
    {
        $userId = $this->Auth->user('id');
        $this->paginate = [
            'contain' => ['Types', 'Priorities', 'States', 'Projects', 'Products', 'Assigners', 'Receivers']
        ];

        $tasks = $this->Tasks->find()->matching(
            'Assigners', function ($q) use ($userId){
                return $q->where(['Assigners.id' => $userId]);
            }
        );

        $tasks = $this->paginate($tasks);
        $this->set(compact('tasks'));
    }


    public function isAuthorized($user)
    {
        if (in_array($this->request->action, ['index', 'view', 'add', 'myTodo', 'assignedToMe', 'assignedToOthers', 'activeTasks'])) {
            return true;
        }

        if (in_array($this->request->action, ['edit', 'delete'])) {
            $taskId = (int)$this->request->params['pass'][0];
            if ($this->Tasks->isOwnedBy($taskId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }
}
