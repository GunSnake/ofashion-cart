<?php
/**
 * cart box
 * User: admin
 * Date: 2018/7/18
 * Time: 16:43
 */

namespace Ofashion\Cart;


class CartList
{
    private $userId = '';

    private $goods = [];

    private $currentIndex = 0;

    public function __construct(string $userId)
    {
        $this->userId = $userId;
    }

    public function addGoods(CartCellPrototype $cartCellPrototype)
    {
        $this->goods[] = $cartCellPrototype;
    }

    public function removeGoods(CartCellPrototype $cartCellPrototype)
    {
        foreach($this->goods as $key => $cartCell){
            if ($cartCell->getMinimumId() == $cartCellPrototype->getMinimumId()){
                unset($this->goods[$key]);
            }
        }
    }

    public function count(): int
    {
        return count($this->goods);
    }

    public function current(): CartCellPrototype
    {
        return $this->goods[$this->currentIndex];
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function next()
    {
        $this->currentIndex++;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    public function valid(): bool
    {
        return isset($this->goods[$this->currentIndex]);
    }


}