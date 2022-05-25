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

    //Create a table in db
    $sql = "CREATE TABLE `trip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";

    $result = mysqli_query($conn,$sql);
    //Check for database creation success
    if($result){
        echo "The table was created successfully!<br>";
    }
    else{
        echo "The table creation was unsuccessful because----> ". mysqli_error($conn);
    }



    
   
?>