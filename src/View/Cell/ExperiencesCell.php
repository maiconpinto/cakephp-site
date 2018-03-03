<?php
namespace Site\View\Cell;

use Cake\View\Cell;

/**
 * Experiences cell
 */
class ExperiencesCell extends Cell
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

        $this->loadModel('Experiences');
        $experiences = $this->Experiences->find('all')->where(['status' => 1]);
        $this->set('experiences', $experiences->all());
    }
}
