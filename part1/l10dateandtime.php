<?php
    date_default_timezone_set("Asia/Yangon");

    $getdate = getdate();

    echo $getdate;
    echo "<br/> <br/>";

    var_dump($getdate);
    echo "<br/> <br/>";

    echo "This is hours = ". $getdate["hours"]. "<br/>";
    echo "This is minutes = ". $getdate["minutes"]. "<br/>";
    echo "This is seconds = ". $getdate["seconds"]. "<br/>";

    echo "<br/> <br/>";

    echo "This is yday = ". $getdate["yday"]. "<br/>"; // 61 (day of the year)
    echo "This is mday = ". $getdate["mday"]. "<br/>"; // 3 (day of the month)

    echo "<br/> <br/>";

    echo "This is year = ". $getdate["year"]. "<br/>"; // 2023

    echo "<br/> <br/>";

    echo "This is month = ". $getdate["month"]. "<br/>"; // March
    echo "This is mon = ". $getdate["mon"]. "<br/>"; // 3

    echo "<br/> <br/>";
   
    echo "This is weekday = ". $getdate["weekday"]. "<br/>"; // Friday
    echo "This is wday = ". $getdate["wday"]. "<br/>"; // 5 (0 = Sunday)

    echo "<br/> <br/>";
    
    echo "This is 0 = ". $getdate["0"]. "<br/>"; // 1677850378 (1 Jan 1970)

    $time = time();
    echo "This is time timestamp = ". $time ."<br/>"; // 1677850378

    echo "<br/> <br/>";

    /* DATE/TIME Format */
    /* date(format, timestamp) */

    /* Fri, 03 Mar 2023 20:21:47 +0630 */

    $date = date("r", $time);
    echo "This is format r = ". $date ."<br/>"; // Fri, 03 Mar 2023 20:21:47 +0630

    echo "<br/> <br/>";

    /* am pm & AM PM */

    $date = date("a", $getdate["0"]);
    echo "This is format a = ". $date ."<br/>"; // am, pm

    $date = date("a", $time);
    echo "This is format A = ". $date ."<br/>"; // AM, PM

    echo "<br/> <br/>";
    
    /* Date */

    $date = date("j", $time);
    echo "This is format j = ". $date ."<br/>"; // 3 (date, no leading zero)

    $date = date("d", $time);
    echo "This is format d = ". $date ."<br/>"; // 03 (date leading zero)

    echo "<br/> <br/>";

    /* Day Name */

    $date = date("D", $time);
    echo "This is format D = ". $date ."<br/>"; // Fri

    $date = date("l", $time);
    echo "This is format l = ". $date ."<br/>"; // Friday

    echo "<br/> <br/>";

    /* Month Name */

    $date = date("M", $time);
    echo "This is format M = ". $date ."<br/>"; // Mar

    $date = date("F", $time);
    echo "This is format F = ". $date ."<br/>"; // March

    echo "<br/> <br/>";

    /* Month Num */

    $date = date("n", $time);
    echo "This is format n = ". $date ."<br/>"; // 3 (date, no leading zero)

    $date = date("m", $time);
    echo "This is format m = ". $date ."<br/>"; // 03 (date, leading zero)

    echo "<br/> <br/>";

    /* Year */

    $date = date("Y", $time);
    echo "This is format Y = ". $date ."<br/>"; // 2023 (year)

    $date = date("y", $time);
    echo "This is format y = ". $date ."<br/>"; // 23 (year short code)

    echo "<br/> <br/>";

    /* Total Dates In a Year */

    $date = date("z", $time);
    echo "This is format z = ". $date ."<br/>"; // 61 (days of year)

    echo "<br/> <br/>";

    /* Hour */

    $date = date("g", $time);
    echo "This is format g = ". $date ."<br/>"; // 8 (hour, 12 format, no leading zero)

    $date = date("G", $time);
    echo "This is format G = ". $date ."<br/>"; // 20 (hour, 24 format, no leading zero)

    $date = date("h", $time);
    echo "This is format h = ". $date ."<br/>"; // 08 (hour, 12 format, leading zero)

    $date = date("H", $time);
    echo "This is format H = ". $date ."<br/>"; // 20 (hour, 24 format, leading zero)

    echo "<br/> <br/>";

    /* Minute */

    $date = date("i", $time);
    echo "This is format i = ". $date ."<br/>"; // 15 (minute, leading zeros)

    echo "<br/> <br/>";

    /* Second */

    $date = date("s", $time);
    echo "This is format s = ". $date ."<br/>"; // 18 (second, leading zeros)

    echo "<br/> <br/>";

    /* Millisecond */

    $date = date("U", $time);
    echo "This is format U = ". $date ."<br/>"; // 1677851639 (millisecond)

    echo "<br/> <br/>";

    /* Leap Year */

    $date = date("L", $time);
    echo "This is format L = ". $date ."<br/>"; // 0 (Leap Year => 1 = true & 0 = false)

    echo "<br/> <br/>";
?>