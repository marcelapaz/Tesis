<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EjercicioFixture
 *
 */
class EjercicioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ejercicio';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_EJERCICIO' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ID_CUESTIONARIO' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ID_TEST' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NOMBRE_EJERCICIO' => ['type' => 'string', 'length' => 1024, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_RELATIONSHIP_11' => ['type' => 'index', 'columns' => ['ID_TEST'], 'length' => []],
            'FK_RELATIONSHIP_6' => ['type' => 'index', 'columns' => ['ID_CUESTIONARIO'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_EJERCICIO'], 'length' => []],
            'FK_RELATIONSHIP_11' => ['type' => 'foreign', 'columns' => ['ID_TEST'], 'references' => ['test', 'ID_TEST'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_RELATIONSHIP_6' => ['type' => 'foreign', 'columns' => ['ID_CUESTIONARIO'], 'references' => ['cuestionario', 'ID_CUESTIONARIO'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID_EJERCICIO' => 1,
            'ID_CUESTIONARIO' => 1,
            'ID_TEST' => 1,
            'NOMBRE_EJERCICIO' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
