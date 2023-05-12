<?php
    ini_set("display_errors", 1);

    // not echo, from system err
    function mycolor($color){
        if($color !== "red"){
            throw new Exception("I hate $color color");
        }

        return "Yeah! my fav color is $color";
    }

    // echo mycolor("blue");

    echo "<hr/>";

    function mynum($base, $power){
        if($power > 3){
            throw new Exception("Power is not allowed over 3");
        }

        $result = pow($base, $power);
        return $result;
    }

    // echo mynum(2, 4);

    echo "<hr/>";

    // try ... catch statement

    // try{
    //     code to be executed
    // }catch(Exception $e){
    //     coe to be exception is caught
    // }

    function mycolour($col){
        if($col !== "red"){
            throw new Exception("I hate $col color. <br/>");
        }

        return "Yeah! my fav color is $col <br/>";
    }

    // try{
    //     echo mycolour("blue");
    // }catch(Exception $e){
    //     echo "You should not try with this color <br/>";
    // }
    
    try{
        echo mycolour("blue");
    }catch(Exception $e){
        echo $e->getMessage();
    }

    echo "test <br/>";

    echo "<hr/>";

    function mynumber($base, $power){
        if($power > 5){
            throw new Exception("Power is not allowed over 4");
        }

        $result = pow($base, $power);
        return $result;
    }

    try{
        echo mynumber(3, 6);
    }catch(Exception $e){
        echo "You should not over. ". $e->getMessage();
    }

    echo "<hr/>";

    // => try ... catch ... finally Statement

    // try{

    // }catch(Exception $e){

    // }finally{
    //     code that always runs regardless of whether an exception was catch or not
    // }

    function myval($base, $power){
        if($power > 5){
            throw new Exception("Power is not allowed over 4 <br/>");
        }

        $result = pow($base, $power);
        return $result;
    }

    // try{
    //     echo myval(3, 6) ."<br/>";
    // }catch(Exception $e){
    //     echo "You should not over. ". $e->getMessage();
    // }finally{
    //     echo "Hay there!! I am joker";
    // }

    try{
        echo myval(3, 6) ."<br/>";
    }finally{
        echo "Hay there!! I am joker";
    }

    echo "<hr/>";
?>