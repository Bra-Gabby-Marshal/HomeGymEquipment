<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'home_gym_equipment';

    $con =   mysqli_connect($host,$user,$pass,$database);
    if(!$con) {
        die('connection failed' . mysqli_error($con));
    }
   

