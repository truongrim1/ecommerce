<?php
 namespace App;
 class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($cart) {
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }
    public function AddCart($products, $id){
        $newProducts = ['quantity' => 1, 'price' =>0 ,'productInfo' => $products];
        if($this->products){
            if(array_key_exists($id, $products)){
                $newProducts = $products[$id];
            }   
        }
        $newProducts['quantity'] ++;
        $products['price'] = $newProducts['quantity'] * $products->price;
        $this->products[$id] = $newProducts;
        $this->totalPrice += $products->price;
        $this->totalQuantity ++;
    }
 }
 ?>