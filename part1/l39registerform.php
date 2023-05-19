<?php
    // if(isset($_POST['submit'])){
    //     echo "Form Submitted";
    // }

    if(isset($_POST['submit'])){
        $name = textfilter($_POST['name']);
        $email = textfilter($_POST['email']);
        $password = md5(textfilter($_POST['password']));
        
        // echo "$name <br/>";
        // echo "$email <br/>";
        // echo "$password <br/>";

        // => MySQLi Procedural

        // DB Connect
        $conn = mysqli_connect('localhost', 'root', '', 'phpdbone');

        if(mysqli_connect_error()){
            echo "Failed to connect MySQL". mysqli_connect_error();
            exit();
        }
        echo "Connected Database Successfully <br/>";

        // Data Insert
        $stmt = "INSERT INTO users (name, email, password) VALUE (?, ?, ?)";

        $insertstmt = mysqli_prepare($conn, $stmt);
        mysqli_stmt_bind_param($insertstmt, 'sss', $name, $email, $password);
        mysqli_stmt_execute($insertstmt);

        echo "New User Created Successfully <br/>";

        mysqli_close($conn);
    }

    function textfilter($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>l39 Register Form</title>

        <!-- bootstrap css1 js1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="col-md-6 mx-auto">
                <h3 class="text-center my-3">Register Form</h3>

                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" class="form-control"/>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"/>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control"/>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Sign Up"/>
                </form>
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