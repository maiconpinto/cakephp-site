<?php
namespace Site\Controller;

use Site\Controller\AppController;
use Cake\Event\Event;

/**
 * Skills Controller
 *
 * @property \Site\Model\Table\SkillsTable $Skills
 *
 * @method \Site\Model\Entity\Skill[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SkillsController extends AppController
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
        $skills = $this->paginate($this->Skills);

        $this->set(compact('skills'));
    }

    /**
     * View method
     *
     * @param string|null $id Skill id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $skill = $this->Skills->get($id, [
            'contain' => []
        ]);

        $this->set('skill', $skill);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $skill = $this->Skills->newEntity();
        if ($this->request->is('post')) {
            $skill = $this->Skills->patchEntity($skill, $this->request->getData());
            if ($this->Skills->save($skill)) {
                $this->Flash->success(__('The skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The skill could not be saved. Please, try again.'));
        }
        $this->set(compact('skill'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Skill id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $skill = $this->Skills->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $skill = $this->Skills->patchEntity($skill, $this->request->getData());
            if ($this->Skills->save($skill)) {
                $this->Flash->success(__('The skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The skill could not be saved. Please, try again.'));
        }
        $this->set(compact('skill'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Skill id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $skill = $this->Skills->get($id);
        if ($this->Skills->delete($skill)) {
            $this->Flash->success(__('The skill has been deleted.'));
        } else {
            $this->Flash->error(__('The skill could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
