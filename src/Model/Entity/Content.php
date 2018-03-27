<?php
namespace Site\Model\Entity;

use Cake\ORM\Entity;

/**
 * Content Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $type
 * @property string $name
 * @property string $content
 * @property string $icon
 * @property string $class
 * @property string $url
 * @property string $image
 * @property int $status
 */
class Content extends Entity
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
        'type' => true,
        'name' => true,
        'content' => true,
        'icon' => true,
        'class' => true,
        'url' => true,
        'image' => true,
        'status' => true
    ];
}
