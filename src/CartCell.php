<?php
/**
 * goods minimum cell
 * User: admin
 * Date: 2018/7/18
 * Time: 11:21
 */
namespace Ofashion\Cart;

class CartCell extends CartCellPrototype implements CellDecoratorInterface
{
    public function __construct(string $id, int $num, int $select, array $parameter)
    {
        $this->setParameter('id', $id);
        $this->setParameter('num', $num);
        $this->setParameter('select', $select);
        foreach ($parameter as $key => &$item){
            $this->setParameter($key, $item);
        }
    }

    use CellBehavior;

    public function getMinimumId()
    {
        return $this->id;
    }

    public function getParameter(string $name): string
    {
        return $this->$name;
    }

    public function setParameter(string $name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name): string
    {
        return property_exists($this, $name) ? $this->$name : '';
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __clone()
    {
    }
}
