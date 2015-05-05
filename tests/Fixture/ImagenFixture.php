<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImagenFixture
 *
 */
class ImagenFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'imagen';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_IMAGEN' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ID_TIPO_IMAGEN' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'URL_IMAGEN' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'COMPLEJIDAD' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_RELATIONSHIP_5' => ['type' => 'index', 'columns' => ['ID_TIPO_IMAGEN'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_IMAGEN'], 'length' => []],
            'FK_RELATIONSHIP_5' => ['type' => 'foreign', 'columns' => ['ID_TIPO_IMAGEN'], 'references' => ['tipo_imagen', 'ID_TIPO_IMAGEN'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID_IMAGEN' => 1,
            'ID_TIPO_IMAGEN' => 1,
            'URL_IMAGEN' => 'Lorem ipsum dolor sit amet',
            'COMPLEJIDAD' => 1
        ],
    ];
}
