<?php

namespace Site\Controller;

use Site\Controller\AppController;

class NewsletterController extends AppController
{
    public function index()
    {
        $data = $this->request->getData();

        // IMPLEMENT CODE HERE

        $this->redirect($this->referer());
    }
}