<?php
    // PHP Loops
    
    // for, foreach, while, do while

    $colorones = ["red", "green", "blue", "white", "black", "grey", "pink"]; // indexed array

    var_dump($colorones);
    echo "<br/>";

    echo count($colorones);
    echo "<br/>";

    $coloroneskey = array_keys($colorones);
    var_dump($coloroneskey);

    echo "<br/>";
    echo($coloroneskey);

    echo "<br/> <hr/> <br/>";

    // for loop
    // for(statement1; statement2; statement3){
    //     code to executed
    // }

    for($i = 0; $i < count($colorones); $i++){
        // echo "$i";
        // echo "<br/>";

        // echo "This is indexed array or manual array by for loop = index key is ". $i ." and value is ". $colorones[$i];
        // echo "<br/>";

        echo "This is indexed array or manual array by for loop = index key is ". $coloroneskey[$i] ." and value is ". $colorones[$coloroneskey[$i]];
        echo "<br/>";
    }

    echo "<br/>";
    echo $i;

    echo "<br/> <hr/> <br/>";

    $posts = [
        "postone" => "this is news post one",
        "posttwo" => "this is news post two",
        "postthree" => "this is news post three",
        "postfour" => "this is news post four"
    ];

    $postskey = array_keys($posts);
    var_dump($postskey);
    echo "<br/>";

    for($x = 0; $x < count($postskey); $x++){
        // echo "$x";
        // echo "<br/>";

        echo "This is associative array by for loop = index key is ". $postskey[$x] ." and value is ". $posts[$postskey[$x]];
        echo "<br//>";
    }

    echo "<br/>";
    echo $x;

    echo "<br/> <hr/> <br/>";

    $employees = [
        ["name" => "Aung Aung", "gender" => "Male"],
        ["name" => "Su Su", "gender" => "Female"],
        ["name" => "Nu Nu", "gender" => "Female"],
        ["name" => "Kyaw Kyaw", "gender" => "Male"],
        ["name" => "Tun Tun", "gender" => "Male"]
    ];

    // $employees = [
    //     "person1" => ["name" => "Aung Aung", "gender" => "Male"],
    //     "person2" => ["name" => "Su Su", "gender" => "Female"],
    //     "person3" => ["name" => "Nu Nu", "gender" => "Female"],
    //     "person4" => ["name" => "Kyaw Kyaw", "gender" => "Male"],
    //     "person5" => ["name" => "Tun Tun", "gender" => "Male"]
    // ];

    $employeeskey = array_keys($employees);
    // var_dump($employeeskey);
    echo "<br/>";

    // remove cover first array (multi array)
    for($k = 0; $k < count($employees); $k++){
        // var_dump($employees[$employeeskey[$k]]);
        // echo "<br/>";

        $newkey = array_keys($employees[$employeeskey[$k]]);
        // var_dump($newkey);
        // echo "<br/>";

        for($j = 0; $j < count($newkey); $j++){
            // var_dump($employees[$k][$newkey[$j]]);
            // echo "<br/>";

            echo "This is multidimensional array by forloop = key is ". $newkey[$j] . " and value is". $employees[$k][$newkey[$j]];
            echo "<br/>";
        }
    }
?>