<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quote Entity.
 */
class Quote extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'customer_id' => true,
        'product_id' => true,
        'quote_no' => true,
        'item' => true,
        'unit_cost' => true,
        'quantity' => true,
        'installation' => true,
        'installtype' => true,
        'delivery' => true,
        'deliverytype' => true,
        'customer' => true,
        'product' => true,
    ];
}
