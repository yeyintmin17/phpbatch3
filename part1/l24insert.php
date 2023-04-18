<?php
    ini_set('display-errors', 1);

    // => MySQLi Procedural

    $conn = mysqli_connect('localhost', 'root', '', 'phpdbone');
    
    if(mysqli_connect_error()){
        echo 'Fail to connect MySQL : '. mysqli_connect_error();
        exit();
    }

    echo "Connected Successfully <br/>";
    
    // Insert Data
    $sql = "
        INSERT INTO students(firstname, lastname, city) 
        VALUE ('aung', 'kyaw', 'yangon')
    ";

    if(mysqli_query($conn, $sql)){
        echo "Inserted Data Successfully";
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
    
    // Insert Data
    $sql = "
        INSERT INTO students (firstname, lastname, city) 
        VALUE ('aung', 'kyaw', 'yangon'),
            ('su', 'hlaing', 'mandalay')
    ";

    if($conn->query($sql) === TRUE){
        echo "Inserted Data Successfully";
    }else{
        echo "ERROR Found : ". $conn->error;
    }

    $conn->close();

    echo "<hr/>";

    // // => PDO

    // $dbhost = 'localhost';
    // $dbuser = 'root';
    // $dbpass = '';
    // $dbname = 'phpdbthree';

    // try{
    //     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "Connected Successfully <br/>";

    //     // Insert Data
    //     $sql = "
    //         INSERT INTO students (firstname, lastname, city)
    //         VALUE ('aung', 'kyaw', 'yangon');
    //     ";

    //     $sql .= "
    //         INSERT INTO students (firstname, lastname, city)
    //         VALUE ('su', 'hlaing', 'yangon');
    //     ";

    //     $sql .= "
    //         INSERT INTO students (firstname, lastname, city)
    //         VALUE ('tun', 'aung', 'yangon');
    //     "; // if not .= , it will overwrite

    //     $conn->exec($sql);
    //     echo "Inserted Data Successfully <br/>";
    // }catch(PDOException $e){
    //     echo "Error Found : ". $e->getMessage();
    // }

    // echo '<hr/>';

    // => PDO

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'phpdbthree';

    try{
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully <br/>";

        // begin the transaction
        $conn->beginTransaction(); // after exec, reload
        
        // Insert Data
        $conn->exec("
            INSERT INTO students (firstname, lastname, city)
            VALUE ('aung', 'kyaw', 'yangon');
        ");

        $conn->exec("
            INSERT INTO students (firstname, lastname, city)
            VALUE ('su', 'hlaing', 'yangon');
        ");

        $conn->exec("
            INSERT INTO students (firstname, lastname, city)
            VALUE ('tun', 'aung', 'yangon');
        ");
        
        // every transaction committed for each
        $conn->commit();

        echo "Inserted Data Successfully <br/>";
    }catch(PDOException $e){
        echo "Error Found : ". $e->getMessage();
    }

    echo '<hr/>';
?>