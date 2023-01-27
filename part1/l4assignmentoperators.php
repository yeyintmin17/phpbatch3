<?php
    // Assign ( = )
    $city = ""; # Declare
    $city = NULL; # Declare
    $city = "Yangon"; # Assign (or) Initialize
    $city = "Mandalay"; # Overwrite (or) Reassign

    echo $city;
    echo "<br/> <hr/> <br/>";

    $x = 100;
    $y = 200;

    // echo $x; # result = 100;
    // echo "<br/>";

    // $x = $y;
    // echo $x; # result = 200;
    // echo "<br/>";

    $x =  $y + $x;
    echo $x; # result = 300;

    echo "<br/> <hr/> <br/>";

    // Increment & Decrement (++, --)

    $i = 10;

    // echo $i; # result = 10
    // echo "<br/>";

    // $i = $i + 1; 
    // echo $i; # result = 11
    // echo "<br/>";

    // $i += 1;
    // echo $i; # result = 11
    // echo "<br/>";

    echo $i++; # result = 10
    echo "<br/>";

    echo $i; # result = 11
    echo "<br/>";
    echo $i; # result = 11

    echo "<br/> <hr/> <br/>";

    $y = 20;

    // echo $y; # result = 20
    // echo "<br/>";

    // $y = $y + 1; 
    // echo $y; # result = 21
    // echo "<br/>";

    // $y += 1;
    // echo $y; # result = 21
    // echo "<br/>";

    echo $y++; # result = 20
    echo "<br/>";

    echo $y; # result = 21
    echo "<br/>";
    echo $y; # result = 21
    
    echo "<br/> <hr/> <br/>";

    $num3;
    $num3 = 100;

    // $num3 += 40;
    // echo $num3; # result = 140;
    // echo "<br/>";

    // $num3 -= 40;
    // echo $num3; # result = 60;
    // echo "<br/>";

    // $num3 *= 40;
    // echo $num3; # result = 4000;
    // echo "<br/>";

    // $num3 /= 40;
    // echo $num3; # result = 2.5;
    // echo "<br/>";

    $num3 %= 40;
    echo $num3; # result = 20;
?>