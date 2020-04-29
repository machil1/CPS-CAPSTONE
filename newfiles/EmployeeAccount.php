<!DOCTYPE html>
<html lang="en">

<head>
  <title>Employee Tab</title>

<script>
    resNum = 1;
    //Add Resume to List
    function addResume () {
        var file = document.getElementById("myfile1");
        var res1 = document.getElementById("res1").innerHTML;

        document.getElementById("res1").innerHTML = res1 + "<h2 id=\"resume" + resNum + "2\">Resume " + resNum + "</h2>" +
        "<p id=\"res" + resNum + "2Desc\">" + file + "</p>" +
        "<button class=\"btn btn-success\" id=\"resume" + resNum + "2Del\" onclick=\"delResume(" + resNum + ")\">Delete</button>\t" +
        "<button class=\"btn btn-success\" id=\"res" + resNum + "2View\">View</button>" +
        "<hr id=\"hrRes" + resNum + "2\">";

        resNum++;
    }
    //Delete resume from List
    function delResume (rDelete) {
        document.getElementById("resume" + rDelete + "2").remove();
        document.getElementById("res" + rDelete + "2Desc").remove();
        document.getElementById("resume" + rDelete + "2Del").remove();
        document.getElementById("res" + rDelete + "2View").remove();
        document.getElementById("hrRes" + rDelete + "2").remove();
    }
    //Open modal to send Message
    function messag() {
        var modal = document.getElementById("modalMessage");
        var to = document.getElementById("to");
        var topic = document.getElementById("topic");
        var message = document.getElementById("message");
        var btn = document.getElementById("composeBtn");
        var btn2 = document.getElementById("sendBtn");
        var span = document.getElementsByClassName("close");
        var submit = "true";

        btn.onclick = function() {
            modal.style.display = "block";
        }
    
        span.onclick = function() {
            modal.style.display = "none";
        }
    
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        btn2.onclick = function() {
            if(isNaN(to)) {} else {
                submit = "false";
                alert("Who not written");
            }
            if(isNaN(topic)) {} else {
                submit = "false";
                alert("Topic not written");
            }
            if(isNaN(message)) {} else {
                submit = "false";
                alert("Messsage not written");
            }
            if (submit == "true") {
                modal.style.display = "none";
            }
            submit = "true";
        }
    }
</script>

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
        <a.logo class="navbar-top" href="#"><img src="CyberHire_Logo.png" alt="Logo"
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
        <p><img src="Profile Image.jpg" alt="User Picture" width = "200" height = "200"></p>
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
    <div class="tab-pane fade" id="List" role="tabpanel">
        <form action="/action_page.php">
            <label for="myfile1"></label>
            <input type="file" id="myfile1"></form>
            <button class="btn btn-success" onclick="addResume()">Submit</button>
            <div id = "res1"></div>
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
        <button class="btn btn-success" id = "myFile">Submit</button>
        </center>
      </form>
    </div>

  </div>

</body>

</html>
