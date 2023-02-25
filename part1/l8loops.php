<?php
    // PHP Loops
    
    // for, foreach, while, do...while

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

    echo $i;
    echo "<br/> <br/> <br/>";

    // foreach(arr as key => val){
    //     code to executed
    // }

    foreach($colorones as $colorone){
        echo "This is indexed array or manual array by foreach loop = ". $colorone ."<br/>";
    }

    echo "<br/>";

    foreach($colorones as $key => $colorone){
        echo "This is indexed array or manual array by foreach loop = index key is ". $key ." and value is ". $colorone ."<br/>";
    }

    echo "<br/> <br/> <br/>";

    $x = 0;
    while($x < count($colorones)){
        // echo $colorones[$x] ."<br/>";

        echo "This is indexed array or manual array by while loop = index key is ". $coloroneskey[$x] ." and value is ". $colorones[$coloroneskey[$x]] ."<br/>";

        $x++;
    }

    echo "<br/> <br/> <br/>";

    // do...while loop
    // do{
    //     code to be executed
    //     in or dec
    // }while(condition is true)

    /* The diff between while loop & do while loop */

    // $y = false;

    // while($y){
    //     echo "This is $y";
    // }

    // do{
    //     echo "This is $y";
    // }while($y);

    echo "<br/>";

    $y = 0;

    do{
        // echo "This is indexed array or manual array by do...while loop = index key is ". $y ." and value is ". $colorones[$y] ."<br/>";

        echo "This is indexed array or manual array by do...while loop = index key is ". $coloroneskey[$y] ." and value is ". $colorones[$coloroneskey[$y]] ."<br/>";

        $y++;
    }while($y < count($colorones));
 
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

    echo $x;
    echo "<br/> <br/> <br/>";

    foreach($posts as $key => $post){
        echo "This is associative array by foreach loop = index key is ". $key ." and value is ". $post ."<br/>";
    }

    echo "<br/> <br/> <br/>";

    $x = 0;
    while($x < count($posts)){
        echo "This is associative array by while loop = index key is ". $postskey[$x] ." and value is ". $posts[$postskey[$x]] ."<br/>";

        $x++;
    }

    echo "<br/> <br/> <br/>";

    $y = 0;
    do{
        echo "This is associative array by do...while loop = index key is ". $postskey[$y] ." and value is ". $posts[$postskey[$y]] ."<br/>";

        $y++;
    }while($y < count($posts));

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
    var_dump($employeeskey);
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

    echo "<br/> <br/> <br/>";

    foreach($employees as $index => $employee){
        // echo $index ." ". $employee ."<br/>";

        foreach($employee as $key => $value){
            echo "This is multidimensional array by foreach loop = key is ". $key ." and value is ". $value ."<br/>";
        }
    }

    echo "<br/> <br/> <br/>";

    $x = 0;
    while($x < count($employees)){
        // echo $employees[$x] ."<br/>";

        $newkey = array_keys($employees[$employeeskey[$x]]);
        
        $y = 0;
        while($y < count($newkey)){
            echo "This is multidimensional array by while loop = key is ". $newkey[$y] ." and value is ". $employees[$x][$newkey[$y]] ."<br/>";
            $y++;
        }

        $x++;
    }

    echo "<br/> <br/> <br/>";

    $g = 0;

    do{
        $newkey = array_keys($employees[$g]);

        $h = 0;
        do{
            echo "This is multidimensional array by do...while loop = key is ". $newkey[$h] ." and value is ". $employees[$g][$newkey[$h]] ."<br/>";
            $h++;
        }while($h < count($newkey));

        $g++;
    }while($g < count($employees));
?>