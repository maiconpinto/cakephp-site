<?php
namespace Site\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $title
 * @property string $post
 * @property \Cake\I18n\FrozenDate $date
 * @property string $image
 * @property int $status
 * @property int $author_id
 *
 * @property \Site\Model\Entity\Author $author
 * @property \Site\Model\Entity\Comment[] $comments
 * @property \Site\Model\Entity\Tag[] $tags
 */
class Post extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'created' => true,
        'modified' => true,
        'title' => true,
        'post' => true,
        'date' => true,
        'image' => true,
        'status' => true,
        'author_id' => true,
        'author' => true,
        'comments' => true,
        'tags' => true
    ];
}
