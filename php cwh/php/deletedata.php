<?php
    echo "Where clause";
    try {

        //Submit to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "atanu2";
        $conn = mysqli_connect($servername, $username, $password, $database);
    
        //Die if connection was not successful
        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
            echo "Connection was successful<br>";
        }
        //Usage of where clause to delete data from db
        
        //Limit clause limits the number of records to be deleted

        //Limit clause can also be used with select statement

        $sql = "DELETE FROM `trip` WHERE `dest` = 'Russia' LIMIT 3";
    
        $result = mysqli_query($conn, $sql);
        $aff = mysqli_affected_rows($conn);
        echo "Number of affected rows: $aff<br>";

         if($result){
            echo "We deleted the record successfully<br>";
        }
        else{
            $err = mysqli_error($conn);
            echo "Record cannot be updated due to $err<br>";
        }
    
        

        
    } 
    catch (Exception $e) {
        echo "<br>Message: " . $e->getMessage();
        $err = mysqli_error($conn);
        echo "Record cannot be updated due to $err<br>";
    }
     
?>