<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "atanu2";
    $conn = mysqli_connect($servername, $username, $password,$database);

    //Die if connection was not successful
    if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
    echo "<br> Connection was successful<br>";

    }
    $name = "Vikrant";
    $destination = "Russia";

    // $sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('Ravi', 'Delhi')";

    // $result = mysqli_query($conn,$sql);

     $sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('$name', '$destination')";

    $result = mysqli_query($conn,$sql);
    //Add a new trip to table in db
    if($result){
        echo "Record has been inserted successfully!<br>";
    }
    else{
        echo "Record insertion was unsuccessful because----> ". mysqli_error($conn);
    }


?>