<?php
    ini_set('display_errors', 1);

    // The argument of four type:

    // i = integer
    // d = double
    // s = string
    // b = blob

    // => MySQLi Procedural

    // $conn = mysqli_connect('localhost', 'root', '', 'phpdbone');
    
    // if(mysqli_connect_error()){
    //     echo 'Fail to connect MySQL : '. mysqli_connect_error();
    //     exit();
    // }

    // echo "Connected Successfully <br/>";
    
    // // Insert Data
    // $stmt = "INSERT INTO students(firstname, lastname, city) VALUE (?, ?, ?)";

    // $insertstmt = mysqli_prepare($conn, $stmt);

    // mysqli_stmt_bind_param($insertstmt, 'sss', $firstname, $lastname, $city);

    // $firstname = "maung";
    // $lastname = "zaw";
    // $city = "bagan";
    // mysqli_stmt_execute($insertstmt);

    // echo "New Records Created Successfully";

    // mysqli_close($conn);

    $conn = mysqli_connect('localhost', 'root', '', 'phpdbone');
    
    if(mysqli_connect_error()){
        echo 'Fail to connect MySQL : '. mysqli_connect_error();
        exit();
    }

    echo "Connected Successfully <br/>";
    
    // Insert Multi Data
    $stmt = "INSERT INTO students(firstname, lastname, city) VALUE (?, ?, ?)";

    $insertstmt = mysqli_prepare($conn, $stmt);

    mysqli_stmt_bind_param($insertstmt, 'sss', $firstname, $lastname, $city);

    $firstname = "kyaw";
    $lastname = "kyaw";
    $city = "yangon";
    mysqli_stmt_execute($insertstmt);

    $firstname = "zaw";
    $lastname = "zaw";
    $city = "yangon";
    mysqli_stmt_execute($insertstmt);

    $firstname = "hnin";
    $lastname = "mya";
    $city = "yangon";
    mysqli_stmt_execute($insertstmt);

    echo "New Records Created Successfully";

    mysqli_close($conn);
?>