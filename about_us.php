<?php
if(!isset($_SESSION))
{
    session_start();
}
?>


<?php
$user = array();
if (isset($_SESSION['SBUser'])){
    require_once('register/mysqli_connect.php');
    require_once('register/helper.php');
    $user = get_user_info($con,$_SESSION['SBUser']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diploma</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <!--font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <!--Custon CSS file-->
    <link rel="stylesheet" href="about.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <?php
    // require functions.php file
    require('functions.php');
    ?>

</head>
<body>

<!--Start #header-->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <h2 class="font-rale text-black-50 m-0">Përshëndetje <?php echo isset($user['email'])? $user['first_name']: "klient";?>, mirëseerdhët në faqen tonë!</h2>
    </div>

    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-20 text-black-50 m-0">Rruga "Ura e re" - Berat Albania, Kodi Postar 5001, Cel (355) 698283290</p>
        <div class="font-rale font-size-14">
            <a href="http://localhost/project/diploma/register/logout.php" class="px-3 border-right border-left text-dark">Dil</a>
            <a href="cart.php" class="px-3 border-right text-dark">Të Preferuarat(<?php if (isset($_SESSION['SBUser'])){echo count($topsale->getData('wishlist'));} else echo '0'; ?>)</a>
        </div>
    </div>
    <!--Primary navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#EE8E15">
        <a class="navbar-brand" href="http://localhost/project/diploma/index.php">G-Gaming Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Në shitje</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/project/diploma/index.php#special-price">Kategoritë</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/project/diploma/index.php#2020-games">Videolojëra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/project/diploma/index.php#blogs">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/project/diploma/about_us.php">Rreth Nesh </a>
                </li>

            </ul>
            <form action="cart.php" class="font-size-14 font-rale">
                <a href="http://localhost/project/diploma/cart.php" class="py-2 rounded-pill" style="background-color: #003859;">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php if (isset($_SESSION['SBUser'])){echo count($topsale->getData('cart'));} else echo '0';?></span>
                </a>
            </form>
        </div>
    </nav>
</header>
<!--!Start #header-->

<!--Start #main-site-->
<main id="main-site">

<?php
include('template/_about_us.php')
?>

<?php
include('template/_blog.php')
?>

<?php
include('footer.php');
?>
