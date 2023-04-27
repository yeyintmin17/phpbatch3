<?php
    $name = $email = $password = $city = $favcolor = $bio = "";
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $city = $_POST["city"];
        $favcolor = $_POST["favcolor"];
        $bio = $_POST["bio"];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>l29 Form Handling 1</title>
    </head>
    <body>
        <!-- POST -->
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="" placeholder="Enter Name..."/>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="" placeholder="Enter Email..."/>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="" placeholder="Enter Password..."/>
            </div>

            <div>
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="" placeholder="Enter City..."/>
            </div>

            <div>
                <label>Fav Color</label>

                <input type="radio" name="favcolor" id="favrd" class="" value="Red Color"/>
                <label for="favrd">Red</label>

                <input type="radio" name="favcolor" id="favgn" class="" value="Green Color"/>
                <label for="favgn">Green</label>

                <input type="radio" name="favcolor" id="favbl" class="" value="Blue Color"/>
                <label for="favbl">Blue</label>
            </div>

            <div>
                <label for="bio">Bio</label>
                <textarea name="bio" id="bio" class="" rows="5" cols="50"></textarea>
            </div>

            <button type="submit">Submit</button>
        </form>

        <?php
            echo "<h2>My Information Are ...</h2>";
            echo "Name is $name <br/>";
            echo "Email is $email <br/>";
            echo "Password is $password <br/>";
            echo "City is $city <br/>";
            echo "Favcolor is $favcolor <br/>";
            echo "Bio is $bio <br/>";

            echo "<hr/>";

            echo $_SERVER['PHP_SELF'];
        ?>
    </body>
</html>