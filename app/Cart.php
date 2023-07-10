<?php

namespace app;

class Cart
{
    private array $products = [];

    public function add(Products $product) {
        $this->products[] = $product;
    }

    public function getCart() {
        return $this->products;
    }

    public function clean(){
        return $this->products = [];
    }
}