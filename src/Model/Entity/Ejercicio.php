<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ejercicio Entity.
 */
class Ejercicio extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'ID_CUESTIONARIO' => true,
        'ID_TEST' => true,
        'NOMBRE_EJERCICIO' => true,
    ];
}
