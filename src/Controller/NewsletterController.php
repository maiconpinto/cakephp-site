<?php

namespace Site\Controller;

use Site\Controller\AppController;
use Cake\Mailer\Email;

class NewsletterController extends AppController
{
    public function index()
    {
        $data = $this->request->getData();

        // IMPLEMENT CODE HERE
        if (!$this->request->is('ajax')) {
            $this->redirect($this->referer());
        }

        $email = new Email();
        $email
            ->profile('gmail')
            ->template('Site.newsletter', 'Site.zurb')
            ->emailFormat('html')
            ->to('contato@maiconpinto.com.br')
            ->subject(__('New e-mail for newsletter.'))
            ->from($data['email'])
            ->viewVars([
                'title' => __('title'),
                'description' => __('description'),
                'image' => '"http://placehold.it/500x200'
            ])
            ->send();

        $this->viewBuilder()->setLayout('json');
        $this->set(compact('data'));
    }
}