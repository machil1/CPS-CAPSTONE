<!DOCTYPE html>
<html lang="en">

<head>
  <title>Employer Tab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<body style="background-color:lightgrey;"></body>
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
            style="width:150px;height:37.8px;"></a>
      </div>
      <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="accountHome" data-toggle="tab" href="#accHome" role="tab">Account Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="jobInfo" data-toggle="tab" href="#job" role="tab">Add a Job</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="applicants" data-toggle="tab" href="#app" role="tab">Applicants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="messages" data-toggle="tab" href="#msgs" role="tab">Messages</a>
        </li>
        <b class = "float-right color:white">Welcome, insert name from database</b>
      </ul>
  </nav>

  <div class="tab-content">
    <div class="tab-pane fade" id="accHome" role="tabpanel">
      <?php
      session_start();
      //$CompanyName = $_SESSION['CompanyName'];
      $Email = $_SESSION['Email'];
      $PhoneNum = $_SESSION['PhoneNum'];
      //echo "Company: $CompanyName<br>";
      echo "Email Address: $Email<br>";
      echo "Address: <br>";
      echo "Phone Number: $PhoneNum";
      ?>

    </div>
    <div class="tab-pane fade" id="resume" role="tabpanel">
      <p>Resume Uploads <form action="/action_page.php">
          <label for="myfile"></label>
          <input type="file" id="myfile" name="myfile">
          <button class="button">Submit</button>
        </form>
      </p>
    </div>
    <div class="tab-pane fade" id="msgs" role="tabpanel">
    </div>
    <div class="tab-pane fade" id="app" role="tabpanel">
      <h2>Application #</h2>
      <p>Example:
        First name:
        Last name:
        etc
        pulled from database and shows the form from users side
      </p>
      <button class="button">Select</button>
      <hr>
    </div>
    <div class="tab-pane fade" id="job" role="tabpanel">
      <center>
      <h3>Job information</h3>
      <form action="CreateEmployer.php">
        <div class="form-group">
          <label for="jobTitle">Title: </label><br>
          <input type="jobTitle" class="form-control" id="jobTitle">
        </div>
        <div class="form-group">
          <label for="jobDescription">Description: </label><br>
          <!-- override in css code to format the size of text box-->
          <input type = "jobDescription" class="form-control" id="jobDescription" >
          <!--<textarea rows= "5" cols = "50" class="form-control" id="jobDescription"style = "display:block !important; margin-left:auto; margin-right:auto; width:auto !important" ></textarea>-->
        </div>
        <div class="form-group">
          <label for="location">Location: </label><br>
          <input type="location" class="form-control" id="location" >
        </div>
        <div class="form-group">
          <label for="eduLevel">Education Level: </label><br>
          <input type="eduLevel" class="form-control" id="eduLevel">
        </div>
        <div class="form-group">
          <label for="Responsibilities">Responsibilities: </label><br>
          <input type="Responsibilities" class="form-control" id="Responsibilities">
        </div>
        <div class="form-group">
          <label for="Requirements">Requirements: </label><br>
          <input type="Requirements" class="form-control" id="Requirements">
        </div><br>
        <button class="btn btn-success" id = "myFile">Submit</button>
      </form>
      </center>
    </div>

  </div>

</body>

</html>