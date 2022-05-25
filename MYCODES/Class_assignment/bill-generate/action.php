
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>RESULT</title>
</head>
<body>
<?php
    $file1="bill.txt";
    $name=$_POST['name'];
    $gtotal=$_POST['output'];
    $date=$_POST['date'];
    $fp1=fopen($file1,'a');
    fwrite($fp1,$name);
    fwrite($fp1,',');
    fwrite($fp1,$gtotal);
    fwrite($fp1,',');
    fwrite($fp1,$date);
    fwrite($fp1,chr(13));
    fwrite($fp1,chr(10));
    fclose($fp1);
    echo "<a class="."btn"." href=index.html>"."BACK"."</a>";
?>
</body>
</html>