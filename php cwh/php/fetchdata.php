<?php
echo "Fetch Data from db<br>";

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
    //Sql query to insert

    $sql = "SELECT * FROM `trip`";

    // $sql = "SELECT * FROM `trip` LIMIT 3";
    // //Limit clause can also be used with select statement

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);
    echo $num;
    echo " Records found in the database:<br>";

    if ($num > 0) {
        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            // echo var_dump($row);
            echo $row['sno'] . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
            echo "<br>";
        }
    }
} catch (Exception $e) {
    echo "<br>Message: " . $e->getMessage();
}
?>