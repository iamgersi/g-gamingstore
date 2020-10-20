<?php
require ('helper.php');
//error-variable
$error = array();

$firstName = validate_input_text($_POST['firstName']);
if (empty($firstName)){
    $error[] = "Ju harruat të vendosni emrin.";

}

$lastName = validate_input_text($_POST['lastName']);
if (empty($lastName)){
    $error[] = "Ju harruat të vendosni mbiemrin.";

}

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "Ju harruat të vendosni emailin.";
}

$password = validate_input_text($_POST['password']);
if (strlen($password)<6){
    $error[]="Fjalëkalimi duhet të përmbajë 6 ose më shumë karaktere";
}

if (empty($password)){
    $error[] = "Ju harruat të vendosnin fjalëkalimin.";

}

$address = validate_input_text($_POST['address']);
if (empty($address)){
    $error[] = "Ju harruat të vendosnin adresën.";

}
$postalCode = validate_input_text($_POST['postalCode']);
if (empty($postalCode)){
    $error[] = "Ju harruat të vendosnin kodin postar.";

}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)){
    $error[] = "Konfirmoni fjalëkalimin tuaj!";

}

$files = $_FILES['profileUpload'];
$profileImage = upload_profile('./assets/profile/',$files);



if (empty($error)){
    //register a new user
    $hashed_pass = password_hash($password,PASSWORD_DEFAULT);
    require('mysqli_connect.php');
    //make a query
    $query = "INSERT INTO user (user_id,first_name,last_name,email,password,address,postalCode,profileImage,join_date)";
    $query.= "VALUES ('',?,?,?,?,?,?,?,NOW())";

    $q = mysqli_stmt_init($con);

    //prepare sql statement

    mysqli_stmt_prepare($q,$query);

    //bind values

    mysqli_stmt_bind_param($q,'sssssss',$firstName,$lastName,$email,$hashed_pass,$address,$postalCode,$profileImage);

    //execute statement

    mysqli_stmt_execute($q);

    if (mysqli_stmt_affected_rows($q) == 1){
        //start a new session

        session_start();
        $_SESSION['SBUser'] = mysqli_insert_id($con);


        header('Location: login.php');
        exit();
    }else{
        print '' ;
    }

}else{
    echo display_errors($error);
}