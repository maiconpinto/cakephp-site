<?php
namespace Site\View\Cell;

use Cake\View\Cell;

/**
 * Plans cell
 */
class PlansCell extends Cell
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

        $this->loadModel('Site.Plans');
        $plans = $this->Plans->find('all')->where(['status' => 1]);
        $this->set('plans', $plans->all());
    }
}
