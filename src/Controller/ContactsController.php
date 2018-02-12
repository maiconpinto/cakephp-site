<?php

namespace Site\Controller;

use Site\Controller\AppController;
use Cake\Mailer\Email;

class ContactsController extends AppController
{
    public function index()
    {
        $data = $this->request->getData();
        
        if (!$this->request->is('ajax')) {
            return $this->redirect($this->referer());
        }

        $email = new Email();
        $email
            //->profile('gmail')
            ->template('Site.contacts', 'Site.zurb')
            ->emailFormat('html')
            ->to('contato@maiconpinto.com.br')
            ->subject(__('New email from contact'))
            ->from($data['email'])
            ->viewVars([
                'image' => 'http://placehold.it/900x200',
                'title' => __('New email from contact'),
                'email' => $data['email'],
                'subject' => $data['subject'],
                'message' => $data['message'],
            ])
            ->send();

        $this->viewBuilder()->setLayout('json');
        $this->set(compact('data'));
    }
}