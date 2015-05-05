<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TestFixture
 *
 */
class TestFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'test';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_TEST' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ID_PACIENTE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'FECHA_HORA' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_RELATIONSHIP_13' => ['type' => 'index', 'columns' => ['ID_PACIENTE'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_TEST'], 'length' => []],
            'FK_RELATIONSHIP_13' => ['type' => 'foreign', 'columns' => ['ID_PACIENTE'], 'references' => ['paciente', 'ID_PACIENTE'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID_TEST' => 1,
            'ID_PACIENTE' => 1,
            'FECHA_HORA' => '2015-05-05 16:36:00'
        ],
    ];
}
