<?php
/*
    array-review.php
    This file is for the Review Assignment: PHP Arrays & Functions
    in Green River College IT 328 class.

    @author     Mingjie Deng <mdeng@mail.greenriver.edu>
    @version    1.0
*/

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //This section is for assignment part 1
    $animals = array("panda", "alpaca", "boa");

    function sortAndPrint(&$myArray) {
        sort($myArray);
        foreach ($myArray as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }

    function add($str, &$myArray) {
        echo "adding $str...<br>";
        if (!in_array(strtolower($str), array_map("strtolower", $myArray))){
            $myArray[] = $str;
        }
        sortAndPrint($myArray);
    }

    //Output for the assignment part 1
    echo "--This is the output of the assignment part 1: <br>";
    sortAndPrint($animals);
    add("goat", $animals);
    add("Boa", $animals);
    echo "<br><br>";



    //This section is for assignment part 2
    $flavors = array("grasshopper" => "The Grasshopper",
                            "maple"     => "Whiskey Maple Bacon",
                            "carrot"    => "Carrot Walnut",
                            "caramel"   => "Salted Caramel Cupcake",
                            "velvet"    => "Red Velvet",
                            "lemon"     => "Lemon Drop",
                            "tiramisu"  => "Tiramisu" );

    echo "--This is the output of the assignment part 2: <br>";

    foreach ($flavors as $key => $value) {
        echo "<input type=\"checkbox\" name=\"flavors[]\" value=\"$key\">$value<br>";
    }




