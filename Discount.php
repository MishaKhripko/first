<?php

/**
 * Created by PhpStorm.
 * User: mario
 * Date: 13.07.17
 * Time: 11:02
 */

include_once 'EndPrice.php';
class Discount extends EndPrice
{
    protected $coef;
    public function __construct($price, $coef)
    {
        $this->price = $price;
        if ($coef > 0 and $coef < 100) {
            $this->coef = $coef;
        } else {
            $this->coef = 0;
        }
        $this->formulaPrice();
    }

    protected function formulaPrice()
    {
        $this->newPrice = $this->price*(1-($this->coef/100));
    }
}
