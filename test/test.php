<?php
    $nums = [
        "num1" => "one", 
        "num2" => "two", 
        "num3" => "three"
    ];

    function test($base, $pow){
        if($pow > 4) throw new Exception("Base is not over 4 <br/>");

        return pow($base, $pow) ."<br/>";
    }

    try{
        echo test(3, 5);
    }catch(Exception $e){
        echo $e->getMessage() ."<br/>";
    }finally{
        echo "finally <br/>";
    }
    echo "hi";