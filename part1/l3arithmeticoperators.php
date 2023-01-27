<?php
    // phpinfo();

    // Arithmetic Operators
    // +, -, *, /, %

    $num1 = 100;
    $num2 = 200;
    $num3 = 30.28;

    $city = "Mawlamyine";
    $car = false;

    $myarrs = ['maung maung', 'kyaw kyaw'];
    $colors = array('red', 'blue', 'green');

    echo $num1; # 100
    echo $num2; # 200
    echo "<br/>";

    echo $num1 + $num2; # 300
    echo "<br/>";

    echo $num1 - $num2; # -100
    echo "<br/>";

    echo $num1 * $num2; # 20000
    echo "<br/>";

    echo $num2 / $num1; # 2
    echo "<br/>";

    echo $num2 % $num1; # 0

    echo "<br/> <hr/> <br/>";

    var_dump($num1);
    echo "<br/>";

    var_dump($num1, $num2);
    echo "<br/>";

    echo var_dump($num1), var_dump($num2);
    echo "<br/>";

    var_dump($num3);
    echo "<br/>";

    var_dump($city);
    echo "<br/>";

    var_dump($car);
    echo "<br/>";

    var_dump($myarrs);
    echo "<br/>";

    var_dump($colors);
    
    echo "<br/> <hr/> <br/>";

    $num4 = true; # true = 1, flase = 0
    $num5 = "10";
    $num6 = '20';

    var_dump($num5, $num6);
    echo "<br/>";

    echo $num5 + $num6; # 30
    echo "<br/>"; 

    echo $num6 - $num5; # 10
    echo "<br/>";

    echo $num4 + $num5; # 11
    echo "<br/>";

    var_dump($num5 + $num6); # result = int(30)

    echo "<br/> <hr/> <br/>";

    // Overwrite
    $num5 = 50;
    $num6 = '60';
    
    var_dump($num5, $num6);
    echo "<br/>";

    echo $num5 + $num6; # result = 110

    echo "<br/> <hr/> <br/>";
?>