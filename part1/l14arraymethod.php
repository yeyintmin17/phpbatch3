<?php
    // array_chunk();
    // array_chunk(array, size, perserve_key);

    $couples = ["aung aung", "su su", "nu nu", "kyaw kyaw", "mya mya", "tun tun", "maung maung", "yin yin"];

    echo "<pre>". print_r(array_chunk($couples, 2), "true") ."<pre/>";
    echo "<br/>";

    echo array_chunk($couples, 2)[0][1]; # su su
    echo "<br/>";

    echo "<pre>". print_r(array_chunk($couples, 3, "true"), "true") ."</pre>";
    echo "<br/>";

    echo "<pre>". print_r(array_chunk($couples, 2, true), "true") ."</pre>"; # 0 1 2 3 4 5 6 7
    echo "<br/>";

    echo "<pre>". print_r(array_chunk($couples, 2, false), "true") ."</pre>"; # 01 01 01 01

    echo "<hr/>";

    // array_combine() Function
    // array_combine(key, value) Function

    $name = array("aung aung", "su su", "maung maung", "hla hla");
    $age = ["30", "25", "35", "40"];

    echo "<pre>". print_r(array_combine($name, $age), "true") ."</pre>";
    echo "<br/>";

    echo "<pre>". array_combine($name, $age)["aung aung"] ."</pre>"; // 30
    echo "<br/>";

    echo "<hr/>";

    // array_count_values() Function
    // array_count_values(array) Function

    $car = ["toyota", "suzuki", "mazada", "force"];
    $car = ["toyota", "suzuki", "mazada", "force", "suzuki", "force", "force"];

    echo "<pre>". print_r(array_count_values($car), "true") ."</pre>";
    echo "<br/>";

    echo "<hr/>";

    // count() Function
    // count(array)

    $car = ["toyota", "suzuki", "mazada", "force", "suzuki", "force", "force"];

    echo "<pre>". print_r(count($car), "true") ."</pre>";
    echo "<br/>";

    echo "<hr/>";

    // array_diff() Function
    // array_diff(arr1, arr2, arr3, ...)
    // Notice we don't need to consider index or keyname

    $colors1 = ["red", "green", "blue", "pink"];
    $colors2 = ["red", "blue", "pink", "silver"];
    $colors3 = ["green", "blue", "orange", "violet"];

    echo "<pre>". print_r(array_diff($colors1, $colors2), "true") ."</pre>"; // green
    echo "<br/>";

    echo "<pre>". print_r(array_diff($colors2, $colors1), "true") ."</pre>"; // silver
    echo "<br/>";

    echo "<pre>". print_r(array_diff($colors1, $colors2, $colors3), "true") ."</pre>";
    echo "<br/>";

    $col1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $col2 = array("e" => "red", "f" => "green", "g" => "black");

    echo "<pre>". print_r(array_diff($col1, $col2), "true") ."</pre>"; // blue yellow
    echo "<br/>";

    echo "<pre>". print_r(array_diff($col2, $col1), "true") ."</pre>"; // black
    echo "<br/>";

    echo "<hr/>";

    // array_diff_assoc() Function
    // array_diff_assoc(arr1, arr2, arr3) Function
    // Note: we need to consider keyname and value ( just for assoc array )

    $col1 = array("a" => "red", "b" => "yellow", "c" => "blue", "d" => "green");
    $col2 = array("a" => "red", "b" => "green", "c" => "blue");

    echo "<pre>". print_r(array_diff_assoc($col1, $col2), "true") ."</pre>"; // yellow green
    echo "<br/>";

    echo "<pre>". print_r(array_diff_assoc($col2, $col1), "true") ."</pre>"; // green
    echo "<br/>";

    echo "<pre>". print_r(array_diff_assoc($colors2, $colors1), "true") ."</pre>"; // blue pink silver
    echo "<br/>";

    echo "<hr/>";

    // array_diff_key() Function
    // array_diff_key(arr1, arr2, arr3, ...) Function

    $col1 = array("a" => "red", "b" => "yellow", "c" => "blue", "d" => "green", "f" => "pink");
    $col2 = array("a" => "red", "b" => "green", "c" => "blue", "e" => "orange");

    echo "<pre>". print_r(array_diff_key($col1, $col2), "true") ."</pre>"; // green pink
    echo "<br/>";

    echo "<pre>". print_r(array_diff_key($col2, $col1), "true") ."</pre>"; // orange
    echo "<br/>";

    echo "<hr/>";

    // array_intersect() Function
    // array_intersect(arr1, arr2, arr3, ...) Function

    $num1 = [10, 20, 30, 60, 70, 80];
    $num2 = array(10, 20, 30, 40, 50, 90, 80);

    echo "<pre>". print_r(array_intersect($num1, $num2), "true") ."</pre>"; // 10 20 30 80
    echo "<br/>";

    echo "<pre>". print_r(array_intersect($num2, $num1), "true") ."</pre>"; // 10 20 30 80
    echo "<br/>";

    echo array_intersect($num1, $num2)[5];

    $col1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $col2 = array("a" => "red", "f" => "green", "d" => "orange");

    echo "<pre>". print_r(array_intersect($col1, $col2), "true") ."</pre>"; // red green
    echo "<br/>";

    echo "<pre>". print_r(array_intersect($col2, $col1), "true") ."</pre>"; // red green
    echo "<br/>";

    echo "<hr/>";

    // array_fill() Function
    // array_fill(index, number, value) Function

    echo "<pre>". print_r(array_fill(0, 5, "green"), "true") ."</pre>"; // 0 => green , ... , 4 => green
    echo "<br/>";

    echo "<pre>". print_r(array_fill(2, 5, "blue"), "true") ."</pre>"; //  2 => blue , ... , 6 => blue
    echo "<br/>";

    echo "<hr/>";

    // array_fill_keys() Function
    // array_fill_keys(keys, value) Function

    $keys = array("a", "b", "c", "d");

    echo "<pre>". print_r(array_fill_keys($keys, "pink"), "true") ."</pre>"; // a => pink, ...
    echo "<br/>";

    echo "<hr/>";
?>