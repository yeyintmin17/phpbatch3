<?php
    $keys = ["a" => "one", "b" => "two", "c" => "three", "d" => "four", "e" => "five"];
    $vals = ["f" => 10, "g" => "3"];

    function callback($val, $idx, $para){
        echo $val ." ". $idx ." ". $para ."<br/>";
    };

    // $res = array_walk($vals, "callback", "hello");
    // echo "<pre>". print_r($res, "h") ."</pre>";

    function test(){
        yield from [1, 2, "one"];
    }

    foreach(test() as $val) echo $val ."<br/>";
?>