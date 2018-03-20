<?php
namespace Site\Controller;

use Site\Controller\AppController;
use Cake\Event\Event;

/**
 * Portfolios Controller
 *
 * @property \Site\Model\Table\PortfoliosTable $Portfolios
 *
 * @method \Site\Model\Entity\Portfolio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PortfoliosController extends AppController
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
        $portfolios = $this->paginate($this->Portfolios);

        $this->set(compact('portfolios'));
    }

    /**
     * View method
     *
     * @param string|null $id Portfolio id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $portfolio = $this->Portfolios->get($id, [
            'contain' => []
        ]);

        $this->set('portfolio', $portfolio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $portfolio = $this->Portfolios->newEntity();
        if ($this->request->is('post')) {
            $portfolio = $this->Portfolios->patchEntity($portfolio, $this->request->getData());
            if ($this->Portfolios->save($portfolio)) {
                $this->Flash->success(__('The portfolio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The portfolio could not be saved. Please, try again.'));
        }
        $this->set(compact('portfolio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Portfolio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $portfolio = $this->Portfolios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $portfolio = $this->Portfolios->patchEntity($portfolio, $this->request->getData());
            if ($this->Portfolios->save($portfolio)) {
                $this->Flash->success(__('The portfolio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The portfolio could not be saved. Please, try again.'));
        }
        $this->set(compact('portfolio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Portfolio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $portfolio = $this->Portfolios->get($id);
        if ($this->Portfolios->delete($portfolio)) {
            $this->Flash->success(__('The portfolio has been deleted.'));
        } else {
            $this->Flash->error(__('The portfolio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
