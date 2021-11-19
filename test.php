<?php
    //echo simply writes to the screen
    echo "blahhhhhhh <br>";
    //print prints but also returns a value of 1
    print("blahhhhhhh");

    $name = "Daniel";
    $age = 17;

    echo "<br>my name is " . $name . "<br>";
    echo "I am $age years old";

    define("BIRTHYEAR", 2004);
    echo "<br>I was born in " . BIRTHYEAR . "<br>";

    $blah = "blahhhhhhhhhhhhh";
    echo strtoupper($blah);
?>