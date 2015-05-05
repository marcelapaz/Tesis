<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InterEjImFixture
 *
 */
class InterEjImFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'inter_ej_im';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_EJERCICIO' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ID_IMAGEN' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_RELATIONSHIP_15' => ['type' => 'index', 'columns' => ['ID_IMAGEN'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_EJERCICIO', 'ID_IMAGEN'], 'length' => []],
            'FK_RELATIONSHIP_12' => ['type' => 'foreign', 'columns' => ['ID_EJERCICIO'], 'references' => ['ejercicio', 'ID_EJERCICIO'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_RELATIONSHIP_15' => ['type' => 'foreign', 'columns' => ['ID_IMAGEN'], 'references' => ['imagen', 'ID_IMAGEN'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID_IMAGEN' => 1
        ],
    ];
}
