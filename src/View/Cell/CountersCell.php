<?php
namespace Site\View\Cell;

use Cake\View\Cell;

/**
 * Counters cell
 */
class CountersCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
     public function display($element)
     {
         $this->set('element', $element);

         $this->loadModel('Counters');
         $counters = $this->Counters->find('all');
         $this->set('counters', $counters->all());
     }
}
