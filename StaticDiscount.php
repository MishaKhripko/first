<?php

/**
 * Created by PhpStorm.
 * User: mario
 * Date: 13.07.17
 * Time: 11:50
 */
include_once 'EndPrice.php';
class StaticDiscount extends EndPrice
{
    protected $coef = 7;
    public function __construct($price)
    {
        $this->price = $price;
        $this->formulaPrice();
    }

    protected function formulaPrice()
    {
        $this->newPrice = $this->price*(1-($this->coef/100));
    }

    public function printInfo($typeDiscount)
    {
        echo "<br>Тип знижки: $typeDiscount";
        echo "<br>Ціна товару: $this->price.<br>Знижка: $this->coef%.<br>До оплати: $this->newPrice";
    }
}