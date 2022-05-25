<?php
    echo "Associative array <br>";
    /*numeric or indexed arrays */
    // $arr = array("this", "that", "what");
    // echo $arr[0];
    // echo $arr[1];
    // echo $arr[2];

    //Associative arrays
    /* keys of associative arrays can be integerrs*/
    $favcol = array("Subham" => "red",
    "rohan" => "green",
    "harry" => "yellow",
    8 => "this");

    //  echo $favcol["harry"];
    //  echo "<br>";
    //  echo $favcol["rohan"];
    //  echo "<br>";
    //  echo $favcol[8];
    //  echo "<br>";

    foreach ($favcol as $key => $value) {
        echo "<br>Fav color of $key is $value";
    }
?>