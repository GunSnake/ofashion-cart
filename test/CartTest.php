<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/7/11
 * Time: 12:03
 */

require_once '../vendor/autoload.php';

use Ofashion\Cart\CartCell;

class CartTest{
    public function __construct()
    {
        $cartCell = new CartCell(1, 1, 1, ['add' => 1]);
        print_r($cartCell->getParameter('add'));
        print_r("test\r\n");
    }
}

new CartTest();