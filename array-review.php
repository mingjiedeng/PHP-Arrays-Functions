<?php
    $animals = array("panda", "alpaca", "boa");

    function sortAndPrint($myArray) {
        sort($myArray);
        foreach ($myArray as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }

    function add($str, $myArray) {
        echo "adding $str...<br>";
        if (strtolower($str), array_map("strtolower", $myArray)){
            $myArray[] = $str;
            sortAndPrint($myArray);
        }
    }

    sortAndPrint($animals);
    add("goat", $animals);
    add("Boa", $animals);



