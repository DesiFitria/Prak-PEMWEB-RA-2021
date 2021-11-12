<?php

//connect ke database

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "praktikum 4";

    $con = mysqli_connect($host,$user,$password,$database);
    if(!$con)
    {
        die("koneksi gagal".mysqli_connect_error());
    }
?>

