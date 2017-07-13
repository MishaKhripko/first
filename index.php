<?php
    /*require "./vendor/autoload.php";
    $faker = Faker\Factory::create('uk_UA');
    $faker->name;
    $faker->address;
    $faker->company;
    $array = array ();
    for ($i = 0; $i < 100; $i++){
        $array[$i][0] = $faker->name;
        $array[$i][1] = $faker->address;
        $array[$i][2] = $faker->company;
    }
    echo "<table>";
    foreach ($array as $key => $value){
        echo "<tr>";
        for ($i = 0; $i < 3; $i++) echo "<td>".$value[$i]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    unset($value);*/
    //some code
    include 'Discount.php';
    include 'StaticDiscount.php';

    $price = new Discount(20, 20);
    $price->printInfo("на товар");
    $price->getPrice();
    unset($price);

    $price = new StaticDiscount(20);