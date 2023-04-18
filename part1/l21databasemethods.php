<?php
    ini_set('display_errors', 1);

    // (i) MySQLi Procedural * normal
    // (ii) MySQLi Object-Oriented * normal
    // (iii) Using PDO (PHP Data Object) *** more secure 

    // (i) MySQLi Procedural * normal
                        // hostname username password databasename
    $conn = mysqli_connect("localhost", "root", "", "wdf6797");

    if(mysqli_connect_error()){
        echo "Failed to connect :". mysqli_connect_error();
        exit();
    }

    echo "Connect Sucessfully";
    echo "<hr/>";

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(!$conn){
        // echo "Failed to connect :". mysqli_connect_error();
        // exit();

        die("Failed to connect :". mysqli_connect_error());
    }

    echo "Connect Sucessfully";
    echo "<hr/>";

    // (ii) MySQLi Object-Oriented * normal

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = new mysqli($dbhost, $dbuser, $dbpass);

    if(mysqli_connect_error()){
        die("Failed to connect :". mysqli_connect_error());
    }

    echo "Connect Sucessfully";
    echo "<hr/>";

    $conn = new mysqli('localhost', 'root', '', 'wdf6797');

    if($conn->connect_errno){
        echo "Failed to connect :". $conn->connect_errno;
        exit();
    }

    echo "Connect Sucessfully <br/>";

    $conn->query("SELECT * FROM buyers");
    echo $conn->affected_rows;
    $conn->close();

    echo "<hr/>";

    function openconn(){
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbconnect = new mysqli($dbhost, $dbuser, $dbpass);

        return $dbconnect;
    }

    function closeconn($conn){
        $conn->close();
    }

    $conn = openconn();
    echo "Connect Sucessfully";
    closeconn($conn);

    echo "<hr/>";

    // (iii) Using PDO (PHP Data Object) *** more secure 

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'wdf6797';

    try{
        // $conn = new PDO("mysql:host=$dbhost", $dbuser, $dbpass);
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connect Sucessfully";
    }catch(PDOException $e){
        echo "Connect Failed : ". $e->getMessage();
    }

    echo "<hr/>";
?>