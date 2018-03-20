<?php
namespace Site\Model\Entity;

use Cake\ORM\Entity;

/**
 * Social Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $title
 * @property string $url
 * @property string $icon
 * @property string $class
 * @property int $status
 */
class Social extends Entity
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
        'url' => true,
        'icon' => true,
        'class' => true,
        'status' => true
    ];
}
