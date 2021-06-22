<?php


use app\models\{Product, User};
use app\engine\Db;
use app\engine\Autoload;

include "../config/config.php";
include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


$product = new Product("Книга", "Фантастика", 23);
$product->insert();

$user = new User("User", 234);
$user->insert();



var_dump($product->getOne(2));

var_dump($product);

// wtf

























die();
/*
//INSERT
$product = new Product('Чай', 25);

$product->insert();

//READ
$product = new Product();
$product->getOne(5);

$product->getAll();

//UPDATE
$product = new Product();
$product->getOne(5);
$product->price = 25;
$product->update();

//DELETE
$product = new Product();
$product->getOne(5);
$product->delete();
*/