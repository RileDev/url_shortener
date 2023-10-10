<?php

    $host = "localhost";
    $username = "root";
    $pass = "";
    $db = "db_url";

    $conn = mysqli_connect($host, $username, $pass, $db);

    if(!$conn){
        exit(0);
    }