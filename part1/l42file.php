<?php
    echo readfile('./l43file.txt'); // read & word's count
    echo "<hr/>";

    echo filesize('./l43file.txt'); // word's count
    echo "<hr/>";

    $fileopen = fopen('./l43file.txt', 'r'); // r = read, w = write
    if($fileopen){
        // echo "OKI";

        $fileread = fread($fileopen, filesize('./l43file.txt'));
        fclose($fileopen);
        
        echo $fileread;
    }else{
        echo "File Not Found !!!";
    }

    echo "<hr/>";

    // For Linux (Give Permission to write)
    // sudo chmod 777 -R /var/www/html
    // sudo chmod 775 /var/www/html

    $fileopen = fopen('./l44file.txt', 'w'); // r = read, w = over build & write, x = only one build, write, return false if exists, c = over build, write, c+ = read, write, a = only one build, write, no overwrite if exists
    if($fileopen){
        // echo "OKI";

        $filewrite = fwrite($fileopen, "Hello guys!! I created new file.");

        $fileopen = fopen('./l44file.txt', 'r');
        $fileread = fread($fileopen, filesize('./l44file.txt'));

        fclose($fileopen);

        echo $fileread;
    }else{
        echo "File Not Found !!!";
    }

    echo "<hr/>";

    $fileopen = fopen('./l45file.txt', 'x');
    if($fileopen){
        // echo "OKI";

        $filewrite = fwrite($fileopen, "Hello guys!! I created new file by using x.");

        $fileopen = fopen('./l45file.txt', 'r');
        $fileread = fread($fileopen, filesize('./l45file.txt'));

        fclose($fileopen);

        echo $fileread;
    }else{
        echo "File Not Found !!!";
    }

    echo "<hr/>";

    $fileopen = fopen('./l47file.txt', 'w');
    if($fileopen){
        // echo "OKI";

        $message = "Welcome to our class. \n";
        $filewrite = fwrite($fileopen, $message);

        $message = "Thank you for using php file system";
        $filewrite = fwrite($fileopen, $message);

        $fileopen = fopen('./l47file.txt', 'r');
        $fileread = fread($fileopen, filesize('./l47file.txt'));

        fclose($fileopen);

        echo $fileread;
    }else{
        echo "File Not Found !!!";
    }

    echo "<hr/>";

    // $fileopen = fopen('./l48file.txt', 'a');
    // if($fileopen){
    //     // echo "OKI";

    //     $message = "Welcome to our class. \n";
    //     $filewrite = fwrite($fileopen, $message);

    //     $message = "Thank you for using php file system \n";
    //     $filewrite = fwrite($fileopen, $message);

    //     $fileopen = fopen('./l48file.txt', 'r');
    //     $fileread = fread($fileopen, filesize('./l48file.txt'));

    //     fclose($fileopen);

    //     echo $fileread;
    // }else{
    //     echo "File Not Found !!!";
    // }

    // echo "<hr/>";

    // -----------------------------------------------------

    # Other File Functions

    // file_get_contents(filename); // read
    // file_put_contents(filename, message); // if not exists, build & write
    // file_exists(filename); // check file exists or not
    // copy(current filename, copy filename); // copy a file
    // rename(filename, newname); // rename a file
    // unlink(filename); // delete a file

    echo file_get_contents('./l43file.txt');
    echo "<hr/>";

    $existingfile = 'l44file.txt';
    $newfile = 'l49file.txt';

    $message = file_get_contents($existingfile);
    $message .= "\n Thank you for using php file system \n";

    file_put_contents($newfile, $message) or die("Unable to open file");



    $existingfile = 'l60file.txt';
    $newfile = 'l49file.txt';

    if(file_exists($existingfile)){
        $message = file_get_contents($existingfile);
        $message .= "\n Thank you for using php file system \n";

        file_put_contents($newfile, $message) or die("Unable to open file");
    }else{
        echo "File Not Found";
    }

    echo "<hr/>";

    $existingfile = 'l43file.txt';
    $newfile = 'l50file.txt';

    if(is_file($existingfile)){
        $message = file_get_contents($existingfile);
        $message .= "\n Thank you for using php file system \n";

        file_put_contents($newfile, $message) or die("Unable to open file");
    }else{
        echo "File Not Found";
    }



    // $file = "l44file.txt";
    // copy($file, "l51file.txt");
    // echo file_get_contents("l51file.txt");

    // echo "<hr/>";

    // $file = "l51file.txt";
    // rename($file, "l52file.txt");
    // echo file_get_contents("l52file.txt");

    // echo "<hr/>";

    // $file = "l52file.txt";
    // unlink($file);

    // if(file_exists($file)){
    //     unlink($file);
    //     echo "File deleted successfully";
    // }else{
    //     echo "File not found";
    // }

    // echo "<hr/>";

    # Show all .txt file
    echo "<pre>". print_r(glob("l46file.*"), true) ."</pre>";
    echo "<hr/>";

    # Show all files
    echo "<pre>". print_r(glob("*.*"), true) ."</pre>";
    echo "<hr/>";
?>