<?php
    ini_set('display-errors', 1);

    // => MySQLi Procedural

    $conn = mysqli_connect('localhost', 'root', '', 'phpdbone');
    
    if(mysqli_connect_error()){
        echo 'Fail to connect MySQL : '. mysqli_connect_error();
        exit();
    }

    echo "Connected Successfully <br/>";
    
    // Create Table
    $sql = "CREATE TABLE IF NOT EXISTS students(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        city VARCHAR(50),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if(mysqli_query($conn, $sql)){
        echo "Table Created Successfully";
    }else{
        echo "ERROR Found : ". mysqli_error($conn);
    }

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
    
    // Create Table
    $sql = "CREATE TABLE IF NOT EXISTS students(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        city VARCHAR(50),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if($conn->query($sql) === TRUE){
        echo "Table Created Successfully";
    }else{
        echo "ERROR Found : ". $conn->error;
    }

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

        // Create Table
        $sql = "CREATE TABLE IF NOT EXISTS students(
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            city VARCHAR(50),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        $conn->exec($sql);
        echo "Table Created Successfully <br/>";
    }catch(PDOException $e){
        echo "Error Found : ". $e->getMessage();
    }

    echo '<hr/>';
?>