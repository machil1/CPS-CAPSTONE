<!DOCTYPE html>
<html lang="en">

<head>
<style>
    /*Modal*/
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: RGB(0,0,0);
        background-color: RGB(0,0,0,0.4);
    }

    .modal-content {
        background-color: whitesmoke;
        margin: auto;
        padding: 14px 16px;
        width: 80%;
    }
</style>


  <title>Employee Tab</title>

<body style="background-color:lightgrey;"></body>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="final.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>

<body>


  <!-- navbar inverse use that to change the color to green-->
  <nav class="nav navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a.logo class="navbar-top" href="index.html"><img src="CyberHirelogo.png" alt="Logo" style="width:150px;height:39.8px;"></a>
      </div>
      <div class="float-right">
        <ul class="nav nav-pills nav-fill" id="list">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="accountHome" data-toggle="tab" href="#accHome" role="tab">Account Home</a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link" id="uploadResume" data-toggle="tab" href="#resume" role="tab">Upload Resume</a>
          </li>
        -->
          <li class="nav-item">
            <a class="nav-link" id="messages" data-toggle="tab" href="#msgs" role="tab">Messages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="resumeList" data-toggle="tab" href="#List" role="tab">Resume List</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" id="accInfo" data-toggle="tab" href="#acc" role="tab">Update Account Information</a>
          </li>-->
          <!--<b class = "float-right color:white">Welcome, insert name from database</b>-->
        </ul>
      </div>
  </nav>

  <div class="tab-content">
    <div class="tab-pane fade" id="accHome" role="tabpanel">
      <?php
      session_start();
      $FName = $_SESSION['FName'];
      $LName = $_SESSION['LName'];
      $Email = $_SESSION['Email'];
      $PhoneNum = $_SESSION['PhoneNum'];
      echo "First Name: $FName<br>";
      echo "Last Name: $LName<br>";
      echo "Email Address: $Email<br>";
      echo "Address: <br>";
      echo "Phone Number: $PhoneNum";
      ?>
      <br>
      <hr>
      <div id="jobApplications"></div>

    </div>
    <!--
    <div class="tab-pane fade" id="resume" role="tabpanel">
      <p>Resume Uploads <form action="/action_page.php">
          <label for="myfile"></label>
          <input type="file" id="myfile" name="myfile">
          <button class="button">Submit</button>
        </form>
      </p>
    
    <form action="upload.php" method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="file" name="myfile" id="myfile">
      <input type="submit" value="Upload" name="submit">
  </form>
    </div>
  -->
    <div class="tab-pane fade" id="msgs" role="tabpanel">
      <br>
      <br>
    <center><button class = "btn btn-success" id ="composeBtn" onclick="messag()">Compose Message</button></center>
        <div id="modalMessage" class="modal">
            <div class="modal-content">
                <p>To: <input type="text" id="to"><br></p>
                <p>Topic: <input type="text" id="topic"><br></p>
                <p>Message: <textarea id="message"></textarea></p>
                <div><button class ="btn btn-success" id="sendBtn">Send</button></div>
                </div>
         </div>
        <h2>From: CyberHire</h2>
        <p>Hello, I am looking for some more information on, so and so.</p>
        <p><button class = "btn btn-success">Respond</button> <button class = "btn btn-success">Delete</button></p>
        <hr>
        <h2>To: CyberHire</h2>
        <p>Here is the information you requested.</p>
        <p><button class = "btn btn-success">Respond</button> <button class = "btn btn-success">Delete</button></p>
      </div>

    <div class="tab-pane fade" id="List" role="tabpanel">
      <br>
      <br>
      <center><h3>Upload Resume</h3>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <button class="btn btn-success" type="submit" name="btn-upload">upload</button>
      </form>
      <?php
      if (isset($_GET['success'])) {
      ?>
        <label>File Uploaded Successfully... <a href="view.php">click here to view file.</a></label>
      <?php
      } else if (isset($_GET['fail'])) {
      ?>
        <label>Problem While File Uploading !</label>
      <?php
      } else {
      ?>
        <label>Upload Resume as a PDF</label>
      <?php
      }
      ?></center>
      <br>
      <br>

    <div class = 'container'>
      <TABLE class='table table-bordered'>
        <thead>
          <tr>
            <th>Resume</th>
            <th>Date</th>
            <th>View</th>
          </tr>
        </thead>
        <?php
        //session_start();
        $EmpID = $_SESSION['EmpID'];

        include "config.php";
        $con = new mysqli($server, $login, $password, $dbname) or
          die("<br>Cannot connect to Database");
        $sql = "SELECT EmpID, Date, Resume FROM Resume WHERE $EmpID = EmpID";
        $result_set = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result_set)) {
        ?>
          <tbody>
            <tr>
              <td><?php echo $row['Resume'] ?></td>
              <td><?php echo $row['Date'] ?></td>
              <td><a href="uploads/<?php echo $row['Resume'] ?>" target="_blank">view file</a></td>
            </tr>
          </tbody>
        <?php
        }
        ?>
      </TABLE>
    </div>

    </div>
  <!--<div class="tab-pane fade" id="acc" role="tabpanel">
    <center>
      <h3>Profile information</h3>

      <form action="#">

        <div class="form-group">
          <label for="fName">First Name:</label><br>
          <input type="fname" class="form-control" id="fName">
        </div>
        <div class="form-group">
          <label for="LName">Last Name:</label><br>
            override in css code to format the size of text box
          <input type="LName" class="form-control" id="LName" size="50">
        </div>
        <div class="form-group">
          <label for="address">Address: </label><br>
          <input type="address" class="form-control" id="address">
        </div>
        <div class="form-group">
          <label for="city">City/State:</label><br>
          <input type="city" class="form-control" id="city">
        </div>
        <div class="form-group">
          <label for="email">Email address:</label><br>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label><br>
          <input type="pwd" class="form-control" id="pwd">
        </div><br>
        <button class="btn btn-success" id="myFile">Submit</button>
      </form>
      <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="File" class="btn btn-success">
            <input type="submit" value="Upload Resume" id="myFile" name="submit" class="btn btn-success">
          </form>
          <br>
          <br>

    </center>
    </form>
  </div>

  </div>-->

</body>

<script>
    function start(){
        jobAppl();
    }
    window.onload = start();
    
</script>

</html>