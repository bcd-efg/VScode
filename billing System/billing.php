<?php
session_start();
$totalP=isset($_POST['totalVal']) ? $_POST['totalVal']:"";

$discount=0;



if($totalP>=5000)
    $discount=20;
else if ($totalP>=3000)
    $discount=15;
else if($totalP>=1500)
    $discount=10;
else
    $discount=5;

$finalP=$totalP-$discount/100.0*$totalP;

?>

<html>
    <head>
        <title>bill</title>
        <style>
            #div1{
                height:200px;
                width:200px;
                position:absolute;
                left:50%;
                top:50%;
                transform: translate(-50%,-50%);
                padding:10px;
                align-content:center;
                border-radius:5px;
                border: 2px solid black;
            }

        </style> 
    </head>

    <script>

        function saveFile()
        {
            <?php
            
            $val1="Total Amount: ".$totalP."\n";
            $val2="Discount: ".$discount."\n";
            $val3="Payable Amount: ".$finalP."\n";

            $myfile=fopen("billSave.txt" ,"w");
            fwrite($myfile,$val1);
            fwrite($myfile,$val2);
            fwrite($myfile,$val3);
            fclose($myfile);
            
            ?>
            


        }
    </script>

    <body>
        <div id="div1">
            <label for ="in1">Total Amount : </label>
            <input type="text" id="in1"  value="<?php echo $totalP; ?>" name="in1" readonly><br><br>
            <label for ="in2">Discount : </label>
            <input type="text" id="in2"  value="<?php echo $discount; ?>" name="in2" readonly><br><br>
            <label for ="in3">Payable Amount : </label>
            <input type="text" id="in3"  value="<?php echo $finalP; ?>" name="in3" readonly><br><br>
            <input type="button" id="saveFile" onclick="saveFile()" name="saveFile" value="SAVE">
        </div>
    </body>
</html>
