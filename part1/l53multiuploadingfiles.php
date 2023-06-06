<?php
    // echo "<pre>". print_r($_FILES, true) ."</pre>";

    if(isset($_POST["submit"])){
        $filenames = $_FILES["profile"]["name"];
        $filetmps = $_FILES["profile"]["tmp_name"];
        $fileerrs = $_FILES["profile"]["error"];

        $uploaddir = "assets/";

        foreach($fileerrs as $idx => $fileerr){
            // UPLOAD_ERR_OK => there is no error, the file uploaded with success.
            if($fileerr === UPLOAD_ERR_OK){
                $getfilename = $filenames[$idx];
                $uploadfile = $uploaddir .basename($getfilename);
                $getfiletmp = $filetmps[$idx];

                if(move_uploaded_file($getfiletmp, $uploadfile)){
                    echo "Files uploaded successfully <br/>";
                }else{
                    echo "Uploaded failed <br/>";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>l53 Multi Uploading Files</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <!-- <div class="col-md-6 mx-auto mt-5">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="profile" class="mb-4">Profile Picture</label>
                    <input type="file" name="profile[]" id="profile" class="form-control"/>
                    <input type="file" name="profile[]" id="profile" class="form-control my-3"/>
                    <input type="file" name="profile[]" id="profile" class="form-control"/>
                </div>

                <input type="submit" name="submit" class="btn btn-primary float-end" value="Upload"/>
            </form>
        </div> -->

        <div class="col-md-6 mx-auto mt-5">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="profile" class="mb-4">Profile Picture</label>
                    <input type="file" name="profile[]" id="profile" class="form-control" multiple/>
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