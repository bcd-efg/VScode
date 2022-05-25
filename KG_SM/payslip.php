<?php

    if(isset($_POST['Calculate'])){
        $name = $_POST['name'];
        $id = $_POST['id'];
        $basic_pay = $_POST['sal'];
        $da = $basic_pay * 0.03;
        $hra = $basic_pay * 0.15;
        $pf = $basic_pay * 0.12;
        $ma = 500; 
        $gs = $basic_pay + $da + $hra + $ma + $pf;
        $nets = $gs - $pf;
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
<div class="contaner">
        <form action="payslipPrint.php" method="post">
            <div class="emp_det"></div>
                <fieldset>
                    <legend>EMPLOYEE DETAILS</legend>
                    <table>
                        <tr>
                            <td>Employee Name</td>
                            <td><input type="text" value= <?php echo $name ?> name="name" readonly></td>
                        </tr>
                        <tr>
                            <td>Employee ID</td>
                            <td><input type="text" value= <?php echo $id ?> name="id" readonly></td>
                        </tr>
                    </table>
                </fieldset>
            </div>
            <div class="sal_det"></div>
                <fieldset>
                    <legend>SALARY DETAILS</legend>
                    <table>
                        <tr>
                            <td>BASIC PAY</td>
                            <td><input type="number" value= <?php echo $basic_pay ?> name="sal" readonly></td>
                        </tr>
                        <tr>
                            <td>DA</td>
                            <td><input type="number" value= <?php echo $da ?> readonly></td>
                        </tr>
                        <tr>
                            <td>HRA</td>
                            <td><input type="number" value= <?php echo $hra ?> readonly></td>
                        </tr>
                        <tr>
                            <td>PF</td>
                            <td><input type="number" value= <?php echo $pf ?> readonly></td>
                        </tr>
                        <tr>
                            <td>MA</td>
                            <td><input type="number" value= <?php echo $ma ?> readonly></td>
                        </tr>
                        <tr>
                            <td>GS</td>
                            <td><input type="number" value= <?php echo $gs ?> readonly></td>
                        </tr>
                        <tr>
                            <td>NETS</td>
                            <td><input type="number" value= <?php echo $nets ?> readonly></td>
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
                            <td><input type="text" name="fname" value=<?php echo $id."_".strtolower($name)?> ></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="store" name="store"></td>
                        </tr>
                    </table>
                </fieldset>
            </div>
        </form>
    </div>
    </center>
</body>

</html>
