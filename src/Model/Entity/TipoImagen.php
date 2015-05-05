<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TipoImagen Entity.
 */
class TipoImagen extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'NOMBRE_IMAGEN' => true,
    ];
}
