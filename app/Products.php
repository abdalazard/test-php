<?php

namespace app;

class Products
{
    private array $product = [];

    public function setItem(string $name)
    {
        $this->product[] = $name;
    }
    public function getItem()
    {
        return $this->product;
    }
}
