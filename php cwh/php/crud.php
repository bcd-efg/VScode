<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
    <title>Sign Up Form</title>
    <style>
        body {
    background: linear-gradient( cyan, transparent), linear-gradient( -45deg, magenta, transparent), linear-gradient( 45deg, yellow, transparent);
    background-blend-mode: multiply;
    font-family: Arial, Helvetica, sans-serif;
}
.formContainer {
    position: relative;
    margin: 8% auto;
    min-height: 40%;
    width: 30%;
    box-shadow: 0 2px 16px rgba(0, 0, 0, 0.6);
    background: white;
    padding: 0px 0px 5px 15px;
    box-sizing: border-box;
    border-radius: 8px;
}
.formHeader {
    text-align: center;
    padding-top: 10px;
}
h3{
    text-align: center;
    padding-top: 10px;
}
.formContentContainer {
    margin-top: 15%;
}
.formInput {
    display: block;
    margin: 0px 0px 15px 20px;
    padding: 4px;
    width: 88%;
    height: 5%;
    box-sizing: border-box;
    border: none;
    outline: none;
    border-bottom: 1px solid #aaa;
    font-size: 12px;
}
.submitButton {
    background: dodgerblue;
    color: white;
    margin: 10px 20px;
    width: 88%;
    height: 8%;
    border: none;
    border-radius: 4px;
    text-transform: uppercase;
    cursor: pointer;
    font-weight: 500;
}
.filesubmit {
    background: dodgerblue;
    color: white;
    margin: 10px 20px;
    width: 7%;
    height: 8%;
    border: none;
    border-radius: 4px;
    text-transform: uppercase;
    cursor: pointer;
    font-weight: 500;
}
.display{
    display: flex;
    align-items: center;
    justify-content: center;
}
table { border-collapse: collapse; }
  th,td { padding: 5px; border: solid 1px #777; }
  th { background-color: lightblue; }

    </style>
</head>
<body>
    <div class="formContainer">
        
            <h2 class="formHeader">Enter Your details</h2>
            <div class="formContentContainer">
                <form action="/atanuphp/crud.php" method="post">
                    <input type="text" name="name" class="formInput" placeholder="Name" required/>
                    <input type="text" name="email" class="formInput" placeholder="Email" required/>
                    <input type="text" name="contact" class="formInput" placeholder="Phone Number" pattern="[1-9]{1}[0-9]{9}" required />
                    <input type="submit" class="submitButton" name="submitButton" value="Sign Up">
                   
                </form>
            </div>
        
    </div>
    <?php
        try {
             //Submit to database
             $servername = "localhost";
             $username = "root";
             $password = "";
             $database = "crud";
             $conn = mysqli_connect($servername, $username, $password,$database);
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(isset($_POST['submitButton'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $desc= $_POST['contact'];
    
                   
                
                    //Die if connection was not successful
                    if(!$conn){
                    die("Sorry we failed to connect: ". mysqli_connect_error());
                    }
                    else{
                        //Sql query to insert
                        $sql = "INSERT INTO `info` (`name`, `email`, `contact`) VALUES ('$name', '$email', '$desc')";
    
                        $result = mysqli_query($conn,$sql);
                    
                        
                        
                        
                        }
                }
                elseif (isset($_POST['file'])) {
                    $sno_store = 0;
                    $file_txt="details.txt";
                    $file_csv="details.csv";
                    $fp=fopen($file_txt,'w');
                    $fp1=fopen($file_csv,'w');
                    $sql = "SELECT * FROM `info`";
                    $result = mysqli_query($conn, $sql);
                    //text file
                    fwrite($fp,"Sno");
                    fwrite($fp,",");
                    fwrite($fp,"Name");
                    fwrite($fp,",");
                    fwrite($fp,"Email");
                    fwrite($fp,",");
                    fwrite($fp,"Contact");
                    fwrite($fp,chr(13));
                    fwrite($fp,chr(10));
                    //csv file
                    fwrite($fp1,"Sno");
                    fwrite($fp1,",");
                    fwrite($fp1,"Name");
                    fwrite($fp1,",");
                    fwrite($fp1,"Email");
                    fwrite($fp1,",");
                    fwrite($fp1,"Contact");
                    fwrite($fp1,chr(13));
                    fwrite($fp1,chr(10));
                  
                    while($row = mysqli_fetch_assoc($result)){
                      $sno_store = $sno_store + 1;
                      $mname=$row['name'];
                      $memail=$row['email'];
                      $mcontact=$row['contact'];
                      //text file
                      fwrite($fp,$sno_store);
                      fwrite($fp,",");
                      fwrite($fp,$mname);
                      fwrite($fp,",");
                      fwrite($fp,$memail);
                      fwrite($fp,",");
                      fwrite($fp,$mcontact);
                      fwrite($fp,chr(13));
                      fwrite($fp,chr(10));
                      //csv file
                      fwrite($fp1,$sno_store);
                      fwrite($fp1,",");
                      fwrite($fp1,$mname);
                      fwrite($fp1,",");
                      fwrite($fp1,$memail);
                      fwrite($fp1,",");
                      fwrite($fp1,$mcontact);
                      fwrite($fp1,chr(13));
                      fwrite($fp1,chr(10));
                    }
                    fclose($fp);
                    fclose($fp1);
                    $store=true;
                }
               
                }
        }
        catch (Exception $e) {
            echo "Data cannot be entered due to some error!";
        }   
    ?> 
    <h3>Data entered in the database:</h3>
    <div class="display" >
        
        <table class="table" id="myTable" >
        <thead>
            <tr>
            <th scope="col">S.No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
            </tr>
        </thead>
        <tbody>
        <?php 
          $sql = "SELECT * FROM `info`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['name'] . "</td>
            <td>". $row['email'] . "</td>
            <td>". $row['contact'] . "</td>
            
        </tr>";
        } 
          ?>


      </tbody>
    </table>
    <br>
          
    </div>
    <div>
        <center>
            <form action="/atanuphp/crud.php" method="post">
                <input type="submit" class="filesubmit" name="file" value="Store">
            </form>
        </center>
    </div>
</body>
</html>

