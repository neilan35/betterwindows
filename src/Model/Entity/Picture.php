<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Picture Entity.
 */
class Picture extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'filename' => true,
        'description' => true,
        'designs' => true,
    ];
}
