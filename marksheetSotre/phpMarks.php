<?php

    if(isset($_POST['Calculate'])){
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

        // echo "Name : ". $name;
        // echo "<br>";
        // echo "Reg No. ". $reg."\n";
        // echo "<br>";
        // echo "Total Marks :". $total."\n";
        // echo "<br>";
        // echo "Out of: ". $outof. "\n";
        // echo "<br>";
        // echo "Avarage : ". $avg ."\n";
        // echo "<br>";
        // echo "Parcentage : ". ($total/500)*100 ."%";
        // echo "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mark.css">
    <title>Document</title>
</head>
<body>
    <form action="storeMarks.php" method="post">
    <div class="emp_det"></div>
                <fieldset>
                    <legend>STUDENT DETAILS</legend>
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" value= <?php echo $name ?> name="name" readonly></td>
                        </tr>
                        <tr>
                            <td>Reg ID</td>
                            <td><input type="text" value= <?php echo $reg ?> name="rnumber" readonly></td>
                        </tr>
                    </table>
                </fieldset>
            </div>
            <div class="sal_det"></div>
                <fieldset>
                    <legend>MARKS</legend>
                    <table>
                        <tr>
                            <td>C Progra</td>
                            <td><input type="number" value= <?php echo $num1 ?> name="m2" readonly></td>
                        </tr>
                        <tr>
                            <td>DS</td>
                            <td><input type="number" value= <?php echo $num2 ?> name="m3" readonly></td>
                        </tr>
                        <tr>
                            <td>XXX</td>
                            <td><input type="number" value= <?php echo $num3 ?>  name="m4" readonly></td>
                        </tr>
                        <tr>
                            <td>XXX</td>
                            <td><input type="number" value= <?php echo $num4 ?> name="m5" readonly></td>
                        </tr>
                        <tr>
                            <td>MA</td>
                            <td><input type="number" value= <?php echo $num5 ?> name="m6" readonly></td>
                        </tr>
                        <tr>
                            <td>TOTAL</td>
                            <td><input type="number" value= <?php echo $total ?> readonly></td>
                        </tr>
                        <tr>
                            <td>PER</td>
                            <td><input type="number" value= <?php echo ($total/500)*100 ?> readonly></td>
                        </tr>
                        <tr>
                            <td>PER</td>
                            <td><input type="number" value= <?php echo ($total/500)*100 ?> readonly></td>
                        </tr>
                    </table>
                </fieldset>
            </div>
    <div class="submit">
                <fieldset>
                    <legend>STORE DETAILS</legend>
                    <table>
                        <tr>
                            <td>FILE NAME</td>
                            <td><input type="text" name="fname" value=<?php echo $reg."_".strtolower($name)?> ></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="store" name="store"></td>
                        </tr>
                    </table>
                </fieldset>
            </div>
    </form>
</body>
</html>