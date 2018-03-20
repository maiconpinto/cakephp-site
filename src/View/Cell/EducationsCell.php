<?php
namespace Site\View\Cell;

use Cake\View\Cell;

/**
 * Educations cell
 */
class EducationsCell extends Cell
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

         $this->loadModel('Educations');
         $educations = $this->Educations->find('all')->where(['status' => 1]);
         $this->set('educations', $educations->all());
     }
}
