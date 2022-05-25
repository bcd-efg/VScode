<?php
// Write php program to transfer name,p1,p2,p3 in some output file.
$file1="marks.txt";
$name=$_POST['name'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
echo "<body bgcolor=skyblue>";
echo "<h2 style=background-color:midnightblue;color:white;text-align:center;text-transform:uppercase;>";
if($name=="" || $p1=="" || $p2=="" || $p3==""){
echo "Invalid Data. Try again.."."<br>";
}
else{
$total=intval($p1)+intval($p2)+intval($p3);
//The intval() function is an inbuilt function in PHP which returns the integer value of a variable.
$avg=round($total/3);
//To calculate division
if($avg>=60){
$d='FIRST DIVISION';
}
elseif($avg>=45){
$d='SECOND DIVISION';
}
elseif($avg>=40){
$d='THIRD DIVISION';
}
else{
$d='FAIL!!';
}
$fp1=fopen($file1,'a');
fwrite($fp1,$name);
fwrite($fp1,',');
fwrite($fp1,$p1);
fwrite($fp1,',');
fwrite($fp1,$p2);
fwrite($fp1,',');
fwrite($fp1,$p3);
fwrite($fp1,',');
fwrite($fp1,$total);
fwrite($fp1,',');
fwrite($fp1,$avg);
fwrite($fp1,',');
fwrite($fp1,$d);
fwrite($fp1,chr(13));
fwrite($fp1,chr(10));
fclose($fp1);
$fp1=fopen($file1,'r');
$nsize=filesize($file1);
$data=fread($fp1,$nsize);
echo "Content of ".$file1.":"."<br/><br/><br/>";
echo $data."<br><br/>";
fclose($fp1);
echo "<a href=q14pt1as3pt2.html>"."BACK"."</a>";
}
?>