<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InterCuesPreFixture
 *
 */
class InterCuesPreFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'inter_cues_pre';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_CUESTIONARIO' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ID_PREGUNTAS' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_RELATIONSHIP_14' => ['type' => 'index', 'columns' => ['ID_PREGUNTAS'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_CUESTIONARIO', 'ID_PREGUNTAS'], 'length' => []],
            'FK_RELATIONSHIP_10' => ['type' => 'foreign', 'columns' => ['ID_CUESTIONARIO'], 'references' => ['cuestionario', 'ID_CUESTIONARIO'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_RELATIONSHIP_14' => ['type' => 'foreign', 'columns' => ['ID_PREGUNTAS'], 'references' => ['preguntas', 'ID_PREGUNTAS'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID_CUESTIONARIO' => 1,
            'ID_PREGUNTAS' => 1
        ],
    ];
}
