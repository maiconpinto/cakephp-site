<?php
namespace Site\Controller;

use Site\Controller\AppController;
use Cake\Event\Event;

/**
 * Counters Controller
 *
 * @property \Site\Model\Table\CountersTable $Counters
 *
 * @method \Site\Model\Entity\Counter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CountersController extends AppController
{
    public function beforeRender(Event $event)
    {
        $this->viewBuilder()->setTheme(false);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $counters = $this->paginate($this->Counters);

        $this->set(compact('counters'));
    }

    /**
     * View method
     *
     * @param string|null $id Counter id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $counter = $this->Counters->get($id, [
            'contain' => []
        ]);

        $this->set('counter', $counter);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $counter = $this->Counters->newEntity();
        if ($this->request->is('post')) {
            $counter = $this->Counters->patchEntity($counter, $this->request->getData());
            if ($this->Counters->save($counter)) {
                $this->Flash->success(__('The counter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The counter could not be saved. Please, try again.'));
        }
        $this->set(compact('counter'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Counter id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $counter = $this->Counters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $counter = $this->Counters->patchEntity($counter, $this->request->getData());
            if ($this->Counters->save($counter)) {
                $this->Flash->success(__('The counter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The counter could not be saved. Please, try again.'));
        }
        $this->set(compact('counter'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Counter id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $counter = $this->Counters->get($id);
        if ($this->Counters->delete($counter)) {
            $this->Flash->success(__('The counter has been deleted.'));
        } else {
            $this->Flash->error(__('The counter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
