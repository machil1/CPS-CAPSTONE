<!DOCTYPE html>
<html lang="en">

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
        <p><img src="Profile Image.jpg" alt="User Picture" width = "200" height = "200"></p>
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
        <p></p>
        <button class = "btn btn-success" id ="composeBtn" onclick="messag()">Compose Message</button>
        <div id="modalMessage" class="modal">
            <div class="modal-content">
                <p>To: <input type="text" id="to"><br></p>
                <p>Topic: <input type="text" id="topic"><br></p>
                <p>Message: <textarea id="message"></textarea></p>
                <div><button class ="btn btn-success" id="sendBtn">Send</button>
            </div></div>
        </div>
        <h2>Message 1</h2>
        <p>Random nosadjsdjhasjdjkashdj asjdhkjashdlaskjhdjkasdkj askjdkjashkj jkdaskjdh shd nosadjsdjhasjdjkashdj asjdhkjashdlaskjhdjkasdkj askjdkjashkj jkdaskjdh shdnosadjsdjhasjdjkashdj asjdhkjashdlaskjhdjkasdkj askjdkjashkj jkdaskjdh shd</p>
        <p><button class = "btn btn-success">Respond</button> <button class = "btn btn-success">Delete</button></p>
        <hr>
        <h2>Message 2</h2>
        <p>sajdhajsdh asjdaskjdhjaskdkjas dkjasdkj hghjagds</p>
        <p><button class = "btn btn-success">Respond</button> <button class = "btn btn-success">Delete</button></p>
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
     <form method ="post">
        <div class="form-group">
          <label for="jobTitle">Title: </label><br>
          <input type="jobTitle" class="form-control" id="jobTitle">
        </div>
        <div class="form-group">
          <label for="jobDescription">Description: </label><br>
          <!-- override in css code to format the size of text box-->
          <textarea rows= "5" cols = "50" class="form-control" id="jobDescription"style = "display:block !important;" ></textarea>
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
          <textarea rows= "5" cols = "50" class="form-control" id="Responsibilities"style = "display:block !important;" ></textarea>
        </div>
        <div class="form-group">
          <label for="Requirements">Requirements: </label><br>
          <textarea rows= "5" cols = "50" class="form-control" id="Requirements"style = "display:block !important;" ></textarea>
        </div><br>
        <button class="btn btn-success" id = "addjobbtn">Submit</button>
      </form>
      </center>
    </div>

  </div>

</body>

</html>
