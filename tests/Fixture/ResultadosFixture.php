<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResultadosFixture
 *
 */
class ResultadosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_RESULTADOS' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ID_EJERCICIO' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ACIERTOS' => ['type' => 'string', 'length' => 1024, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'FALLOS' => ['type' => 'string', 'length' => 1024, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'PUNTAJE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'TIEMPO_TOTAL' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'TOTAL_PREGUNTAS' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_RELATIONSHIP_8' => ['type' => 'index', 'columns' => ['ID_EJERCICIO'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_RESULTADOS'], 'length' => []],
            'FK_RELATIONSHIP_8' => ['type' => 'foreign', 'columns' => ['ID_EJERCICIO'], 'references' => ['ejercicio', 'ID_EJERCICIO'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID_RESULTADOS' => 1,
            'ID_EJERCICIO' => 1,
            'ACIERTOS' => 'Lorem ipsum dolor sit amet',
            'FALLOS' => 'Lorem ipsum dolor sit amet',
            'PUNTAJE' => 1,
            'TIEMPO_TOTAL' => 1,
            'TOTAL_PREGUNTAS' => 1
        ],
    ];
}
