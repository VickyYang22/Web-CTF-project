<?php

    $servername = "localhost";
    // $username = "id21501774_cyberctf";
    // $password = "Vicky@55036368";
    // $dbname = "id21501774_ctf";
    $username="root";
    $password="";
    $dbname="register_db";

    //creat Connection
    $conn = mysqli_connect($servername, $username,$password,$dbname);

    // cheak Connecetion
    if (!$conn){
        die("Connect Failed" . mysqli_connect_error());
    } 
?>
