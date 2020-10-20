<?php
// require MySQL Connection
require('Database/DBController.php');

//require Product Class

require('Database/Product.php');
require ('Database/Top_Sale.php');
require ('Database/New_Games.php');
require ('Database/Blog.php');
require ('Database/Cart.php');


//DBController object

$db = new DBController();

//product object

$product = new Product($db);

//topsale object

$topsale = new Top_Sale($db);

// NewGames object

$newgames = new New_Games($db);

//Blog Object

$blog = new Blog($db);

//cart object
$cart = new Cart($db);

