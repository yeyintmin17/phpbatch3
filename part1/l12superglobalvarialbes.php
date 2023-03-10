<?php
    // Super Global Variables (or) Predefined Variables
    // 1. $GLOBALS
    // 2. $_SERVER
    // 3. $_REQUEST
    // 4. $_POST
    // 5. $_GET
    // 6. $_FILES
    // 7. $_ENV
    // 8. $_COOKIE
    // 9. $_SESSION

    // 1. $GLOBALS

    $num1 = 10;
    $num2 = 20;

    function totalresult(){
        $GLOBALS['result'] = $GLOBALS['num1'] + $GLOBALS['num2'];
    }

    totalresult(); // must invoke at least 1 times 
    echo $result;

    // echo "<pre>". print_r($GLOBALS, "f") ."</pre>";

    echo "<hr/>";

    // 2. $_SERVER

    echo $_SERVER["PHP_SELF"]; // /phpbatch3/part1/l12superglobalvarialbes.php
    echo "<hr/>";

    echo $_SERVER["HTTP_USER_AGENT"]; // Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36
    echo "<hr/>";

    echo $_SERVER["HTTP_HOST"]; // localhost 
    echo "<hr/>";

    echo $_SERVER["SERVER_NAME"]; // localhost (website's domain name) (return the name of host server - www.domainname.com)
    echo "<hr/>";

    echo $_SERVER["SERVER_SOFTWARE"]; // Apache/2.4.53 (Win64) OpenSSL/1.1.1n PHP/8.1.6
    echo "<hr/>";

    echo $_SERVER["SERVER_PORT"]; // 80
    echo "<hr/>";
?>