<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pregunta Entity.
 */
class Pregunta extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'TEXTO_PREGUNTA' => true,
    ];
}
