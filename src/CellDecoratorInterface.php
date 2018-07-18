<?php
/**
 * decorator interface
 * User: admin
 * Date: 2018/7/18
 * Time: 11:50
 */

namespace Ofashion\Cart;


interface CellDecoratorInterface
{
    /**
     * get base id store in database
     * @return mixed
     */
    public function getMinimumId();
}