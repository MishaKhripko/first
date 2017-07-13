<?php

/**
 * Created by PhpStorm.
 * User: mario
 * Date: 13.07.17
 * Time: 10:40
 */

abstract class EndPrice
{
    protected $newPrice;
    protected $price;

    /**
     * EndPrice constructor.
     * @param $price
     * $price містить інформацію про кінцеву ціну товару
     * ;конструктор визначає ціну та викликає метод обрахунку
     * printInfo друкує інформацію про ціну.
     * getPrice повертає ціну включаючи знижку
     */

    public function __construct($price)
    {
        if (gettype($price) == "double")
            $this->price = $price;
        else
            $price = 0.0;
        $this->formulaPrice();
    }

    abstract protected function formulaPrice();

    public function printInfo($typeDiscount)
    {
        echo "<br>Тип знижки: $typeDiscount";
        echo "<br>Ціна товару: $this->price.<br>Знижка: $this->coef%.<br>До оплати: $this->newPrice";
    }

    public function getPrice() {
        return $this->newPrice;
    }
}