<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Especialistum Entity.
 */
class Especialistum extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'ESPECIALIDAD' => true,
        'NOMBRE' => true,
        'CORREO' => true,
        'CONTRASENA' => true,
        'FECHA_NAC' => true,
    ];
}
