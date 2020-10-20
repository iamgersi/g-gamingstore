<?php

function validate_input_text($textValue)
{
    if (!empty($textValue)) {
        $trim_text = trim($textValue);

        //remove illegal character
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitize_str;
    }
    return '';
}

function validate_input_email($emailValue){
    if (!empty($emailValue)){
        $trim_text = trim($emailValue);

        //remove illegal character
        $sanitize_str = filter_var($trim_text,FILTER_SANITIZE_EMAIL);
        return $sanitize_str;
    }
    return '';
}

//profile image

function upload_profile($path,$file){
    $targetDir = $path;
    $default = "profile.jpg";

    //get filename

    $filename = basename($file['name']);
    $targetFilePath = $targetDir . $filename;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    //return the extention of the file

    if(!empty($filename)){
        //allow certain file format

        $allowType = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType,$allowType)){
            //upload file to the server
            if (move_uploaded_file($file['tmp_name'],$targetFilePath)){
                return $targetFilePath;
            }
        }
    }
    //return default image
    return $path.$default;
}

//get user info

function get_user_info($con,$userID){
    $query = "SELECT first_name, last_name, email, address, postalCode, profileImage FROM user WHERE user_id =?";
    $q = mysqli_stmt_init($con);

    mysqli_stmt_prepare($q,$query);

    //bind the statement

    mysqli_stmt_bind_param($q,'i',$userID);

    //execute sql statement
    mysqli_stmt_execute($q);
    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result);
     return empty($row)? false : $row;
}


function display_errors($errors){
    $display = '<ul>';
    foreach ($errors as $error){
        $display.='<li class="text-danger">'.$error.'</li>';
    }
    $display.='</ul>';
    return $display;
}

function login($userID){
    $_SESSION['SBUser'] = $userID;
    header("Location: http://localhost/project/diploma/index.php");
}

function is_logged_in(){
    if (isset($_SESSION['SBUser']) && $_SESSION['SBUser']>0){
        return true;
    }return false;
}

function login_error_redirect($url = 'http://localhost/project/diploma/register/login.php'){
    $_SESSION['error_flash']='Duhet të logoheni që të aksesoni faqen';
    header('Location:' .$url);
}