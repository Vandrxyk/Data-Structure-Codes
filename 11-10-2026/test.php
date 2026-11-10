<?php 
class Product {
    public string $name = "";
    public int $stock = 0;

    public function describe(): string {
        return $this->name . ": " . $this->stock;
    }
}

$product = new Product();
$product->name = "Laptop";
$product->stock = 15;

echo $product->describe();