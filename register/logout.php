<?php
session_start();
session_destroy();

unset($_SESSION['SBUser']);
header("Location: login.php");
?>