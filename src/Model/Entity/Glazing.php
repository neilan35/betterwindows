<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Glazing Entity.
 */
class Glazing extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'glazingtype' => true,
        'obscurity' => true,
        'safetyglazing' => true,
        'price' => true,
        'products' => true,
    ];
}
