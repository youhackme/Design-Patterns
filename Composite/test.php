<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */
require('vendor/autoload.php');

$productHelicopter = new \App\Product('toy helicopter');
$productCar = new \App\Product('toy car');
$smallBoxForHelicopter = new \App\Box();
$smallBoxForHelicopter->addProductComponent($productHelicopter);
var_dump($smallBoxForHelicopter);


$smallBoxForCar = new \App\Box();
$smallBoxForCar->addProductComponent($productCar);
var_dump($smallBoxForCar);

$bigBox = new \App\Box();
$bigBox->addProductComponent($smallBoxForHelicopter);
$bigBox->addProductComponent($smallBoxForCar);
var_dump($bigBox->getProductComponents());

$hyder = new \App\InventoryClerk();

$hyder->recordProducts($bigBox);