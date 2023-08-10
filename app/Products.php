<?php

namespace app;

class Products
{
    private array $product = [];

    public function setItem(string $name, $preco)
    {
        $this->product[] = $name;
        $this->product[] = $preco;
    }
    public function getItem()
    {
        return $this->product;
    }
}