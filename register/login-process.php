<?php

$error = array();
$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "Ju harruat të vendosni emailin.";

}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "Ju harruat të vendosnin fjalëkalimin.";

}

if (empty($error)){
    //sql query
    $query= "SELECT user_id, first_name, last_name, email, password, profileImage FROM user WHERE email = ?";
    $q= mysqli_stmt_init($con);
    mysqli_stmt_prepare($q,$query);

    //bind parameter
    mysqli_stmt_bind_param($q,'s',$email);

    //execute query
    mysqli_stmt_execute($q);
    $result = mysqli_stmt_get_result($q);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if (!empty($row)){
        //verify password
        if (password_verify($password,$row['password'])){

            login($row['user_id']);
            exit();
        }else{
            $error[]="Fjalëkalimi që futët nuk është i saktë.";
        }
    }else{
        $error[]="Emaili nuk ekziston!";
    }



}else{
 echo "Please fill out email and password fields to login";
}