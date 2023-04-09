<?php
$connection = mysqli_connect('localhost', 'root', '1234');
if (!$connection){
    die("Database Connection Failed" .  mysqli_connect_error());
}

$select_db = mysqli_select_db($connection, 'ecom_db');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}