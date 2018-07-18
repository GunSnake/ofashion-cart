<?php
/**
 * Prototype class，when copy a lot of CartCell class, clone cost less
 *
 * goods in cart have the base construct [id, num, select]
 *
 * other Attributes add as other parameter
 *
 * User: admin
 * Date: 2018/7/18
 * Time: 11:21
 */

namespace Ofashion\Cart;


abstract class CartCellPrototype
{
    /**
     * goods id
     * @var string
     */
    protected $id;

    /**
     * goods num
     * @var int
     */
    protected $num;

    /**
     * goods select status
     * @var int
     */
    protected $select;

    abstract public function __clone();
}