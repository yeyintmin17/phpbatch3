<?php
    ini_set('display_errors', 1);

    $dbhost = $_SERVER['HTTP_HOST'];
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'wdf6797';

    /* MySQLi Procedural */

    // Start Connect Database

    // $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // if(mysqli_connect_error()){
    //     die("Connect error is ". mysqli_connect_error());
    // }

    // echo "Conntected successfully <hr/>";

    // End Connect Database

    // Start Create Table

    // $createTB = "CREATE TABLE IF NOT EXISTS fruits(
    //     id INT AUTO_INCREMENT,
    //     name VARCHAR(255) NOT NULL,
    //     stock INT,
    //     price INT,
    //     PRIMARY KEY(id)
    // )";

    // if(mysqli_query($con, $createTB)){
    //     echo "Created table successfully <hr/>";
    // }else{
    //     echo "Create table error is ". mysqli_error($con) ."<hr/>";
    // }

    // End Create Table

    // Start Insert Data

    // $insertData = "INSERT INTO fruits (name, stock, price) VALUE (?, ?, ?)";

    // $prepare = mysqli_prepare($con, $insertData);
    // $bind = mysqli_stmt_bind_param($prepare, 'sii', $name, $stock, $price);

    // $name = 'banana';
    // $stock = 5;
    // $price = 1000;
    // mysqli_stmt_execute($prepare);

    // $name = 'stawberry';
    // $stock = 8;
    // $price = 3000;
    // mysqli_stmt_execute($prepare);

    // $name = 'apple';
    // $stock = 9;
    // $price = 1500;
    // mysqli_stmt_execute($prepare);

    // echo "Inseted data successfully <hr/>";

    // End Insert Data

    // Start Select Data

    // $selectData = "SELECT * FROM fruits";
    // $selectResult = mysqli_query($con, $selectData);

    // if(mysqli_num_rows($selectResult) > 0){
    //     echo "Selected data successfully <hr/>";

    //     while($fruit =  mysqli_fetch_assoc($selectResult)){
    //         echo "{$fruit['id']} {$fruit['name']} {$fruit['stock']} {$fruit['price']} <br/>";
    //     }
    // }else{
    //     echo "Select data is zero <hr/>";
    // }

    // End Select Data

    // Start Update Data

    // $upData = "UPDATE fruits SET name = 'grape' WHERE name = 'apple'";
    // $upRes = mysqli_query($con, $upData);
    
    // if($upRes){
    //     echo "Updated data successfully <hr/>";
    // }else{
    //     echo "Updated data error is ". mysqli_error($con) ."<hr/>";
    // }

    // End Update Data

    // Start Delete Data

    // $delData = "DELETE FROM fruits WHERE name = 'grape'";
    // $delRes = mysqli_query($con, $delData);
    
    // if($delRes){
    //     echo "Deleted data successfully <hr/>";
    // }else{
    //     echo "Deleted data error is ". mysqli_error($con) ."<hr/>";
    // }

    // End Delete Data
    
    // mysqli_close($con);

    # ----------------------------------------

    /* MySQLi Object-Oriented */

    // Start Connect Database

    // $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // if($con->connect_errno){
    //     die("Connect error is ". $con->connect_errno);
    // }

    // echo "Conntected successfully <hr/>";

    // End Connect Database

    // Start Create Table 

    // $createTB = "CREATE TABLE IF NOT EXISTS fruits(
    //     id INT AUTO_INCREMENT,
    //     name VARCHAR(255) NOT NULL,
    //     stock INT,
    //     price INT,
    //     PRIMARY KEY(id)
    // )";

    // if($con->query($createTB)){
    //     echo "Created table successfully <hr/>";
    // }else{
    //     echo "Create table error is ". $con->error ."<hr/>";
    // }

    // End Create Table 

    // Start Insert Data

    // $insertData = "INSERT INTO fruits (name, stock, price) VALUE (?, ?, ?)";

    // $prepare = $con->prepare($insertData);
    // $bind = $prepare->bind_param('sii', $name, $stock, $price);

    // $name = 'banana';
    // $stock = 5;
    // $price = 1000;
    // $prepare->execute();

    // $name = 'stawberry';
    // $stock = 8;
    // $price = 3000;
    // $prepare->execute();

    // $name = 'apple';
    // $stock = 9;
    // $price = 1500;
    // $prepare->execute();

    // echo "Inseted data successfully <hr/>";

    // End Insert Data

    // Start Select Data

    // $selectData = "SELECT * FROM fruits";
    // $selectResult = $con->query($selectData);

    // if($selectResult->num_rows > 0){
    //     echo "Selected data successfully <br/> <br/> <br/>";

    //     while($fruit = $selectResult->fetch_assoc()){
    //         echo "{$fruit['id']} {$fruit['name']} {$fruit['stock']} {$fruit['price']} <br/>";
    //     }

    //     echo "<hr/>";
    // }else{
    //     echo "Select data is zero <hr/>";
    // }

    // End Select Data

    // Start Update Data

    // $upData = "UPDATE fruits SET name = 'grape' WHERE name = 'apple'";
    // $upRes = $con->query($upData);
    
    // if($upRes){
    //     echo "Updated data successfully <hr/>";
    // }else{
    //     echo "Updated data error is ". $conn->error ."<hr/>";
    // }

    // End Update Data

    // Start Delete Data

    // $delData = "DELETE FROM fruits WHERE name = 'grape'";
    // $delRes = $con->query($delData);
    
    // if($delRes){
    //     echo "Deleted data successfully <hr/>";
    // }else{
    //     echo "Deleted data error is ". $con->error ."<hr/>";
    // }

    // End Delete Data

    // $con->close();

    # ----------------------------------------

    /* PDO (PHP Data Object) */

    try{
        // Start Connect Database

        $con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected database successfully <hr/>";

        // End Connect Database

        // Start Create Table

        $createTB = "CREATE TABLE IF NOT EXISTS fruits(
            id INT AUTO_INCREMENT,
            name VARCHAR(255) NOT NULL,
            stock INT,
            price INT,
            PRIMARY KEY(id)
        )";

        $con->exec($createTB);
        echo "Created table successfully <hr/>";
       
        // End Create Table

        // Start Insert Data

        $insertData = "INSERT INTO fruits (name, stock, price) VALUE (:name, :stock, :price)";

        $prepare = $con->prepare($insertData);

        $bindParam = $prepare->bindParam(':name', $name);
        $bindParam = $prepare->bindParam(':stock', $stock);
        $bindParam = $prepare->bindParam(':price', $price);

        // $name = 'banana';
        // $stock = 5;
        // $price = 1000;
        // $prepare->execute();

        // $name = 'stawberry';
        // $stock = 8;
        // $price = 3000;
        // $prepare->execute();

        // $name = 'apple';
        // $stock = 9;
        // $price = 1500;
        // $prepare->execute();

        echo "Inseted data successfully <hr/>";

        // End Insert Data

        // Start Select Data

        $selectData = "SELECT * FROM fruits";
        
        $selectPrepare = $con->prepare($selectData);
        $selectPrepare->execute();

        echo "Selected data successfully <br/><br/><br/>";

        foreach($selectPrepare->fetchAll() as $fruit){
            echo "{$fruit['id']} {$fruit['name']} {$fruit['stock']} {$fruit['price']} <br/>";
        }

        echo "<hr/>";

        // End Select Data

        // Start Update Data

        $upData = "UPDATE fruits SET name = 'grape' WHERE name = 'apple'";
        $upRes = $con->exec($upData);

        echo "Updated data successfully <hr/>";
        
        // End Update Data

        // Start Delete Data

        $delData = "DELETE FROM fruits WHERE name = 'grape'";
        $delRes = $con->exec($delData);
        
        echo "Deleted data successfully <hr/>";
        
        // End Delete Data
    }catch(PDOException $e){
        echo "Error is ". $e->getMessage();
    }

    $con = null;