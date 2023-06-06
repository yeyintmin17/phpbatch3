<?php
    // abs() Function
    // abs(number)

    echo "abs(number) <br/><br/>";

    echo abs(32) ."<br/>"; # 32
    echo abs(-32) ."<br/>"; # 32
    echo abs(32.75) ."<br/>"; # 32.75
    echo abs(-32.75) ."<br/>"; # 32.75

    echo "<hr/>";

    // round() Function
    // round(number)

    echo "round(number) <br/><br/>";

    echo round(32.64) ."<br/>"; # 33
    echo round(32.54) ."<br/>"; # 33
    echo round(32.44) ."<br/>"; # 32
    echo round(-32.64) ."<br/>"; # -33

    echo "<hr/>";

    // ceil() Function
    // ceil(number)

    echo "ceil(number) <br/><br/>";

    echo ceil(32.64) ."<br/>"; # 33
    echo ceil(32.54) ."<br/>"; # 33
    echo ceil(32.44) ."<br/>"; # 33

    echo ceil(-32.33) ."<br/>"; # -32
    echo ceil(-32.64) ."<br/>"; # -32

    echo "<hr/>";

    // floor() Function
    // floor(number)

    echo "floor(number) <br/><br/>";

    echo floor(32.64) ."<br/>"; # 32
    echo floor(32.54) ."<br/>"; # 32
    echo floor(32.44) ."<br/>"; # 32

    echo floor(-32.33) ."<br/>"; # -33
    echo floor(-32.64) ."<br/>"; # -33

    echo "<hr/>";

    // max() Function
    // max(number)

    echo "max(number) <br/><br/>";

    echo max(2, 4, 20, 6, 8, 10) ."<br/>"; // 20
    echo max(2, 4, 20, 6, -40, 8, 10) ."<br/>"; // 20
    echo max(2, 4, 20, 6, "100", -40, 8, 10) ."<br/>"; // 100

    echo "<hr/>";

    // min() Function
    // min(number)

    echo "min(number) <br/><br/>";

    echo min(2, 4, 20, 6, 8, 10) ."<br/>"; // 2
    echo min(2, 4, 20, 6, -40, 8, 10) ."<br/>"; // -40
    echo min(2, "-100", 4, 20, 6, -40, 8, 10) ."<br/>"; // -100

    echo "<hr/>";

    // pow() Function
    // pow(x, y)

    echo "pow(x, y) <br/><br/>";

    echo pow(2, 4) ."<br/>"; // 16
    echo pow(-3, 3) ."<br/>"; // -27

    echo "<hr/>";

    // log() Function
    // log(number, base)

    echo "log(x, y) <br/><br/>";

    echo log(10, 2) ."<br/>"; // 3.3219280948874
    echo log(20, 2) ."<br/>"; // 4.3219280948874
    echo log(80, 3) ."<br/>"; // 3.9886925350038
    echo log(8, 3) ."<br/>"; // 1.8927892607144
    
    echo "<hr/>";

    // sqrt() Function
    // sqrt(num)

    echo "sqrt(num) <br/><br/>";

    echo sqrt(4) ."<br/>"; // 2
    echo sqrt(9) ."<br/>"; // 3
    echo sqrt(0.81) ."<br/>"; // 0.9
    echo sqrt(-4) ."<br/>"; // NAN
    echo sqrt(-8) ."<br/>"; // NAN

    echo "<hr/>";

    // rand() Function
    // rand() or rand(min, max)

    echo "rand(num) <br/><br/>";

    echo rand() ."<br/>";
    echo rand() ."<br/>";
    echo rand(1000, 10000) ."<br/>";

    echo "<hr/>";
?>