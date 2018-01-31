<?php

namespace Site\Controller;

use Site\Controller\AppController;

class NewsletterController extends AppController
{
    public function index()
    {
        $data = $this->request->getData();

        // IMPLEMENT CODE HERE
        if (!$this->request->is('ajax')) {
            $this->redirect($this->referer());
        }

        $this->viewBuilder()->setLayout('json');
        $this->set(compact('data'));
    }
}