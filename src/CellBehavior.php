<?php
/**
 * cart behavior trait , use for change different ways to store data
 * User: admin
 * Date: 2018/7/18
 * Time: 16:41
 */

namespace Ofashion\Cart;


use Ofashion\Cart\Exception\ReturnException;

trait CellBehavior
{
    protected function checkGoodNum(int $goodNum, int $addNum)
    {
        if(($this->num + $addNum) > $goodNum) {
            throw new ReturnException('Goods stock not enough!');
        }
        return $this;
    }

    protected function addNum(int $num)
    {
        $this->num += $num;
    }

    protected function decreaseNum($num)
    {
        $this->num -= $num;
    }
}