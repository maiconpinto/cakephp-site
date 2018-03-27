<?php
namespace Site\View\Cell;

use Cake\View\Cell;

/**
 * Partners cell
 */
class PartnersCell extends Cell
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

        $this->loadModel('Site.Partners');
        $partners = $this->Partners->find('all');
        $this->set('partners', $partners->all());
    }
}
