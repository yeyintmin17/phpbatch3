<?php

    $str = "hello wordd";

    echo chunk_split($str, 4, " - ") ."<br/>";
    echo substr($str, 6, 4) ."<br/>";
    echo substr_replace($str, "mynamar", 2, 3) ."<br/>";
    echo trim($str, "hello") ."<br/>";
    echo str_repeat($str, 3) ."<br/>";
    echo $str ."<br/>";