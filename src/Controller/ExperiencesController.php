<?php
namespace Site\Controller;

use Site\Controller\AppController;
use Cake\Event\Event;

/**
 * Experiences Controller
 *
 * @property \Site\Model\Table\ExperiencesTable $Experiences
 *
 * @method \Site\Model\Entity\Experience[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExperiencesController extends AppController
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
        $experiences = $this->paginate($this->Experiences);

        $this->set(compact('experiences'));
    }

    /**
     * View method
     *
     * @param string|null $id Experience id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $experience = $this->Experiences->get($id, [
            'contain' => []
        ]);

        $this->set('experience', $experience);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $experience = $this->Experiences->newEntity();
        if ($this->request->is('post')) {
            $experience = $this->Experiences->patchEntity($experience, $this->request->getData());
            if ($this->Experiences->save($experience)) {
                $this->Flash->success(__('The experience has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The experience could not be saved. Please, try again.'));
        }
        $this->set(compact('experience'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Experience id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $experience = $this->Experiences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $experience = $this->Experiences->patchEntity($experience, $this->request->getData());
            if ($this->Experiences->save($experience)) {
                $this->Flash->success(__('The experience has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The experience could not be saved. Please, try again.'));
        }
        $this->set(compact('experience'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Experience id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $experience = $this->Experiences->get($id);
        if ($this->Experiences->delete($experience)) {
            $this->Flash->success(__('The experience has been deleted.'));
        } else {
            $this->Flash->error(__('The experience could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
