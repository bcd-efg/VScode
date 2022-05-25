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
        //Usage of where nclause to fetch data from db
        $sql = "SELECT * FROM `trip` WHERE `dest`='Kolk'";
    
        $result = mysqli_query($conn, $sql);
    
        $num = mysqli_num_rows($result);
        echo $num;
        echo " Records found in the database:<br>";
        $no=1;
        if ($num > 0) {
       
            while ($row = mysqli_fetch_assoc($result)) {
                echo $no. ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
                echo "<br>";
                $no = $no + 1;
            }
        }

        //Usage of where clause to update data
        $sql="UPDATE `trip` SET `name` = 'fromDel' WHERE `trip`.`dest` = 'Delhi'";
        $result = mysqli_query($conn,$sql);
        echo var_dump($result);
        echo "<br>";
        $aff = mysqli_affected_rows($conn);//finds number of rows affected
        echo "Number of affected rows: $aff<br>";
        if($result){
            echo "We updated the record successfully<br>";
        }
        else{
            echo "Record cannot be updated<br>";
        }
    } 
    catch (Exception $e) {
        echo "<br>Message: " . $e->getMessage();
    }
     
?>