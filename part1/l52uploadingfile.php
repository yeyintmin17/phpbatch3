<?php
    if(isset($_POST["submit"])){
        // echo "hello";

        // $result = $_POST["profile"];
        // echo $result;

        // $result = $_FILES;
        // echo $result;
        // echo "<pre>". print_r($result, true) ."</pre>";

        function getfilesize($filesize){
           if(is_numeric($filesize)){
                $idx = 0;
                $prefix = ["Bit", "Kb", "Mb", "Gb", "Tb", "Pb", "Eb", "Zb", "Yb"];
                $fixnum = 1024;
                
                while(($filesize / $fixnum) > 0.9){
                    $filesize = $filesize / $fixnum;
                    $idx++;
                }
    
                return round($filesize, 2) .$prefix[$idx];
            }else{
                return "NaN";
            }
        }
    
        echo getfilesize($_FILES['profile']['size']) ."<br/>";
    }

    // file size in php, will show byte
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>l52 Uploading File</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <div class="col-md-6 mx-auto mt-5">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="profile">Profile Picture</label>
                    <input type="file" name="profile" id="profile" class="form-control"/>
                </div>

                <input type="submit" name="submit" class="btn btn-primary float-end" value="Upload"/>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>

<!-- 
bit
byte
kilo byte
mega byte
giga byte
tera byte 
peta byte
exa byte
zetta byte
yotta byte
-->