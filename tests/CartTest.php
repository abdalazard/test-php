<?php

namespace tests;

use app\Cart;
use app\Products;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function test_if_cart_is_empty()
    {

        //Arrange
        $cart = new Cart;

        //Act
        $result = $cart->getCart();

        //Assert
        $this->assertEmpty($result);
    }

    public function test_if_exist_product_in_cart()
    {
        //Arrange
        $product = new Products;
        $product->setItem('Bermuda', 10);

        $cart = new Cart;
        $cart->add($product);
        //Act
        $result = $cart->getCart();

        //Assert
        $this->assertCount(1, $result);
    }

    public function test_exist_more_than_one_product_in_cart()
    {
        //Arrange
        $productA = new Products;
        $productB = new Products;
        $productA->setItem('Bermuda', 10);
        $productB->setItem('Camisa', 5);
        $cart = new Cart;
        $cart->add($productA);
        $cart->add($productB);

        //Act
        $result = $cart->getCart();

        //Assert
        $this->assertCount(2, $result);
    }

    public function test_if_cart_is_clean()
    {
        //Arrange
        $product = new Products;
        $product->setItem('Bermuda', 20);
        $cart = new Cart;
        $cart->add($product);

        // $this->assertCount(1, $cart->getCart());

        //Act
        $result = $cart->clean();

        //Assert
        $this->assertCount(0, $result);
    }
}