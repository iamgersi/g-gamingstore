<?php

//
define('DB_NAME','gamingstore');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');

try{
    //connection variable
    $con = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    //encoded language
    mysqli_set_charset($con,'utf8');
}catch (Exception $ex){
    print "An exception occurred. Message: " .$ex->getMessage();
}catch (Error $e){
    print "The system is busy, please try later";
}
?>

<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    if (isset($_SESSION['error_flash'])){
    echo '<div><p class = "text-danger text-center">'.$_SESSION['error_flash'].'</p></div>';
    unset($_SESSION['error_flash']);
}
?>

