<?php
    ini_set('display-errors', 1);

    // => MySQLi Procedural

    $conn = mysqli_connect('localhost', 'root', '', 'phpdbone');
    
    if(mysqli_connect_error()){
        echo 'Fail to connect MySQL : '. mysqli_connect_error();
        exit();
    }

    echo "Connected Successfully <br/>";
    
    // Updated Data
    $sql = "UPDATE students SET lastname='tun tun' WHERE id=23";

    if(mysqli_query($conn, $sql)){
        echo "Updated Successfully";
    }else{
        echo "Error ". mysqli_error($conn);
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
    
    // Updated Data
    $sql = "UPDATE students SET lastname='mar aye' WHERE id=36";

    if($conn->query($sql) === TRUE){
        echo "Updated Successfully";
    }else{
        echo "Error ". $conn->error;
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

        $sql = "UPDATE students SET city='mawlamyine' WHERE id=32";

        // $conn->exec($sql);
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // echo "Updated Successfully";
        echo "Updated ". $stmt->rowCount();
    }catch(PDOException $e){
        echo "Error Found : ". $e->getMessage();
    }

    $conn = null;

    echo "<hr/>";
?>