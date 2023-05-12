<?php
    // to transform from one data to another, use JSON
    // previously use xml

    // json_encode(array);

    // json_decode(array);
    // json_decode(array, true);
    
    $colors = ["red", "blue", "green"];
    var_dump($colors);
    echo "<pre>". print_r($colors, true) ."<pre>";

    echo "<br/> <br/>";

    $colorsen = json_encode($colors);
    var_dump($colorsen);
    echo "<pre>". print_r($colorsen, true) ."<pre>";

    echo "<br/> <br/>";

    $colorsde = json_decode($colorsen);
    var_dump($colorsde);
    echo "<pre>". print_r($colorsde, true) ."<pre>";

    echo "<hr/>";

    $students = ["name" => "aung aung", "age" => 25, "city" => "yangon"];
    var_dump($students);
    echo "<pre>". print_r($students, true) ."<pre>";

    echo "<br/> <br/>";

    $studentsen = json_encode($students);
    var_dump($studentsen);
    echo "<pre>". print_r($studentsen, true) ."<pre>";

    // can't print
    // echo $studentsen["name"];
    // echo $studentsen["age"];
    // echo $studentsen["city"];

    echo "<br/> <br/>";

    $studentsde = json_decode($studentsen);
    var_dump($studentsde);
    echo "<pre>". print_r($studentsde, true) ."<pre>";

    echo "<hr/>";

    # Decode By Single

    $students = '{ 
        "name": "aung aung", 
        "age": 25, 
        "city": "yangon" 
    }';

    $studentsde = json_decode($students);
    var_dump($studentsde);
    echo "<pre>". print_r($studentsde, true) ."<pre>";

    // can't print
    // echo $studentsde["name"] ."<br/>";
    // echo $studentsde["age"] ."<br/>";
    // echo $studentsde["city"] ."<br/>";

    // can print ( -> object operator )
    echo $studentsde->name ."<br/>";
    echo $studentsde->age ."<br/>";
    echo $studentsde->city ."<br/>";

    foreach($studentsde as $key => $value){
        echo $key ." is ". $value ."<br/>";
    }

    echo "<hr/>";

    # Decode By Multi

    $studentsde = json_decode($students, true);
    var_dump($studentsde);
    echo "<pre>". print_r($studentsde, true) ."<pre>";

    echo $studentsde["name"] ."<br/>";
    echo $studentsde["age"] ."<br/>";
    echo $studentsde["city"] ."<br/>";

    // can't print
    // echo $studentsde->name ."<br/>";
    // echo $studentsde->age ."<br/>";
    // echo $studentsde->city ."<br/>";
?>