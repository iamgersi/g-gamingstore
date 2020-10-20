<?php

function user_info($con,$userID){
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

function item_info($con,$item_id){
    $query = "SELECT item_name, item_price, item_image FROM product WHERE item_id =?";
    $q = mysqli_stmt_init($con);

    mysqli_stmt_prepare($q,$query);

    //bind the statement

    mysqli_stmt_bind_param($q,'i',$item_id);

    //execute sql statement
    mysqli_stmt_execute($q);
    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result);
    return empty($row)? false : $row;
}

?>