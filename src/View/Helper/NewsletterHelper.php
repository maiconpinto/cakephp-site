<?php

namespace Site\View\Helper;

use Cake\View\Helper;

class NewsletterHelper extends Helper
{
    public $helpers = ['Url'];

    public function url()
    {
        return $this->Url->build(['plugin' => 'Site', 'controller' => 'Newsletter', 'action' => 'index']);
    }
}