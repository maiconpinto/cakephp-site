<?php
namespace Site\View\Cell;

use Cake\View\Cell;

/**
 * Comments cell
 */
class CommentsCell extends Cell
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
    public function display()
    {
    }

    public function post($element, $post_id) {
        $this->set('element', $element);

        $this->loadModel('Site.Comments');
        $comments = $this->Comments->find('all')->where(['post_id' => $post_id, 'status' => 1]);
        $this->set('comments', $comments->all());
    }

    public function form($element, $post_id) {
        $this->set('element', $element);
        $this->set('post_id', $post_id);
    }
}
