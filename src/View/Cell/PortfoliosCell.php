<?php
namespace Site\View\Cell;

use Cake\View\Cell;

/**
 * Portfolios cell
 */
class PortfoliosCell extends Cell
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

         $this->loadModel('Portfolios');
         $portfolios = $this->Portfolios->find('all')->where(['status' => 1]);
         $this->set('portfolios', $portfolios->all());
     }
}
