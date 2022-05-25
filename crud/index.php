<?php  
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
$insert = false;
$update = false;
$delete = false;
$store = false;
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "details";
$file_txt="details.txt";
$file_csv="details.csv";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $sql = "DELETE FROM `details` WHERE `sno` = $sno";
  $delete=true;
  $result = mysqli_query($conn, $sql);
  header('Location: /crud/index.php');
  exit;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['snoEdit'])){
  // Update the record
    $sno = $_POST["snoEdit"];
    $mname = $_POST["mnameEdit"];
    $memail = $_POST["memailEdit"];
    $mcontact = $_POST["contactEdit"];

  // Sql query to be executed
  $sql = "UPDATE `details` SET `Name` = '$mname' , `Email` = '$memail' , `Contact` = '$mcontact' WHERE `details`.`sno` = $sno";
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
  }
  else{
    echo "We could not update the record successfully";
  }
}
elseif(isset($_POST['s-hide'])){
  $sno_store = 0;
  $fp=fopen($file_txt,'w');
  $fp1=fopen($file_csv,'w');
  $sql = "SELECT * FROM `details`";
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
    $mname=$row['Name'];
    $memail=$row['Email'];
    $mcontact=$row['Contact'];
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
else
{
    $mname = $_POST["mname"];
    $memail = $_POST["memail"];
    $mcontact = $_POST["contact"];

  // Sql query to be executed
  $sql = "INSERT INTO `details` (`Name`, `Email`, `Contact`) VALUES ('$mname', '$memail', '$mcontact')";
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@500&display=swap" rel="stylesheet">


  <title>REGISTRATION</title>
  <style>
    body {
      font-family: 'Baloo Bhaijaan 2', cursive;
      background-color: beige;
      font-size: 1.2rem;
    }
    .logo{
      padding: 8px;
      position: sticky;
      z-index: 1;
      background-color: rgba(128, 101, 21, 0.3);
    }
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
      margin: 10% auto;
      width: 50%;
      box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
      animation-name: modalopen;
      animation-duration: var(--modal-duration);
    }

    .modal-header h2,
    .modal-footer h3 {
      margin: 0;
    }

    .modal-header {
      background: var(--modal-color);
      padding: 15px;
      color: #000000;
      /* border-top-left-radius: 5px; */
      left: 0px;
      /* border-top-right-radius: 5px; */
    }

    .modal-body {
      padding: 10px 20px;
      background: #fff;
    }

    .modal-footer {
      background: var(--modal-color);
      padding: 10px;
      color: #fff;
      text-align: center;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
    }

    .close {
      float: left;
      font-size: 30px;
      color: #7f7f7f;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    #modal_1 {
      padding: 8px;
    }

    #modal_2 {
      padding: 8px;
    }

    #modal_3 {
      padding: 8px;
    }

    #modal_4 {
      padding: 5px;

    }

    #store {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-bottom: 8px;
    }
    .btnc{
      border-radius: 20px;
      color:darkgreen;
      border-color: darkgreen;
    }
    .btnc:hover{
      background-color: darkgreen;
      border-color: darkgreen;
    }
    #s-hide {
      display: none;
    }

    @keyframes modalopen {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }
  </style>
</head>

<body>
  <!-- Edit Modal -->

  <div id="my-modal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Edit Details</h2>
        <span class="close">&times;</span>
      </div>
      <form action="/crud/index.php" method="POST">
        <div class="modal-body">

          <input type="hidden" name="snoEdit" id="snoEdit">
          <div class="form-group" id="modal_1">
            <label for="mnameEdit">Enter Name</label><br>
            <input type="text" class="form-control" id="mnameEdit" name="mnameEdit" required
              placeholder="Enter Your Name" aria-describedby="emailHelp">
          </div>

          <div class="form-group" id="modal_2">
            <label for="memailEdit">Enter Email</label><br>
            <input type="email" class="form-control" id="memailEdit" name="memailEdit" required
              placeholder="Enter Email ID" rows="3"></input>
          </div>
          <div class="form-group" id="modal_3">
            <label for="contactEdit">Enter Contact Number</label><br>
            <input type="text" name="contactEdit" class="form-control" pattern="[1-9]{1}[0-9]{9}" id="contactEdit" required
              placeholder="Enter Phone Number" rows="3">
          </div>



        </div>
        <div class="modal-footer">
          <h3>
            <div><button type="submit" id="modal_4" class="btn btn-primary">Update</button></div>
          </h3>
        </div>
      </form>
    </div>

  </div>
  <!-- Logo -->
  <div class="logo">
    <img src="logo.png" alt="Logo did not load" id="logo">
  </div>
  <!-- ALERTS -->
  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your details has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your details has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your details has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($store){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your details has been stored successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  
  <!-- Main form -->
  <div class="container my-4" id="d1">
    <h2>Enter Details</h2>
    <form action="/crud/index.php" method="POST">
      <div class="form-group">
        <label for="mname">Enter Name</label>
        <input type="text" class="form-control" id="mname" name="mname" required placeholder="Enter Your Name"
          aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="memail">Enter Email</label>
        <input type="email" class="form-control" id="memail" name="memail" required placeholder="Enter Email ID"
          rows="3"></input>
      </div>
      <div class="form-group">
        <label for="mcontact">Enter Contact Number</label>
        <input type="text" name="contact" class="form-control" pattern="[1-9]{1}[0-9]{9}" id="contact" required placeholder="Enter Phone Number"
          rows="3">
      </div>
      <button type="submit" class="btn btn-primary">ADD</button>
    </form>
  </div>

  <!-- TABLE -->
  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Contact</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `details`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['Name'] . "</td>
            <td>". $row['Email'] . "</td>
            <td>". $row['Contact'] . "</td>
            <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div>
  <hr>
  <div id="store">
    <form action="/crud/index.php" method="post">
      <div id="store-btn">
        <input type="text" id="s-hide" name="s-hide" value="1">
        <button type="submit" id="store" class="btn btn-outline-success btnc">STORE</button>
      </div>
    </form>
  </div>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

  <!-- main script -->
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>

  <script>
    edits = document.getElementsByClassName('edit');
    const modal = document.querySelector('#my-modal');
    const closeBtn = document.querySelector('.close');
    closeBtn.addEventListener('click', closeModal);
    window.addEventListener('click', outsideClick);

    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        mname = tr.getElementsByTagName("td")[0].innerText;
        memail = tr.getElementsByTagName("td")[1].innerText;
        mcontact = tr.getElementsByTagName("td")[2].innerText;
        console.log(mname, memail, mcontact);
        mnameEdit.value = mname;
        memailEdit.value = memail;
        contactEdit.value = mcontact;
        snoEdit.value = e.target.id;
        console.log(e.target.id);
        modal.style.display = 'block';
      })
    })

    // Close
    function closeModal() {
      modal.style.display = 'none';
    }

    // Close If Outside Click
    function outsideClick(e) {
      if (e.target == modal) {
        modal.style.display = 'none';
      }
    }

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);
        if (confirm("Are you sure you want to delete the details!")) {
          console.log("yes");
          window.location = `/crud/index.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
</body>

</html>