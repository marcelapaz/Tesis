<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Resultado Entity.
 */
class Resultado extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'ID_EJERCICIO' => true,
        'ACIERTOS' => true,
        'FALLOS' => true,
        'PUNTAJE' => true,
        'TIEMPO_TOTAL' => true,
        'TOTAL_PREGUNTAS' => true,
    ];
}
