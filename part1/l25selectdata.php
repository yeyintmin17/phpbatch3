<?php
    ini_set('display-errors', 1);

    // => MySQLi Procedural

    $conn = mysqli_connect('localhost', 'root', '', 'phpdbone');
    
    if(mysqli_connect_error()){
        echo 'Fail to connect MySQL : '. mysqli_connect_error();
        exit();
    }

    echo "Connected Successfully <br/>";
    
    // Select Data
    $sql = "SELECT id, firstname, lastname FROM students WHERE id = 28";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        // echo "<pre>". print_r(mysqli_fetch_assoc($result), "true") ."</pre>";

        while($row = mysqli_fetch_assoc($result)){
            echo "id : ". $row['id'] ." - Name : ". $row['firstname'] ." ". $row['lastname'];
        }
    }else{
        echo "No Result";
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
    
    // Select Data
    $sql = "SELECT id, firstname, lastname FROM students";
    // $sql = "SELECT id, firstname, lastname FROM students WHERE lastname='hlaing";
    // $sql = "SELECT id, firstname, lastname FROM students ORDER BY lastname";

    $result = $conn->query($sql);
    // echo $result->num_rows;

    if($result->num_rows > 0){
        // echo "<pre>". print_r($result->fetch_assoc(), 't') ."</pre>";

        while($row = $result->fetch_assoc()){
            echo "id : ". $row['id'] ." - Name : ". $row['firstname'] ." ". $row['lastname'] ."<br/>";
        }
    }else{
        echo "No Result";
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

        // Select Data

        $stmt = $conn->prepare("SELECT id, firstname, lastname FROM students");
        $stmt->execute();

        // echo "<pre>". print_r($stmt->fetch(), "true") ."</pre>";
        // echo "<pre>". print_r($stmt->fetchAll(), "true") ."</pre>";

        // while($row = $stmt->fetch()){
        //     echo "id : ". $row['id'] ." - Name : ". $row['firstname'] ." ". $row['lastname'] ."<br/>";
        // }

        // foreach($stmt->fetchAll() as $row){
        //     echo "id : ". $row['id'] ." - Name : ". $row['firstname'] ." ". $row['lastname'] ."<br/>";
        // }
    }catch(PDOException $e){
        echo "Error Found : ". $e->getMessage();
    }

    $conn = null;

    echo "<hr/>";
?>