<?php
    // array_chunk();
    // array_chunk(array, size, perserve_key);

    $couples = ["aung aung", "su su", "nu nu", "kyaw kyaw", "mya mya", "tun tun", "maung maung", "yin yin"];

    echo "<pre>". print_r(array_chunk($couples, 2), "true") ."<pre/>";
    echo "<br/>";

    echo array_chunk($couples, 2)[0][1]; # su su
    echo "<br/>";

    echo "<pre>". print_r(array_chunk($couples, 3, "true"), "true") ."</pre>";
    echo "<br/>";

    echo "<pre>". print_r(array_chunk($couples, 2, "true"), "true") ."</pre>"; # 0 1 2 3 4 5 6 7
    echo "<br/>";

    echo "<pre>". print_r(array_chunk($couples, 2, "false"), "true") ."</pre>"; # 01 01 01 01

    echo "<hr/>";
?>