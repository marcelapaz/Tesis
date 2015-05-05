<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Respuestum Entity.
 */
class Respuestum extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'TEXTO_RPTA' => true,
    ];
}
