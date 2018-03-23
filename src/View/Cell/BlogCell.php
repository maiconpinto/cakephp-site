<?php
namespace Site\View\Cell;

use Cake\View\Cell;

/**
 * Blog cell
 */
class BlogCell extends Cell
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
    public function display($element) {
        $this->set('element',$element);

        $this->loadModel('Posts');
        $posts = $this->Posts->find('all')->where(['status' => 1]);
        $this->set('posts', $posts->all());
    }

    public function posts($element) {
        $this->set('element',$element);

        $this->loadModel('Site.Posts');
        $posts = $this->Posts->find('all')->contain(['Authors', 'Tags', 'Comments'])->where(['status' => 1]);
        $this->set('posts', $posts->all());
    }

    public function lastPosts($element, $limit = 5) {
        $this->set('element',$element);

        $this->loadModel('Site.Posts');
        $posts = $this->Posts->find('all')->where(['status' => 1])->order(['id' => 'DESC'])->limit($limit);
        $this->set('posts', $posts->all());
    }

    public function lastComments($element, $limit = 5) {
        $this->set('element',$element);

        $this->loadModel('Site.Comments');
        $comments = $this->Comments->find('all')->contain(['Posts'])->where(['status' => 1])->order(['id' => 'DESC'])->limit($limit);
        $this->set('comments', $comments->all());
    }
}
