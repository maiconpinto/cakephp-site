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
            return $this->redirect($this->referer());
        }

        $email = new Email();
        $email
            //->profile('gmail')
            ->template('Site.newsletter', 'Site.zurb')
            ->emailFormat('html')
            ->to('contato@maiconpinto.com.br')
            ->subject(__('New email from newsletter'))
            ->from($data['email'])
            ->viewVars([
                'image' => 'http://placehold.it/900x200',
                'title' => __('New email from newsletter'),
                'email' => $data['email'],
            ])
            ->send();

        $this->viewBuilder()->setLayout('json');
        $this->set(compact('data'));
    }
}