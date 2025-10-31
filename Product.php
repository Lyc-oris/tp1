<?php

declare(strict_types=1);
class Product
{
    public $code;
    private string $name;
    private float $price;
    private int $quantity;
    function __construct($a, string $b, float $c, int $d)
    {
        $this->code = $a;
        $this->name = $b;
        $this->price = $c;
        $this->quantity = $d;
    }

    function setName(string $b)
    {
        $this->name = $b;
    }
    function getName()
    {
        return $this->name;
    }
    function setPrice(float $c)
    {
        if ($c >= 0)
            $this->price = $c;
    }
    function getPrice()
    {
        return $this->price;
    }
    function setQuantity(int $d)
    {
        $this->quantity = $d;
    }
    function getQuantity()
    {
        return $this->quantity;
    }
    function afficherProduct()
    {
        echo "<b>Code : </b> {$this->code} <br><b>Product :</b> {$this->name} <br> <b>Price :</b>  {$this->price}<br> <b>Quantity :</b>{$this->quantity} <br><br>";
    }
    function ajouterStock(int $qte)
    {
        if ($qte > 0) {
            $this->quantity += $this->quantity;
        } else
            echo "that's note a valid quantity <br><br>";
    }
    function retirerStock(int $qte)
    {
        if ($this->quantity > 0) {
            $this->quantity -= $qte;
        } else
            echo "the stock is already empty <br><br>";
    }
    function getValeurTotale()
    {
        echo "<b>the total of the stock in MAD is : </b> " . ($this->quantity * $this->price) . "  MAD <br><br>";
    }
    function __destruct()
    {
        if ($this->quantity == 0) {
            echo "the products is deleted <br><br>";
        }
    }
}

$product1 = new Product(5304, "stilo", 32, 6);
$product1->afficherProduct();
$product1->ajouterStock(4);
$product1->afficherProduct();
$product1->retirerStock(4);
$product1->afficherProduct();
$product1->getValeurTotale();
$product1->setPrice(30);
$product1->afficherProduct();
$product1->getValeurTotale();

?>