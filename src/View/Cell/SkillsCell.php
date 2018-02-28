<?php
namespace Site\View\Cell;

use Cake\View\Cell;

/**
 * Skills cell
 */
class SkillsCell extends Cell
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
     public function display($element = null)
     {
         $this->set('element', $element);

         $this->loadModel('Skills');
         $skills = $this->Skills->find('all');
         $this->set('skills', $skills->all());
     }
}
