<?php
    // Arrays
    // (i) Indexed Array (Manual Array)
    // (ii) Associative Array
    // (iii) Multidimensional Array

    // (i) Indexed Array (Manual Array)

    $names = array("aung aung", "maung maung", "zaw zaw", "kyaw kyaw", "tun tun");
    echo $names;
    echo "<br/>";

    print $names;
    echo "<br/>";

    print_r($names, false);
    echo "<br/>";

    echo count($names);

    echo "<br/> <hr/> <br/>";

    $colors = ["red", "green", "blue", "white", "black", "pink"];
    echo $colors;
    echo "<br/>";

    echo count($colors);
    echo "<br/>";

    echo "<pre>". print_r($colors, "false") ."</pre>";
    echo "<br/>";

    var_dump($colors);

    $colors[6] = "grey";
    $colors[7] = "stone";
    $colors[8] = "skuyblue";

    $colors[0] = "violet";

    echo "<pre>". print_r($colors, "true") ."</pre>";
    echo "My fav color is". $colors[3];
    
    echo "<br/> <hr/> <br/>";

    // (ii) Associative Array

    $news = array("pone"=>"this is post one", "ptwo"=>"this is post two", "pthree"=>"this is post three");

    var_dump($news);
    echo "<br/>";

    $medias = [
        "pone"=>"this is post one", 
        "ptwo"=>"this is post two", 
        "pthree"=>"this is post three"
    ];

    var_dump($medias);
    echo "<br/>";

    $medias["pfour"] = "this is post four";
    $medias["pfive"] = "this is post five";

    echo "<pre>".print_r($medias, "true")."</pre>";
    echo "I like this post, so post title is". $medias["pthree"];

    echo "<br/> <hr/> <br/>";

    // (iii) Multidimensional Array - Arrays containings one or more Arrays

    $paints = array(
        array("red", "green", "blue", "white"),
        array("pen", "pencil", "ruler"),
        array("paper", "plastic")
    );

    $paints = [
        ["red", "green", "blue", "white"],
        ["pen", "pencil", "ruler"],
        ["paper", "plastic"]
    ];

    echo "<pre>". print_r($paints, "true") ."</pre>";
    echo "<br/>";
    echo "<br/>";

    echo $paints[0][0];
    echo "<br/>";

    echo $paints[1][1];
    echo "<br/>";

    echo $paints[2][1];
    echo "<br/>";

    // $persons = array(
    //     array("name" => "Aung Aung", "age" => 20),
    //     array("name" => "Su Su", "age" => 30),
    //     array("name" => "Yin Yin", "age" => 25)
    // );

    $persons = [
        ["name" => "Aung Aung", "age" => 20],
        ["name" => "Su Su", "age" => 30],
        ["name" => "Yin Yin", "age" => 25]
    ];

    echo "<pre>". print_r($persons, "false") ."</pre>";
    echo "<br/>";
    echo "<br/>";

    echo $persons[0]["name"]; // Aung Aung
    echo "<br/>";

    echo $persons[1]["age"]; // 20
    echo "<br/>";

    echo $persons[2]["name"]; // Yin Yin
    echo "<br/>";

    echo $persons[2]["age"]; // 25
    echo "<br/>";

    echo "<br/> <hr/> <br/>";
?>