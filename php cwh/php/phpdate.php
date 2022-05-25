<?php
    echo "Welcome to the world of dates<br>";
    date_default_timezone_set('Asia/Kolkata'); 

    /*check documentation*/
    $d = date("d  m y");
    $d1 = date("dS");
    $d2 = date("dS F Y");
    $d3 = date("dS F Y g:i A");

    echo "Today is  $d <br>";
    echo "Today is  $d1 <br>";
    echo "Today is  $d2 <br>";
    echo "Today is  $d3 <br>";

    echo date("l jS \of F Y h:i:s A")."<br>";

    /*
    mktime(h,m,s,d,m,y)
    */
    echo "July 1, 2000 is on a ". date("l",mktime(0,0,0,7,1,2000));
    $year = date("Y");
    echo "<br>Copyright $year| All rights reserved!<br>";


?>