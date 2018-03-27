<?php
namespace Site\Model\Entity;

use Cake\ORM\Entity;

/**
 * Partner Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $url
 * @property int $order
 * @property int $status
 */
class Partner extends Entity
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
        'description' => true,
        'image' => true,
        'url' => true,
        'order' => true,
        'status' => true
    ];
}
