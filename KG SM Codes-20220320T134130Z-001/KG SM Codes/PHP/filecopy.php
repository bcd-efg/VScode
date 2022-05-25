<!filecopy.php: Write php code to content of one file to another file on screen>
<html>
<head><title>PHP Code to copy content of 1 file to another file</title></head>
<body bgcolor="black">
<font face="Times New Roman" size="5" color="coral">
<Center><u>PHP Code to copy content of one file to another output file</u></center>
<?php
//
$file1=$_POST['file1'];
$file2=$_POST['file2'];
$fp1=fopen($file1,"r");
$fp2=fopen($file2,"w");
$n_size=filesize($file1);
while(!feof($fp1))
{
$ch=fgetc($fp1);
fwrite($fp2,$ch);
}
fclose($fp1);
fclose($fp2);
echo "<br/>"."Size of $file1=$n_size Bytes"."<br/>";
?>
<a href="filecopy.html">Click here</a>
</body>
</html>