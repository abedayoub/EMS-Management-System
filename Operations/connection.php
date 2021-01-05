<?php
    $connection = mysqli_connect('localhost', 'root', '');
    if (!$connection){
        die("Database Connection Failed" . mysqli_error($connection));
    }
    $select_db = mysqli_select_db($connection, 'lcd');
    if (!$select_db){
        die("Database Selection Failed" . mysqli_error($connection));

    
    // $connection = mysqli_connect('localhost', 'id15705628_lcdtest', 'EMT*125*w*125');
    // if (!$connection){
    //     die("Database Connection Failed" . mysqli_error($connection));
    // }
    // $select_db = mysqli_select_db($connection, 'id15705628_lcd');
    // if (!$select_db){
    //     die("Database Selection Failed" . mysqli_error($connection));
}