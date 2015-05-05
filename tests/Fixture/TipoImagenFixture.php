<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipoImagenFixture
 *
 */
class TipoImagenFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipo_imagen';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'NOMBRE_IMAGEN' => ['type' => 'string', 'length' => 1024, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ID_TIPO_IMAGEN' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_TIPO_IMAGEN'], 'length' => []],
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
            'NOMBRE_IMAGEN' => 'Lorem ipsum dolor sit amet',
            'ID_TIPO_IMAGEN' => 1
        ],
    ];
}
