<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paciente Entity.
 */
class Paciente extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'NIVEL_EDUCATIVO' => true,
        'PROFESION' => true,
        'ANIOS_DE_EVOL_ENF' => true,
        'NIVEL_COGNICION' => true,
        'ID_ESPECIALISTA' => true,
        'NOMBRE' => true,
        'CORREO' => true,
        'CONTRASENA' => true,
        'FECHA_NAC' => true,
    ];
}
