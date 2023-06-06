<?php
    if(isset($_POST["submit"])){
        // echo "hello";

        // $result = $_POST["profile"];
        // echo $result;

        // $result = $_FILES;
        // echo $result;
        // echo "<pre>". print_r($result, true) ."</pre>";

        // function getfilesize($filesize){
        //    if(is_numeric($filesize)){
        //         $idx = 0;
        //         $prefix = ["B", "Kb", "Mb", "Gb", "Tb", "Pb", "Eb", "Zb", "Yb"];
        //         $fixnum = 1024;
                
        //         while(($filesize / $fixnum) > 0.9){
        //             $filesize = $filesize / $fixnum;
        //             $idx++;
        //         }
    
        //         return round($filesize, 2) .$prefix[$idx];
        //     }else{
        //         return "NaN";
        //     }
        // }
    
        // echo getfilesize($_FILES['profile']['size']) ."<br/>";

        // function getfilesizetwo($filesize){
        //     $idx = 0;
        //     $prefix = ["B", "Kb", "Mb", "Gb", "Tb", "Pb", "Eb", "Zb", "Yb"];
        //     $fixnum = 1024;

        //    if($filesize < $fixnum){
        //         return $filesize .' '. $prefix[$idx];
        //     }else{
        //         while($filesize > $fixnum){
        //             $filesize = round($filesize / $fixnum, 2);
        //             $idx++;
        //         }
    
        //         return $filesize .$prefix[$idx];
        //     }
        // }
    
        // echo getfilesizetwo($_FILES['profile']['size']) ."<br/>";

        // function getfilesizethree($filesize){
        //     $size = filesize($filesize);
        //     $prefix = ["B", "Kb", "Mb", "Gb", "Tb", "Pb", "Eb", "Zb", "Yb"];
        //     $fixnum = 1024;

        //    // echo $size ."<br/>";

        //     $power = $size > 0 ? floor(log($size, $fixnum)) : 0;

        //     // $result = $size / pow($fixnum, $power) .$prefix[$power];
        //     $result = round($size / pow($fixnum, $power), 2) .$prefix[$power];
        //     return $result;
        // }
    
        // echo getfilesizethree($_FILES["profile"]["tmp_name"]) ."<br/>";

        // $uploaddir = "assets/";
        // $uploadfile = $uploaddir .basename($_FILES['profile']['name']);

        // if(move_uploaded_file($_FILES['profile']['tmp_name'], $uploadfile)){
        //     echo "FIle Successfully Uploaded <br/>";
        // }else{
        //     echo "Try Again <br/>";
        // }

        // $uploaddir = "assets/";
        // $uploadfile = $uploaddir .basename($_FILES['profile']['name']);
        // $uploadsize = $_FILES['profile']['size'];

        // if($uploadsize > 30000){
        //     echo "Sorry, Your file is too large";
        // }else{
        //     if(file_exists($uploadfile)){
        //         echo "Sorry, File already exists <br/>";
        //     }else{
        //         if(move_uploaded_file($_FILES['profile']['tmp_name'], $uploadfile)){
        //             echo "FIle Successfully Uploaded <br/>";
        //         }else{
        //             echo "Try Again <br/>";
        //         }
        //     }
        // }

        // $uploaddir = "assets/";
        // $uploadfile = $uploaddir .basename($_FILES['profile']['name']);
        // $uploadsize = $_FILES['profile']['size'];
        // $uploadtype = strtolower(pathinfo($uploadfile, PATHINFO_EXTENSION));

        // if($uploadtype !== "jpg" && $uploadtype !== "jpeg" && $uploadtype !== "png" && $uploadtype !== "gif"){
        //     echo "Sorry, We just allowed for JPG, JPEG, PNG & GIF file types <br/>";
        // }else{
        //     if($uploadsize > 30000){
        //         echo "Sorry, Your file is too large";
        //     }else{
        //         if(file_exists($uploadfile)){
        //             echo "Sorry, File already exists <br/>";
        //         }else{
        //             if(move_uploaded_file($_FILES['profile']['tmp_name'], $uploadfile)){
        //                 echo "FIle Successfully Uploaded <br/>";
        //             }else{
        //                 echo "Try Again <br/>";
        //             }
        //         }
        //     }
        // }

        // $uploaddir = "assets/";
        // $uploadfile = $uploaddir .basename($_FILES['profile']['name']);
        // $uploadsize = $_FILES['profile']['size'];
        // $uploadtype = strtolower(pathinfo($uploadfile, PATHINFO_EXTENSION));
        // $uploadready = true;

        // // check file already exists or not
        // if(file_exists($uploadfile)){
        //     echo "Sorry, file already exists. <br/>";
        //     $uploadready = false;
        // }

        // // check file size
        // if($_FILES["profile"]["size"] > 30000){
        //     echo "Sorry, your file is too large <br/>";
        //     $uploadready = false;
        // }

        // // check file format
        // if($uploadtype !== "jpg" && $uploadtype !== "jpeg" && $uploadtype !== "png" && $uploadtype !== "gif"){
        //     echo "Sorry, We just allowed for JPG, JPEG, PNG & GIF file types <br/>";
        //     $uploadready = false;
        // }

        // // upload
        // if($uploadready){
        //     if(move_uploaded_file($_FILES['profile']['tmp_name'], $uploadfile)){
        //         echo "Uploaded successfully <br/>";
        //     }else{
        //         echo "Uploading Failed <br/>";
        //     }
        // }else{
        //     echo "Sorry, your file was not uploaded <br/>";
        // }

        if(!empty($_FILES["profile"]["name"])){
            $filename = $_FILES["profile"]["name"];
            $filesize = $_FILES["profile"]["size"];
            $filetmp = $_FILES["profile"]["tmp_name"];

            $uploaddir = "assets/";
            $uploadfile = $uploaddir .basename($_FILES['profile']['name']);
            $uploadtype = strtolower(end(explode(".", $filename)));

            $allowextensions = ["jpg", "jpeg", "png", "gif"];

            if(isset($_FILES["profile"])){
                $errors = [];

                // check extension
                if(in_array($uploadtype, $allowextensions)){
                    $erros[] = "Sorry, We just allowed for JPG, JPEG, PNG & GIF file types";
                }
                
                // check size
                if($filesize > 30000){
                    $erros[] = "Sorry, your file is too large";
                }

                // upload
                if(empty($errors) === true){
                    move_uploaded_file($filetmp, $uploadfile);
                    echo "File uploaded successfully <br/>";
                }else{
                    echo "<pre>". print_r($errors, true) ."</pre>";
                }
            }
        }
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

<!--
1MB = 1024KB instead of 1000KB
01 base 2

2^0 = 1
2^2 = 4
2^10 = 1024
-->