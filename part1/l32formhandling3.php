<?php
    ini_set('display_errors', 0);

    $name = $email = $password = $city = $favcolor = $bio = "";
    $nameerr = $emailerr = $passerr = $cityerr = $favcolorerr = $bioerr = "";
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(empty($_POST["name"])){
            $nameerr = "Name is required";
        }else{
            $name = textfilter($_POST["name"]);
        }

        if(empty($_POST["email"])){
            $emailerr = "Email is required";
        }else{
            $email = textfilter($_POST["email"]);
        }

        if(empty($_POST["password"])){
            $passerr = "Password is required";
        }else{
            $password = textfilter($_POST["password"]);
        }
        
        if(empty($_POST["city"])){
            $cityerr = "City is required";
        }else{
            $city = textfilter($_POST["city"]);
        }

        if(empty($_POST["favcolor"])){
            $favcolorerr = "Fav color is required";
        }else{
            $favcolor = textfilter($_POST["favcolor"]);
        }
        
        if(empty($_POST["bio"])){
            $bioerr = "Bio is required";
        }else{
            $bio = textfilter($_POST["bio"]);
        }
    }

    function textfilter($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>l32 Form Handling 3</title>
        <style type="text/css">
            .error{
                color: red;

            }
        </style>
    </head>
    <body>
        <!-- POST -->
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <div>
                <label for="name">Name</label>
                <span class="error">* <?php echo $nameerr; ?></span>
                <input type="text" name="name" id="name" class="" placeholder="Enter Name..."/>
            </div>

            <div>
                <label for="email">Email</label>
                <span class="error">* <?php echo $emailerr; ?></span>
                <input type="text" name="email" id="email" class="" placeholder="Enter Email..."/>
            </div>

            <div>
                <label for="password">Password</label>
                <span class="error">* <?php echo $passerr; ?></span>
                <input type="password" name="password" id="password" class="" placeholder="Enter Password..."/>
            </div>

            <div>
                <label for="city">City</label>
                <span class="error">* <?php echo $cityerr; ?></span>
                <input type="text" name="city" id="city" class="" placeholder="Enter City..."/>
            </div>

            <div>
                <label>Fav Color</label>
                <span class="error">* <?php echo $favcolorerr; ?></span>

                <input type="radio" name="favcolor" id="favrd" class="" value="Red Color"/>
                <label for="favrd">Red</label>

                <input type="radio" name="favcolor" id="favgn" class="" value="Green Color"/>
                <label for="favgn">Green</label>

                <input type="radio" name="favcolor" id="favbl" class="" value="Blue Color"/>
                <label for="favbl">Blue</label>
            </div>

            <div>
                <label for="bio">Bio</label>
                <span class="error">* <?php echo $bioerr; ?></span>
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