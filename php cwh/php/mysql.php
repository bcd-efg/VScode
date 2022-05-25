<?php
    echo "Database connection";
    //Ways to connect to a MsSQL Database
    /*
    1. MySQLi extension(procedural or object oriented), i stands for improved. 
    works only with MySQL

    2. PDO(php Data Objects)
    Works with more than 1 types of database systems
    
    */

    //Connecting to the database

    $servername = "localhost";
    $username = "root";
    $password = "";
    /*for remote server we will have secret credentials for the abaove three, here
    everything is present in the system itself so the values are default values 
    */

    //Create connection 
    $conn = mysqli_connect($servername, $username, $password);
    //Die if connection was not successful
    if(!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "<br> Connection was successful";

    }
?>