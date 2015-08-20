<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity.
 */
class Product extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'colour_id' => true,
        'glazing_id' => true,
        'balrating_id' => true,
        'reveal_id' => true,
        'winopentype_id' => true,
        'dooropentype_id' => true,
        'flyscreen_id' => true,
        'glasscomp_id' => true,
        'colour' => true,
        'glazing' => true,
        'balrating' => true,
        'reveal' => true,
        'winopentype' => true,
        'dooropentype' => true,
        'flyscreen' => true,
        'glasscomp' => true,
    ];
}
