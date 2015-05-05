<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PacienteFixture
 *
 */
class PacienteFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'paciente';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'NIVEL_EDUCATIVO' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'PROFESION' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ANIOS_DE_EVOL_ENF' => ['type' => 'string', 'length' => 3, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'NIVEL_COGNICION' => ['type' => 'string', 'length' => 1024, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ID_PACIENTE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ID_ESPECIALISTA' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NOMBRE' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CORREO' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CONTRASENA' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'FECHA_NAC' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_RELATIONSHIP_9' => ['type' => 'index', 'columns' => ['ID_ESPECIALISTA'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_PACIENTE'], 'length' => []],
            'FK_RELATIONSHIP_9' => ['type' => 'foreign', 'columns' => ['ID_ESPECIALISTA'], 'references' => ['especialista', 'ID_ESPECIALISTA'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_spanish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'NIVEL_EDUCATIVO' => 'Lorem ipsum dolor ',
            'PROFESION' => 'Lorem ipsum dolor ',
            'ANIOS_DE_EVOL_ENF' => 'L',
            'NIVEL_COGNICION' => 'Lorem ipsum dolor sit amet',
            'ID_PACIENTE' => 1,
            'ID_ESPECIALISTA' => 1,
            'NOMBRE' => 'Lorem ipsum dolor ',
            'CORREO' => 'Lorem ipsum dolor ',
            'CONTRASENA' => 'Lorem ipsum d',
            'FECHA_NAC' => '2015-05-05'
        ],
    ];
}
