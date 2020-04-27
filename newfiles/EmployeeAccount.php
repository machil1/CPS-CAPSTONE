<!DOCTYPE html>
<html lang="en">

<head>
  <title>Employee Tab</title>

<body style="background-color:lightgrey;"></body>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="final.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>


  <!-- navbar inverse use that to change the color to green-->
  <nav class="nav navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a.logo class="navbar-top" href="#"><img src="CyberHirelogo.png" alt="Logo"
            style="width:150px;height:39.8px;"></a>
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
          <li class="nav-item">
            <a class="nav-link" id="accInfo" data-toggle="tab" href="#acc" role="tab">Update Account Information</a>
          </li>
          <b class = "float-right color:white">Welcome, insert name from database</b>
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
    </div>

    <div class="tab-pane fade" id="List" role="tabpanel">
      <h2>Resume 1</h2>
      <p>Random nosadjsdjhasjdjkashdj asjdhkjashdlaskjhdjkasdkj askjdkjashkj jkdaskjdh shd </p>
      <hr>
      <h2>Resume 2</h2>
      <p>sajdhajsdh asjdaskjdhjaskdkjas dkjasdkj hghjagds</p>
    </div>
    <div class="tab-pane fade" id="acc" role="tabpanel">
      <center>
      <h3>Profile information</h3>
      
      <form action="CreateEmployee.php">
        
        <div class="form-group">
          <label for="fName">First Name:</label><br>
          <input type="fname" class="form-control" id="fName">
        </div>
        <div class="form-group">
          <label for="LName">Last Name:</label><br>
          <!-- override in css code to format the size of text box-->
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
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <input type="file" name="myfile" id="myFile" class = "btn btn-success"  >
          <input type="submit" value="Upload Resume" id= "myFile" name="submit" class = "btn btn-success" >
        </form>
        <button class="btn btn-success" id = "myFile">Submit</button>
        </center>
      </form>
    </div>

  </div>

</body>

</html>
