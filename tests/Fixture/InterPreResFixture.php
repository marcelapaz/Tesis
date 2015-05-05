<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InterPreResFixture
 *
 */
class InterPreResFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_PREGUNTAS' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ID_RPTA' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_RELATIONSHIP_17' => ['type' => 'index', 'columns' => ['ID_RPTA'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_PREGUNTAS', 'ID_RPTA'], 'length' => []],
            'FK_RELATIONSHIP_16' => ['type' => 'foreign', 'columns' => ['ID_PREGUNTAS'], 'references' => ['preguntas', 'ID_PREGUNTAS'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_RELATIONSHIP_17' => ['type' => 'foreign', 'columns' => ['ID_RPTA'], 'references' => ['respuesta', 'ID_RPTA'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID_PREGUNTAS' => 1,
            'ID_RPTA' => 1
        ],
    ];
}
