<?php

/**
 * Created by PhpStorm.
 * User: mario
 * Date: 13.07.17
 * Time: 11:50
 */
include 'EndPrice.php';
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
    /**
     *
     */
}