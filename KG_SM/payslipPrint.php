<?php
    if(isset($_POST["store"])){
        $name = $_POST['name'];
        $id = $_POST['id'];
        $basic_pay = $_POST['sal'];
        $da = $basic_pay * 0.03;
        $hra = $basic_pay * 0.15;
        $pf = $basic_pay * 0.12;
        $ma = 500; 
        $gs = $basic_pay + $da + $hra + $ma + $pf;
        $nets = $gs - $pf;
        $fname = $_POST['fname'].".txt";
        $myfile = fopen($fname, "w") or die("Unable to open file!");
        $txt = "EMPLOYEE NAME : ".$name."\n";
        fwrite($myfile, $txt);
        $txt = "EMPLOYEE ID : ".$id."\n";
        fwrite($myfile, $txt);
        $txt = "BASIC PAY  : ".$basic_pay."\n";
        fwrite($myfile, $txt);
        $txt = "DA : ".$da."\n";
        fwrite($myfile, $txt);
        $txt = "HRA : ".$hra."\n";
        fwrite($myfile, $txt);
        $txt = "PF : ".$pf."\n";
        fwrite($myfile, $txt);
        $txt = "MA : ".$ma."\n";
        fwrite($myfile, $txt);
        $txt = "GS : ".$gs."\n";
        fwrite($myfile, $txt);
        $txt = "NET SALARY : ".$nets."\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/payslip.css">
</head>
<body>
    <center>
        <h1>Successfully Stored</h1>
    </center>
</body>
</html>