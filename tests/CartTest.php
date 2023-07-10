<?php

namespace tests;

use app\Cart;
use app\Products;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function test_if_cart_is_empty()
    {
        $cart = new Cart;
        $this->assertEmpty($cart->getCart());
    }

    public function test_if_exist_product_in_cart(){
        $products = new Products;
        $products->setName('Isqueiro');
        $cart = new Cart;
        $cart->add($products);

        $this->assertCount(1, $cart->getCart());
    }

    public function test_exist_more_than_one_product(){
        $productA = new Products;
        $productB = new Products;
        $productA->setName('Isqueiro');
        $productB->setName('Seda');
        $cart = new Cart;
        $cart->add($productA);
        $cart->add($productB);

        $this->assertCount(2, $cart->getCart());
    }

    public function test_if_clean_cart(){
        $products = new Products;
        $products->setName('Isqueiro');
        $cart = new Cart;
        $cart->add($products);
       
        $this->assertCount(1, $cart->getCart());

        $cart->clean();
        $this->assertCount(0, $cart->getCart());
        
    }
}
