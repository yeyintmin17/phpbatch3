<?php
    /* User Defined Function */
    // function name(){
    //     code to be executed
    // }

    /* Arguments Function */
    // (i) Single
    // (ii) Multi

    // function name(arg1){

    // }

    // function name(arg1, arg2){
        
    // }

    /* Default Argument Function */

    // function name($name="aung aung", $age=20){
    //     code to be executed
    // }

    // ------------------------------------------------------------------------

    function myfun(){
        echo "my name is mr.function <br/>";
    }
    
    myfun();
    myfun();

    echo "<br/>";

    function myfun1(){
        $num1 = 10;
        $num2 = 20;
        $cal = $num1 + $num2;
        echo $cal;
    }
    
    myfun1();

    echo "<hr/>";

    function singlefun($name){
        // echo "My name is $name";
        echo "My name is {$name}";
    }

    singlefun("Zaw Zaw");

    echo "<br/>";

    function multifun($name, $age){
        echo "My name is {$name} and I am ${age} years old.";
    }

    multifun("Aung Aung", 20);
    
    echo "<hr/>";

    function defaultfun($name = "Hla Hla"){
        echo "My name is {$name}. <br/>";
    }

    defaultfun(); // My name is Hla Hla.
    defaultfun("Aye Aye"); //  My name is Aye Aye.

    echo "<br/>";

    function defaultfun1($num1 = 10, $num2 = 20, $num3 = 30){
        $cal = $num1 + $num2 + $num3;
        echo $cal ."<br/>";
    }

    defaultfun1(); // 60
    defaultfun1(5 + 10 + 15); // 80
    defaultfun1(5, 10, 15); // 30

    echo "<hr/>";

    // function returnfun($num1){
    //     $cal = $num1 + 10;
    //     return $cal;
    // }

    function returnfun($num1){
        return $cal = $num1 + 10;
    }

    echo returnfun(50);

    echo "<br/>";

    function returnfun1($num1, $num2, $num3){
        $cal = $num1 + $num2 + $num3;
        return $cal;
    }

    echo returnfun1(20, 30, 40); // 90

    echo "<br/>";

    $task = "returnfun1";
    echo $task;
    echo "<br/>";

    echo $task(1, 2, 3);
    echo "<br/>";

    if(function_exists($task)){
        echo "Yes, your variable value is already in some kind of function";
    }else{
        echo "No, your variable value is already in some kind of function";
    }
?>