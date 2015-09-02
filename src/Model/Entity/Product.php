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
        'balrating_id' => true,
        'itemtype_id' => true,
        'design_id' => true,
        'reveal_id' => true,
        'flyscreenmesh_id' => true,
        'glazing_id' => true,
        'height' => true,
        'width' => true,
        'colour' => true,
        'balrating' => true,
        'itemtype' => true,
        'design' => true,
        'reveal' => true,
        'flyscreenmesh' => true,
        'glazing' => true,
        'quotes' => true,
    ];
}
