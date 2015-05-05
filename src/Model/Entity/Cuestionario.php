<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cuestionario Entity.
 */
class Cuestionario extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'NOMBRE' => true,
    ];
}
