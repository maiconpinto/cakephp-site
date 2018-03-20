<?php
namespace Site\Controller;

use Site\Controller\AppController;
use Cake\Event\Event;

/**
 * Socials Controller
 *
 * @property \Site\Model\Table\SocialsTable $Socials
 *
 * @method \Site\Model\Entity\Social[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SocialsController extends AppController
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
        $socials = $this->paginate($this->Socials);

        $this->set(compact('socials'));
    }

    /**
     * View method
     *
     * @param string|null $id Social id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $social = $this->Socials->get($id, [
            'contain' => []
        ]);

        $this->set('social', $social);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $social = $this->Socials->newEntity();
        if ($this->request->is('post')) {
            $social = $this->Socials->patchEntity($social, $this->request->getData());
            if ($this->Socials->save($social)) {
                $this->Flash->success(__('The social has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social could not be saved. Please, try again.'));
        }
        $this->set(compact('social'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Social id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $social = $this->Socials->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $social = $this->Socials->patchEntity($social, $this->request->getData());
            if ($this->Socials->save($social)) {
                $this->Flash->success(__('The social has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social could not be saved. Please, try again.'));
        }
        $this->set(compact('social'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Social id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $social = $this->Socials->get($id);
        if ($this->Socials->delete($social)) {
            $this->Flash->success(__('The social has been deleted.'));
        } else {
            $this->Flash->error(__('The social could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
