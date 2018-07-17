<?php

namespace Ofashion\Cart;

class CartCell
{
    private $id = '';

    private $num = 0;

    private $select = 0;

    public function __construct(string $id, int $num, int $select, array $parameter)
    {
        $this->setParameter('id', $id);
        $this->setParameter('num', $num);
        $this->setParameter('select', $select);
        foreach ($parameter as $key => &$item){
            $this->$key = $item;
        }
    }

    public function getParameter(string $name)
    {
        return $this->$name;
    }

    public function setParameter(string $name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return '';
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
