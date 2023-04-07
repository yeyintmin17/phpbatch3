<?php
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
?>