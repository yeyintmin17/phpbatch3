<?php
    // if(isset($_POST['submit'])){
    //     echo "Form Submitted";
    // }

    // => MySQLi Object-Oriented
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "phpdbone";

    try{
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT id, name, email FROM users");
        $stmt->execute();

        // while($row = $stmt->fetch()){
        //     echo "id: ".  $row['id'] ." name : ". $row['name'] ." email : ". $row['email'] ."<br/>";
        // }
    }catch(PDOException $e){
        echo "Error Found : ". $e->getMessage();
    }

    if(isset($_POST['submit'])){
        $stmt = $conn->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(":id", $id);

        $id = $_POST['submit'];
        $stmt->execute();

        echo $stmt->rowCount() ." User Deleted  Successfully <br/>";

        $conn = null;

        // Redirect by PHP
        // $page = $_SERVER['PHP_SELF'];
        // header("Location:$page");
        // exit;

        // Redirect by JS
        echo "
            <script type='text/javascript'>
                // Method 1 = Redirect to current page
                // window.location.href= window.location.href;

                // Method 2 = Redirect to current page
                // window.location.replace(window.location.href);

                // Method 3 = Redirect to current page
                window.location.assign(window.location.href);
            </script>
        ";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>l41 User Delete Form</title>

        <!-- bootstrap css1 js1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="col-md-6 mx-auto">
                <h3 class="text-center my-3">User Delete Form</h3>

                <table class="table border table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while($row = $stmt->fetch()){
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                
                                echo "<tr>";
                                    echo "<td>$id</td>";
                                    echo "<td>$name</td>";
                                    echo "<td>$email</td>";
                                    echo "
                                        <td> 
                                            <form action='' method='post'>
                                                <button type='submit' name='submit' id='submit' class='btn btn-danger' value='$id'>Delete</button> 
                                            </form>
                                        </td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- bootstrap css1 js1 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>

<!-- CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
    eamil VARCHAR(255),
    password VARCHAR(255),
    PRIMARY KEY(id)
); -->

<!-- 
INSERT INTO users (name, email, password)
VALUES ('tin tun', 'tintun@gmail.com', MD5(SHA('123'))),
    ('tin tun', 'tintun@gmail.com', MD5(SHA('123'))),
    ('tin tun', 'tintun@gmail.com', MD5(SHA('123')));
-->