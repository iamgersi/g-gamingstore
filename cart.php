<?php
ob_start();
require_once("register/helper.php");
include("register/mysqli_connect.php");


if (!is_logged_in()){
    login_error_redirect();
}

include('header.php');
?>

<?php
//include cart items if itsnot empty
count($topsale->getData('cart')) ? include('template/_cart.php') : include('template/notFound/_cart_not_found.php');

?>

<?php
//include wishlist
count($topsale->getData('wishlist')) ? include('template/_wishlist.php') :include('template/notFound/wish_not_found.php');
?>

<?php
//include 2020games
include('template/_2020-games.php');
?>

<?php
include('footer.php');
?>
