<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EspecialistaFixture
 *
 */
class EspecialistaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'especialista';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ESPECIALIDAD' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ID_ESPECIALISTA' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'NOMBRE' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CORREO' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CONTRASENA' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'FECHA_NAC' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_ESPECIALISTA'], 'length' => []],
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
            'ESPECIALIDAD' => 'Lorem ipsum dolor ',
            'ID_ESPECIALISTA' => 1,
            'NOMBRE' => 'Lorem ipsum dolor ',
            'CORREO' => 'Lorem ipsum dolor ',
            'CONTRASENA' => 'Lorem ipsum d',
            'FECHA_NAC' => '2015-05-05'
        ],
    ];
}
