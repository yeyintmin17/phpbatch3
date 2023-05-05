<?php
    // strlen() Function
    // strlen(string)

    echo "strlen(string)";
    echo "<br/><br/>";

    $words = "Save Myanmar";
    echo strlen($words); // 12

    echo "<hr/>";

    // str_word_count() Function
    // str_word_count(string, return)

    // return
    // 0 > retrun a words counted number (default)
    // 1 > an array
    // 2 > an array with an ordering idx

    echo "str_word_count(string, return)";
    echo "<br/><br/>";

    $words = "Save Myanmar Country";

    echo str_word_count($words); // 3
    echo "<br/>";

    echo str_word_count($words, 0); // 3
    echo "<br/>";

    echo "<pre>". print_r(str_word_count($words, 1), "true") ."</pre>"; // [0] => Save [1] => Myanmar [2] => Country
    echo "<br/>";

    echo "<pre>". print_r(str_word_count($words, 2), "true") ."</pre>"; // [0] => Save [5] => Myanmar [13] => Country

    echo "<hr/>";

    // ucwords() Function
    // ucwords(string, delimiters)

    echo "ucwords(string, delimiters)";
    echo "<br/><br/>";

    $words = "myanmar country";
    echo ucwords($words); // Myanmar Country
    echo "<br/>";
    
    $words = "welcome to my,country";
    echo ucwords($words, ","); // Welcome to my,Country

    echo "<hr/>";

    // ucfirst() Function
    // ucfirst(string)

    echo "ucfirst(string)";
    echo "<br/><br/>";

    $words = "welcome to my country";
    echo ucfirst($words); // Welcome to my country

    echo "<hr/>";

    // lcfirst() Function
    // lcfirst(string)

    echo "lcfirst(string)";
    echo "<br/><br/>";

    $words = "Welcome To My Country";
    echo lcfirst($words); // welcome To My Country

    echo "<hr/>";

    // strtoupper() Function
    // strtoupper(string)

    echo "strtoupper(string)";
    echo "<br/><br/>";

    $words = "welcome to my country";
    echo strtoupper($words); // WELCOME TO MY COUNTRY

    echo "<hr/>";

    // strtolower() Function
    // strtolower(string)

    echo "strtolower(string)";
    echo "<br/><br/>";

    $words = "WELCOME to My Country";
    echo strtolower($words); // welcome to my country

    echo "<hr/>";

    // chunk_split() Function
    // chunk_split(string, length, end)

    echo "chunk_split(string, length, end)";
    echo "<br/><br/>";

    $words = "Myanmar Country";

    echo chunk_split($words, 1, "."); // M.y.a.n.m.a.r. .C.o.u.n.t.r.y.
    echo "<br/>";

    echo chunk_split($words, 3, "-"); // Mya-nma-r C-oun-try-

    echo "<hr/>";

    // substr() Function
    // substr(string, length, end)

    echo "substr(string, length, end)";
    echo "<br/><br/>";

    $words = "Welcome Myanmar";

    echo substr($words, 0); // Welcome Myanmar
    echo "<br/>";

    echo substr($words, 8); // Myanmar
    echo "<br/>";
    
    echo substr($words, 0, 7); // Welcome
    echo "<br/>";

    echo substr($words, 0, 9); // Myanmar M

    echo "<hr/>";

    // substr_replace() Function
    // substr_replace(string, replacement, start, length)

    echo "substr_replace(string, replacement, start, length)";
    echo "<br/><br/>";

    $words = "Welcome Myanmar";

    echo substr_replace($words, "Hello", 0); // Hello
    echo "<br/>";

    echo substr_replace($words, "Thailand", 8); // Welcome Thailand
    echo "<br/>";

    echo substr_replace($words, "Thailand", 8); // Welcome Thailand
    echo "<br/>";

    echo substr_replace($words, "Hello", 0, 0); // HelloWelcome Myanmar
    echo "<br/>";

    echo substr_replace($words, "Hello", 0, 7); // Hello Myannmar
    echo "<br/>";

    echo "<hr/>";

    // str_replace() Function
    // str_replace(find, replace, string) 

    echo "str_replace(find, replace, string)";
    echo "<br/><br/>";

    echo str_replace("Myanmar", "CRPH", "Save Myanmar"); // Save CRPH

    echo "<hr/>";

    // trim() Function
    // trim(string, charlist)

    echo "trim(string, charlist)";
    echo "<br/><br/>";

    $words = "Welcome to My Country";

    echo trim($words, "Wel"); // come to My Country
    echo "<br/>";

    echo trim($words, "try"); // Welcome to My Coun

    echo "<hr/>";

    // explode() Function
    // explode(separator, string, limit)

    echo "explode(separator, string, limit)";
    echo "<br/><br/>";

    $words = "Welcome to My Country";

    echo "<pre>". print_r(explode(" ", $words), "true") ."</pre>";
    echo "<pre>". print_r(explode(" ", $words, 0), "true") ."</pre>";
    echo "<pre>". print_r(explode(" ", $words, 2), "true") ."</pre>";
    echo "<pre>". print_r(explode(" ", $words, 3), "true") ."</pre>";

    echo "<hr/>";

    // implode() Function
    // implode(separator, array)

    echo "implode(separator, array)";
    echo "<br/><br/>";

    $words = ["Welcome", "to", "My", "Country"];

    echo "<pre>". print_r(implode(" ", $words), "true") ."</pre>"; // Welcome to My Coutnry
    echo "<br/>";

    echo "<pre>". print_r(implode("-", $words), "true") ."</pre>"; // Welcome-to-My-Coutnry

    echo "<hr/>";

    // join() Function
    // join(separator, array)

    echo "join(separator, array)";
    echo "<br/><br/>";

    $words = ["Welcome", "to", "My", "Country"];

    echo "<pre>". print_r(join(" ", $words), "true") ."</pre>"; // Welcome to My Coutnry
    echo "<br/>";

    echo "<pre>". print_r(join("-", $words), "true") ."</pre>"; // Welcome-to-My-Coutnry

    echo "<hr/>";

    // number_format() Function
    // number_format(number, decimals, decimal pointer, separator)

    echo number_format("1000000") ."<br/>"; // 1,000,000
    echo number_format(1000000, 6, "-", "&") ."<br/>"; // 1&000&000-000000

    echo "<hr/>";

    // stripslashes() Function
    // stripslashes(string)

    $str = "he\'s my father";

    echo $str;
    echo "<br/>";
    echo stripslashes($str);

    echo "<hr/>";
?>