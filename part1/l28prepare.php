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

    echo "New Records Created Successfully <br/>";

    mysqli_close($conn);

    echo "<hr/>";

    // => MySQLi Object-Oriented

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'phpdbtwo';

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($conn->connect_error){
        die('Fail to connect MySQL : '. $conn->connect_error);
    }

    echo "Connected Successfully <br/>";
    
    $stmt = $conn->prepare("INSERT INTO students(firstname, lastname, city) VALUES(?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $city);
    
    $firstname = "kyaw";
    $lastname = "kyaw";
    $city = "yangon";
    $stmt->execute();

    $firstname = "zaw";
    $lastname = "zaw";
    $city = "bago";
    $stmt->execute();

    $firstname = "hnin";
    $lastname = "mya";
    $city = "mawlamyine";
    $stmt->execute();

    echo "New Records Created Successfully <br/>";

    $stmt->close();
    $conn->close();

    echo "<hr/>";

    // => PDO

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'phpdbthree';

    try{
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully <br/>";

        $stmt = $conn->prepare("INSERT INTO students(firstname, lastname, city) VALUES (:firstname, :lastname, :city)");

        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":city", $city);

        $firstname = "kyaw";
        $lastname = "kyaw";
        $city = "yangon";
        $stmt->execute();
    
        $firstname = "zaw";
        $lastname = "zaw";
        $city = "bago";
        $stmt->execute();
    
        $firstname = "hnin";
        $lastname = "mya";
        $city = "mawlamyine";
        $stmt->execute();

        echo "New Records Created Successfully <br/>";
    }catch(PDOException $e){
        echo "Error Found : ". $e->getMessage();
    }

    $conn = null;

    echo "<hr/>";
?>