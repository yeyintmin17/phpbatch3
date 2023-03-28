<?php
    // array_chunk();
    // array_chunk(array, size, perserve_key);

    echo "array_chunk()";
    echo "<br/> <br/>";

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

    echo "array_combine()";
    echo "<br/> <br/>";

    $name = array("aung aung", "su su", "maung maung", "hla hla");
    $age = ["30", "25", "35", "40"];

    echo "<pre>". print_r(array_combine($name, $age), "true") ."</pre>";
    echo "<br/>";

    echo "<pre>". array_combine($name, $age)["aung aung"] ."</pre>"; // 30
    echo "<br/>";

    echo "<hr/>";

    // array_count_values() Function
    // array_count_values(array) Function

    echo "array_count_values()";
    echo "<br/> <br/>";

    // $car = ["toyota", "suzuki", "mazada", "force"];
    $car = ["toyota", "suzuki", "mazada", "force", "suzuki", "force", "force"];

    // $car = ["c1" => "toyota", "c2" => "suzuki", "c3" => "mazada", "c4" => "force", "c5" => "suzuki", "c6" => "force", "c7" => "force"];

    echo "<pre>". print_r(array_count_values($car), "true") ."</pre>";
    echo "<br/>";

    echo "<hr/>";

    // count() Function
    // count(array)

    echo "count()";
    echo "<br/> <br/>";

    $car = ["toyota", "suzuki", "mazada", "force", "suzuki", "force", "force"];

    echo "<pre>". print_r(count($car), "true") ."</pre>";
    echo "<br/>";

    echo "<hr/>";

    // array_diff() Function
    // array_diff(arr1, arr2, arr3, ...)
    // Notice we don't need to consider index or keyname

    echo "array_diff()";
    echo "<br/> <br/>";

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

    echo "array_diff_assoc()";
    echo "<br/> <br/>";

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

    echo "array_diff_key()";
    echo "<br/> <br/>";

    $col1 = array("a" => "red", "b" => "yellow", "c" => "blue", "d" => "green", "f" => "pink");
    $col2 = array("a" => "red", "b" => "green", "c" => "blue", "e" => "orange");

    echo "<pre>". print_r(array_diff_key($col1, $col2), "true") ."</pre>"; // green pink
    echo "<br/>";

    echo "<pre>". print_r(array_diff_key($col2, $col1), "true") ."</pre>"; // orange
    echo "<br/>";

    echo "<pre>". print_r(array_diff_key($colors2, $colors1), "true") ."</pre>";
    echo "<br/>";

    echo "<hr/>";

    // array_intersect() Function
    // array_intersect(arr1, arr2, arr3, ...) Function

    echo "array_intersect()";
    echo "<br/> <br/>";

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

    echo "array_fill()";
    echo "<br/> <br/>";

    echo "<pre>". print_r(array_fill(0, 5, "green"), "true") ."</pre>"; // 0 => green , ... , 4 => green
    echo "<br/>";

    echo "<pre>". print_r(array_fill(2, 5, "blue"), "true") ."</pre>"; //  2 => blue , ... , 6 => blue
    echo "<br/>";

    echo "<hr/>";

    // array_fill_keys() Function
    // array_fill_keys(keys, value) Function

    echo "array_fill_keys()";
    echo "<br/> <br/>";

    $keys = array("a", "b", "c", "d");

    echo "<pre>". print_r(array_fill_keys($keys, "pink"), "true") ."</pre>"; // a => pink, ... , d => pink
    echo "<br/>";

    echo "<hr/>";

    // array_filter() Function
    // array_filter(array, callback function)

    echo "array_filter()";
    echo "<br/> <br/>";

    $num = [1, 2, 3, 4, 3];

    function getodd($var){
        return ($var & 1);
    }

    echo "<pre>". print_r(array_filter($num, "getodd"), "true") ."</pre>"; // 1, 3, 3
    echo "<br/>";

    echo "<hr/>";

    // array_key_exists() Function
    // array_key_exists(key, arr)

    echo "array_key_exists()";
    echo "<br/> <br/>";

    $phones = ["mpt" => "ftth", "ooredoo" => "broadban"];

    if(array_key_exists("mpt", $phones)){
        echo "Key exists";
    }else{
        echo "Key does not exist";
    }

    echo "<hr/>";

    // array_keys() Function
    // array_keys(array, value, strict)

    echo "array_keys()";
    echo "<br/> <br/>";

    $phones = ["mpt" => "ftth", "ooredoo" => "broadban", "ais" => "wifi"];

    echo "<pre>". print_r(array_keys($phones), "true") ."</pre>";
    echo "<br/>";

    echo array_keys($phones)[0]; // mpt
    echo "<br/>";
    
    echo "<pre>". print_r(array_keys($phones, "broadban"), "true") ."</pre>";
    echo "<br/>";

    echo array_keys($phones, "broadban")[0]; // ooredoo
    echo "<br/>";

    $numbers = [10, 20, 30, "10"];

    echo "<pre>". print_r(array_keys($numbers, "10"), "true)") ."</pre>";
    echo "<br/>";

    echo "<pre>". print_r(array_keys($numbers, 10, true), "true)") ."</pre>";
    echo "<br/>";

    echo "<pre>". print_r(array_keys($numbers, "10", true), "true)") ."</pre>";
    echo "<br/>";

    echo "<pre>". print_r(array_keys($numbers, 10, false), "true)") ."</pre>";
    echo "<br/>";

    echo "<hr/>";

    // array_map() Function
    // array_map(callback function, arr1, arr2, arr3, ...)

    echo "array_map()";
    echo "<br/> <br/>";

    $males = ["Tun Tun", "Zaw Zaw", "Aung Aung", "Kyaw Kyaw", "Thura"];
    $females = array("Hla Hla", "Mya Mya", "Su Su", "Nu Nu", "Yu Yu");

    function genderone($name){
        return ("Mr. ". $name);
    }

    function gendertwo($male, $female){
        return ($male ." & ". $female);
    }

    echo "<pre>". print_r(array_map("genderone", $males), "true)") ."</pre>";
    echo "<br/>";

    echo "<pre>". print_r(array_map("gendertwo", $males, $females), "true)") ."</pre>";
    echo "<br/>";

    echo "<hr/>";

    // array_merge() Function
    // array_merge(arr1, arr2, arr3, ...)

    echo "array_merge()";
    echo "<br/> <br/>";

    $arr1 = ["red", "blue"];
    $arr2 = array("blue", "yellow");
    $arr3 = ["orange", "violet"];

    // $arr1 = ["a" => "red", "b" => "blue"];
    // $arr2 = array("a" => "blue", "d" => "yellow");

    echo "<pre>". print_r(array_merge($arr1, $arr2), "true)") ."</pre>";
    echo "<br/>";

    echo "<pre>". print_r(array_merge($arr1, $arr2, $arr3), "true)") ."</pre>";
    echo "<br/>";

    echo "<hr/>";

    // array_multisort() Function
    // array_multisort(array)

    echo "array_multisort()";
    echo "<br/> <br/>";

    $animals = ["Dog", "Cat", "Mouse", "Lion", "Zebra", "Rat", "Bear", "Cow"];

    array_multisort($animals);

    echo "<pre>". print_r($animals, "true)") ."</pre>"; // a to z
    echo "<br/>";

    $numbers = array(10, 50, 80, 90, 35, 100, 130, 250, 70);

    array_multisort($numbers);

    echo "<pre>". print_r($numbers, "true)") ."</pre>"; // 0 to 10
    echo "<br/>";

    $numbers = array(10, 50, "80", 90, 35, "100", 130, "250", 70);

    array_multisort($numbers);

    echo "<pre>". print_r($numbers, "true)") ."</pre>"; // 0 to 10
    echo "<br/>";

    echo "<hr/>";

    // sort() Function
    // sort(array, start, length, preserve)

    echo "sort()";
    echo "<br/> <br/>";

    $cars = ["volvo", "bmw", "toyota", "mazada", "suzuki"];

    sort($cars);

    echo "<pre>". print_r($cars, "true)") ."</pre>"; // a to z
    echo "<br/>";

    $numbers = array(10, 50, "80", 90, 35, "100", 130, "250", 70);

    sort($numbers);

    echo "<pre>". print_r($numbers, "true)") ."</pre>"; // 0 to 10
    echo "<br/>";

    echo "<hr/>";

    // array_pad() Function
    // array_pad(array, size, value)

    echo "array_pad()";
    echo "<br/> <br/>";

    $colors = ["red", "green"];

    echo "<pre>". print_r(array_pad($colors, 5, "blue"), "true)") ."</pre>"; 
    echo "<br/>";

    echo "<hr/>";

    // array_pop() Function
    // array_pop(array)

    echo "array_pop()";
    echo "<br/> <br/>";

    $colors = ["red", "green", "blue"];
    array_pop($colors);

    echo "<pre>". print_r($colors, "true)") ."</pre>"; // red green
    echo "<br/>";

    echo "<hr/>";

    // array_reduce() Function
    // array_reduce(array, calbackfunction, initial)

    echo "array_reduce()";
    echo "<br/> <br/>";

    $num = [10, "20", 30];

    function calfun($total, $val){
        echo $total ." ". $val ."<br/>";
        return $total += $val;
    }

    echo "<pre>". print_r(array_reduce($num, "calfun", 0), "true)") ."</pre>"; // 60
    echo "<br/>";

    echo "<hr/>";

    // array_reverse() Function
    // array_reverse(array)

    echo "array_reverse()";
    echo "<br/> <br/>";

    $arr = ["a", "b", "g", "d", "e"];

    echo "<pre>". print_r(array_reverse($arr), "true)") ."</pre>";
    echo "<br/>";
    
    $arr = ["a" => "red", "b" => "green", "g" => "violet", "c" => "blue"];

    echo "<pre>". print_r(array_reverse($arr), "true)") ."</pre>";
    echo "<br/>";

    echo "<hr/>";

    // array_search() Function
    // array_search(value, array)

    echo "array_search()";
    echo "<br/> <br/>";

    $arr = ["a", "b", "g", "d", "e"];

    echo "<pre>". print_r(array_search("d", $arr), "true)") ."</pre>"; // 3
    echo "<br/>";

    $arr = ["a" => "red", "b" => "green", "g" => "violet", "c" => "blue"];

    echo "<pre>". print_r(array_search("green", $arr), "true)") ."</pre>"; // b
    echo "<br/>";

    echo "<hr/>";

    // array_shift() Function
    // array_shift(array)

    echo "array_shift()";
    echo "<br/> <br/>";

    $colors = array("red", "green", "blue");
    array_shift($colors);

    echo "<pre>". print_r($colors, "true)") ."</pre>"; // green blue
    echo "<br/>";

    $colors = ["a" => "red", "b" => "green", "g" => "violet", "c" => "blue"];
    array_shift($colors);
    
    echo "<pre>". print_r($colors, "true)") ."</pre>"; // "b" => "green", "g" => "violet", "c" => "blue"
    echo "<br/>";

    echo "<hr/>";

    // array_unshift() Function
    // array_unshift(array, val1, val2, val3, ...)

    echo "array_unshift()";
    echo "<br/> <br/>";

    $colors = array("red", "green", "blue");
    array_unshift($colors, "silver", "violet");

    echo "<pre>". print_r($colors, "true)") ."</pre>";
    echo "<br/>";

    $colors = ["0" => "red", "1" => "green", "2" => "violet", "3" => "blue"]; 
    array_unshift($colors, "silver");

    echo "<pre>". print_r($colors, "true)") ."</pre>";
    echo "<br/>";

    $colors = ["a" => "red", "b" => "green", "g" => "violet", "c" => "blue"];
    array_unshift($colors, "silver");
    
    echo "<pre>". print_r($colors, "true)") ."</pre>";
    echo "<br/>";

    echo "<hr/>";

    // array_push() Function
    // array_push(array, val1, val2, val3, ...)

    echo "array_push()";
    echo "<br/> <br/>";

    $colors = array("red", "green", "blue");
    array_push($colors, "silver", "violet");

    echo "<pre>". print_r($colors, "true)") ."</pre>";
    echo "<br/>";

    $colors = ["0" => "red", "1" => "green", "2" => "violet", "3" => "blue"]; 
    array_push($colors, "silver");

    echo "<pre>". print_r($colors, "true)") ."</pre>";
    echo "<br/>";

    $colors = ["a" => "red", "b" => "green", "g" => "violet", "c" => "blue"];
    array_push($colors, "silver", "orange");
    
    echo "<pre>". print_r($colors, "true)") ."</pre>";
    echo "<br/>";

    echo "<hr/>";
    
    // array_slice() Function
    // array_slice(array, start, length, preserve)

    echo "array_slice()";
    echo "<br/> <br/>";

    $colors = array("red", "green", "blue", "yellow", "black");

    echo "<pre>". print_r(array_slice($colors, 0), "true") ."</pre>"; // red to black
    echo "<br/>";

    echo "<pre>". print_r(array_slice($colors, 2), "true") ."</pre>"; //  blue yellow black
    echo "<br/>";

    echo "<pre>". print_r(array_slice($colors, -1), "true") ."</pre>"; //  black
    echo "<br/>";

    echo "<pre>". print_r(array_slice($colors, -2), "true") ."</pre>"; //  yellow black
    echo "<br/>";

    echo "<pre>". print_r(array_slice($colors, -5), "true") ."</pre>"; //  red to black
    echo "<br/>";

    echo "<pre>". print_r(array_slice($colors, 0, 2), "true") ."</pre>"; //  red green
    echo "<br/>";

    echo "<pre>". print_r(array_slice($colors, 2, 2), "true") ."</pre>"; //  blue yellow
    echo "<br/>";

    echo "<pre>". print_r(array_slice($colors, 2, 5), "true") ."</pre>"; //  blue yellow black
    echo "<br/>";

    echo "<pre>". print_r(array_slice($colors, 2, 5, true), "true") ."</pre>"; //  2. blue, 3. yellow, 4. black
    echo "<br/>";

    echo "<pre>". print_r(array_slice($colors, 2, 5, false), "true") ."</pre>"; // 0. blue, 1. yellow, 2. black
    echo "<br/>";

    echo "<pre>". print_r(array_slice($colors, -3, -1, false), "true") ."</pre>"; // 0. blue, 1. yellow, 2. black
    echo "<br/>";

    echo "<hr/>";

    // array_splice() Function
    // array_splice(array1, start, length, array2)

    echo "array_splice()";
    echo "<br/> <br/>";

    $colors = array("red", "green", "blue", "yellow", "black");
    
    // echo "<pre>". print_r(array_splice($colors, 2), "true") ."</pre>"; // blue yelllow black
    // echo "<br/>";

    // echo "<pre>". print_r(array_splice($colors, 2, 1), "true") ."</pre>"; // blue
    // echo "<br/>";

    // echo "<pre>". print_r(array_splice($colors, 2, 3), "true") ."</pre>"; // blue yelllow black
    // echo "<br/>";

    // echo "<pre>". print_r(array_splice($colors, 2, -1), "true") ."</pre>"; // blue yelllow
    // echo "<br/>";

    echo "<pre>". print_r(array_splice($colors, 0, -4), "true") ."</pre>"; // red
    echo "<br/>";

    echo "<hr/>";

    $males = ["aung aung", "maung maung", "kyaw kyaw", "zaw zaw", "naung naung"];
    $females = ["su su", "yu yu", "nu nu"];

    // $males = ["p1" => "aung", "p2" => "maung", "p3" => "kyaw", "p4" => "zaw", "p5" => "naung"];
    // $females = ["p6" => "su", "p7" => "yu", "p8" => "nu"];

    // array_splice($males, 0, 2, $females);
    // echo "<pre>". print_r($males, "true") ."</pre>"; // susu yuyu nunu kyawkyaw zawzaw naungnaung

    // array_splice($males, 0, 3, $females);
    // echo "<pre>". print_r($males, "true") ."</pre>"; // susu yuyu nunu zawzaw naungnaung

    array_splice($males, 1, 3, $females);
    echo "<pre>". print_r($males, "true") ."</pre>"; // aung aung susu yuyu nunu naungnaung

    echo "<hr/>";

    // array_sum() Function
    // array_sum(array)

    echo "array_sum()";
    echo "<br/> <br/>";

    $nums = [10, 20, 30, 40, 50];
    echo "<pre>". print_r(array_sum($nums), "true") ."</pre>"; // 150

    $nums = [10, 20, 30, "40", -50];
    echo "<pre>". print_r(array_sum($nums), "true") ."</pre>"; // 50

    $nums = ["a" => 10.2, "b" => 20.3, "c" => 30.3];
    echo "<pre>". print_r(array_sum($nums), "true") ."</pre>"; // 60.8

    echo "<hr/>";

    // array_unique() Function
    // array_unique(array)

    echo "array_unique()";
    echo "<br/> <br/>";

    $num = [10, 20, 30, 50, 10, 30, 60, 70, 80, 10];
    echo "<pre>". print_r(array_unique($num), "true") ."</pre>"; // 10 20 30 50 60 70 80

    $colors = array("a" => "red", "b" => "green", "c" => "blue", "d" => "red", "e" => "blue");
    echo "<pre>". print_r(array_unique($colors), "true") ."</pre>"; // "a" => "red", "b" => "green", "c" => "blue"

    echo "<hr/>";

    // array_values() Function
    // array_values(array)

    echo "array_values()";
    echo "<br/> <br/>";

    $colors = array("a" => "red", "b" => "green", "c" => "blue", "d" => "red", "e" => "blue");
    echo "<pre>". print_r(array_values($colors), "true") ."</pre>";

    echo "<hr/>";

    // array_walk() Function
    // array_walk(array,callback fun, para)

    echo "array_walk()";
    echo "<br/> <br/>";

    $colors = array("a" => "red", "b" => "green", "c" => "blue", "d" => "red", "e" => "blue");
    
    function myfunone($val, $key){
        echo "Key is = $key and value is $val <br/>";
    }

    array_walk($colors, "myfunone");

    echo "<br/><br/>";

    $colors = array("a" => "red", "b" => "green", "c" => "blue", "d" => "red", "e" => "blue");

    function myfuntwo($val, $key, $p){
        echo "Key is = $key and value is $val $p <br/>";
    }

    array_walk($colors, "myfuntwo", "color");

    echo "<br/><br/>";

    $colors = array("a" => "red", "b" => "green", "c" => "blue", "d" => "red", "e" => "blue");

    function myfunthree(&$val){
        $val = "black";
    }

    array_walk($colors, "myfunthree");

    echo "<pre>". print_r($colors, "true") ."</pre>";

    echo "<hr/>";

    // compact() Function
    // compact(var1, var2, var3, ...)

    echo "compact()";
    echo "<br/> <br/>";

    $name = "Aung";
    $age = "25";
    $city = "Yangon";

    $result = compact("name", "age", "city");
    echo "<pre>". print_r($result, "true") ."</pre>";

    echo "<hr/>";

    // current() / pos() / end() / next() / prev() / reset()

    echo "current() / pos() / end() / next() / prev() / reset()";
    echo "<br/> <br/>";

    $students = array("aung aung", "maung maung", "zaw zaw", "tun tun", "kyaw kyaw");

    // echo "<pre>". print_r(current($students), "true") ."</pre>"; // aung aung 
    // echo "<pre>". print_r(pos($students), "true") ."</pre>"; // aung aung
    // echo "<pre>". print_r(end($students), "true") ."</pre>"; // kyaw kyaw

    // echo "<pre>". print_r(current($students), "true") ."</pre>"; // aung aung 
    // echo "<pre>". print_r(next($students), "true") ."</pre>"; // maung maung 
    // echo "<pre>". print_r(end($students), "true") ."</pre>"; // kyaw kyaw
    // echo "<pre>". print_r(prev($students), "true") ."</pre>"; // tun tun

    // echo "<pre>". print_r(current($students), "true") ."</pre>"; // aung aung 
    // echo "<pre>". print_r(next($students), "true") ."</pre>"; // maung maung 
    // echo "<pre>". print_r(prev($students), "true") ."</pre>"; // aung aung 
    // echo "<pre>". print_r(next($students), "true") ."</pre>"; // maung maung 
    // echo "<pre>". print_r(reset($students), "true") ."</pre>"; // aung aung 
    // echo "<pre>". print_r(current($students), "true") ."</pre>"; // aung aung 

    echo "<hr/>";

    // range() Function
    // range(low, high, step)

    echo "range()";
    echo "<br/> <br/>";

    $num1 = range(0, 5);
    echo "<pre>". print_r($num1, "true") ."</pre>"; // 0 to 5 by array

    $num2 = range(0, 50, 10);
    echo "<pre>". print_r($num2, "true") ."</pre>"; // 0 to 50 by array

    $char= range("a", "k");
    echo "<pre>". print_r($char, "true") ."</pre>"; // a to k by array

    $char= range("k", "g");
    echo "<pre>". print_r($char, "true") ."</pre>"; // k to g by array

    echo "<hr/>";

    // sizeof() Function
    // sizeof(arary)

    echo "sizeof()";
    echo "<br/> <br/>";

    $colors = ["red", "green", "blue", "pink"];
    echo "<pre>". print_r(sizeof($colors), "true") ."</pre>"; // 4 by string (int)
    
    echo var_dump(sizeof($colors));

    echo "<hr/>";
?>