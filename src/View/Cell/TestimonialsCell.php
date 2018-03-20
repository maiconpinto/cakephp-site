<?php
namespace Site\View\Cell;

use Cake\View\Cell;

/**
 * Testimonials cell
 */
class TestimonialsCell extends Cell
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

         $this->loadModel('Testimonials');
         $testimonials = $this->Testimonials->find('all')->where(['status' => 1]);
         $this->set('testimonials', $testimonials->all());
     }
}
