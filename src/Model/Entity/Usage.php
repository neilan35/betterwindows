<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usage Entity.
 */
class Usage extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'efficiency' => true,
        'glazings' => true,
    ];
}
