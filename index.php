<?php
ob_start();
 //include header.php file
require_once("register/helper.php");
include("register/mysqli_connect.php");


if (!is_logged_in()){
  login_error_redirect();
}

 include('header.php');

?>

<?php
// include banner-area.php
include('template/_banner-area.php');

?>

<?php
//include top-sale
include('template/_top-sale.php');
?>

<?php
include ('template/_special-price.php');
?>


<?php
//include banner-ads
include ('template/_banner-adds.php');
?>

<?php
//include 2020games
include('template/_2020-games.php');
?>

<?php
//include blog
include('template/_blog.php')
?>
<?php
//include footer.php file
include('footer.php');
?>
