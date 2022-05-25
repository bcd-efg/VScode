<?php
  
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

     //Die if connection was not successful
     if(!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "<br> Connection was successful<br>";

    }

    //Create a db
    $sql = "CREATE DATABASE ATANU2";

    $result = mysqli_query($conn,$sql);
    //Check for database creation success
    if($result){
        echo "This db was created successfully!<br>";
    }
    else{
        echo "The db creation was unsuccessful because----> ". mysqli_error($conn);
    }
    // echo "The result is <br>". var_dump($result);

    mysqli_close($conn);
   
?>