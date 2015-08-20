<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 *
 */
class ProductsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'colour_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'glazing_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'balrating_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'reveal_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'winopentype_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dooropentype_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'flyscreen_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'glasscomp_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'colour_key' => ['type' => 'index', 'columns' => ['colour_id'], 'length' => []],
            'glazing_key' => ['type' => 'index', 'columns' => ['glazing_id'], 'length' => []],
            'balrating_key' => ['type' => 'index', 'columns' => ['balrating_id'], 'length' => []],
            'reveal_key' => ['type' => 'index', 'columns' => ['reveal_id'], 'length' => []],
            'winopentype_key' => ['type' => 'index', 'columns' => ['winopentype_id'], 'length' => []],
            'dooropentype_key' => ['type' => 'index', 'columns' => ['dooropentype_id'], 'length' => []],
            'flyscreen_key' => ['type' => 'index', 'columns' => ['flyscreen_id'], 'length' => []],
            'glasscomp_key' => ['type' => 'index', 'columns' => ['glasscomp_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'products_ibfk_1' => ['type' => 'foreign', 'columns' => ['colour_id'], 'references' => ['colours', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'products_ibfk_2' => ['type' => 'foreign', 'columns' => ['glazing_id'], 'references' => ['glazings', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'products_ibfk_3' => ['type' => 'foreign', 'columns' => ['balrating_id'], 'references' => ['balratings', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'products_ibfk_4' => ['type' => 'foreign', 'columns' => ['reveal_id'], 'references' => ['reveals', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'products_ibfk_5' => ['type' => 'foreign', 'columns' => ['winopentype_id'], 'references' => ['winopentypes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'products_ibfk_6' => ['type' => 'foreign', 'columns' => ['dooropentype_id'], 'references' => ['dooropentypes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'products_ibfk_7' => ['type' => 'foreign', 'columns' => ['flyscreen_id'], 'references' => ['flyscreens', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'products_ibfk_8' => ['type' => 'foreign', 'columns' => ['glasscomp_id'], 'references' => ['glasscomps', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'utf8_general_ci'
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
            'id' => 1,
            'colour_id' => 1,
            'glazing_id' => 1,
            'balrating_id' => 1,
            'reveal_id' => 1,
            'winopentype_id' => 1,
            'dooropentype_id' => 1,
            'flyscreen_id' => 1,
            'glasscomp_id' => 1
        ],
    ];
}
