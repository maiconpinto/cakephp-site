<?php
namespace Site\View\Cell;

use Cake\View\Cell;

/**
 * Contents cell
 */
class ContentsCell extends Cell
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
    public function display($element, $type)
    {
        $this->set('element', $element);

        $this->loadModel('Site.Contents');
        $contents = $this->Contents->find('all')->where(['type' => $type]);
        $this->set('contents', $contents->all());
    }
}
