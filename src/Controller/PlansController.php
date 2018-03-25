<?php
namespace Site\Controller;

use Site\Controller\AppController;

/**
 * Plans Controller
 *
 * @property \Site\Model\Table\PlansTable $Plans
 *
 * @method \Site\Model\Entity\Plan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlansController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $plans = $this->paginate($this->Plans);

        $this->set(compact('plans'));
    }

    /**
     * View method
     *
     * @param string|null $id Plan id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $plan = $this->Plans->get($id, [
            'contain' => []
        ]);

        $this->set('plan', $plan);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $plan = $this->Plans->newEntity();
        if ($this->request->is('post')) {
            $plan = $this->Plans->patchEntity($plan, $this->request->getData());
            if ($this->Plans->save($plan)) {
                $this->Flash->success(__('The plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plan could not be saved. Please, try again.'));
        }
        $this->set(compact('plan'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Plan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $plan = $this->Plans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $plan = $this->Plans->patchEntity($plan, $this->request->getData());
            if ($this->Plans->save($plan)) {
                $this->Flash->success(__('The plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plan could not be saved. Please, try again.'));
        }
        $this->set(compact('plan'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Plan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $plan = $this->Plans->get($id);
        if ($this->Plans->delete($plan)) {
            $this->Flash->success(__('The plan has been deleted.'));
        } else {
            $this->Flash->error(__('The plan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
