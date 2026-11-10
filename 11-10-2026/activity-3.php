<?php

class Product {
    public string $name;
    public int $stock;

    public function __construct(string $name, int $stock) {
        $this->name = $name;
        $this->stock = $stock;
    }

    public function getStock(): int {
        return $this->stock;
    }

    public function sell(int $quantity) : void {
        if ($quantity <= $this->stock) {
            $this->stock -= $quantity;
            echo "Sold {$quantity} of {$this->name}. Remaining Stock: {$this->stock}<br>";
        } else {
            echo "Not enough stock to sell {$quantity} of {$this->name}!<br>";
        }
    }
    
    public function restock(int $quantity) : void {
        $this->stock += $quantity;
        echo "Restocked {$quantity}";
    }
}

$fries = new product("Fries", 50);
$burger = new Product("Burger", 30);

echo "<h2>Burger & Fries Stock</h2>";
echo "Burger Stock : ". $burger->getStock() . "<br>";
echo "Fries Stock : ". $fries->getStock() . "<br>";

echo "<h2>Sell & Restock</h2>";
echo $burger->sell(10);
echo $fries->sell(20);
echo $burger->restock(20);
