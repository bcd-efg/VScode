<!-- <?php
   if(isset($_POST["store"])){
    $name = $_POST['name'];
    $reg = $_POST['rnumber'];
    $num1 = $_POST['m2'];
    $num2 = $_POST['m3'];
    $num3 = $_POST['m4'];
    $num4 = $_POST['m5'];
    $num5 = $_POST['m6'];
    $outof = 500;

    $total = $num1 + $num2 + $num3 + $num4 + $num5;
    $avg = $total / 500;

    

    if($total > 90){
        $grade = "A+";
    }
    else if($total < 89 && $total > 70){
        $grade = "A";
    }
    else if($total < 69 && $total > 50){
        $grade = "B";
    }
    else{
        $grade = "C";
    }

    
    $fname = $_POST['fname']. ".txt";
    $myfile = fopen($fname, "w") or die("Unable to open file!");

    $txt = "Name : ". $name.",";
    fwrite($myfile, $txt);

    $txt = "Reg No. ". $reg."\n";
    fwrite($myfile, $txt);

    $txt = "C programming : ". $num1."\n";
    fwrite($myfile, $txt);

    $txt = "Data Structure: : ". $num2."\n";
    fwrite($myfile, $txt);

    $txt = "AI : ". $num3."\n";
    fwrite($myfile, $txt);

    $txt = "Networking: ". $num4."\n";
    fwrite($myfile, $txt);

    $txt = "Frontend & Backend Design: ". $num5."\n";
    fwrite($myfile, $txt);


    $txt =  "Total Marks :". $total."\n";
    fwrite($myfile, $txt);

    $text = "Avarage : ". $avg ."\n";
    fwrite($myfile, $txt);

    $text =  "Parcentage : ". ($total/500)*100 ."%";
    fwrite($myfile, $txt);

    $text =  "Grade : ". $grade;
    fwrite($myfile, $txt);
    fclose($myfile);
    echo "Done";
    // echo "\r\n<a href='phpMarks.html'>Return</a>";
    
} 

?>-->
<html>
    <head>
        <style>
            a{
                border-radius: 5px;
                padding: 5px;
                border-color: solid black;
                background-color: bisque;
                text-decoration: none;
            }
            a:link{
                color: black;
            }
        </style>
    </head>
    <body>
        <!-- <a href="phpMarks.html">Return</a> -->
        <?php
            if(isset($_POST["store"]))
            {
                $name = $_POST['name'];
                $reg = $_POST['rnumber'];
                $num1 = $_POST['m2'];
                $num2 = $_POST['m3'];
                $num3 = $_POST['m4'];
                $num4 = $_POST['m5'];
                $num5 = $_POST['m6'];
                $outof = 500;

                $total = $num1 + $num2 + $num3 + $num4 + $num5;
                $avg = $total / 500;

                

                if($total > 90){
                    $grade = "A+";
                }
                else if($total < 89 && $total > 70){
                    $grade = "A";
                }
                else if($total < 69 && $total > 50){
                    $grade = "B";
                }
                else{
                    $grade = "C";
                }

                
                $fname = $_POST['fname']. ".txt";
                $myfile = fopen($fname, "w") or die("Unable to open file!");

                $txt = "Name : ". $name.",";
                fwrite($myfile, $txt);

                $txt = "Reg No. ". $reg."\n";
                fwrite($myfile, $txt);

                $txt = "C programming : ". $num1."\n";
                fwrite($myfile, $txt);

                $txt = "Data Structure: : ". $num2."\n";
                fwrite($myfile, $txt);

                $txt = "AI : ". $num3."\n";
                fwrite($myfile, $txt);

                $txt = "Networking: ". $num4."\n";
                fwrite($myfile, $txt);

                $txt = "Frontend & Backend Design: ". $num5."\n";
                fwrite($myfile, $txt);


                $txt =  "Total Marks :". $total."\n";
                fwrite($myfile, $txt);

                $text = "Avarage : ". $avg ."\n";
                fwrite($myfile, $txt);

                $text =  "Parcentage : ". ($total/500)*100 ."%";
                fwrite($myfile, $txt);

                $text =  "Grade : ". $grade;
                fwrite($myfile, $txt);
                fclose($myfile);
                echo "Done \r\n"."<br><br>";
                echo "<a href='phpMarks.html'>Return</a>";
                
            }
        ?> 
    </body>
</html>