src="https://code.jquery.com/jquery-3.4.1.js"
var JobList = [];
function jobListing() {
      $.ajax({
        url: 'GetJobPost.php',
        type: 'POST',
        datatype: 'JSON',
        success: function (JobPost) {
            JobList1 = JSON.parse(JobPost);
            JobList = jQuery.makeArray( JobList1 );
            console.log(JobList);

            /*var company = [];
            var title = [];
            var descrip = [];
            var location = [];
            var edulvl = [];
            for (j = 1; j < JobList.length; j++){
                company.push(JobList[j][1]);
                title.push(JobList[j][2]);
                descrip.push(JobList[j][3]);
                location.push(JobList[j][4]);
                edulvl.push(JobList[j][5]);
            }
            console.log(company);*/
   

      for (i = 1; i < JobList.length; i++) {
        var jobPosting = "";
        jobPosting += "<br><b>Company: </b>";
        jobPosting += "<b>" + JobList[i][1] + "</b><br>";
        jobPosting += " Title: ";
        jobPosting += JobList[i][2];
        jobPosting += " <p style='white-space: pre-line'>Description: ";
        jobPosting += JobList[i][3] + "</p>";
        jobPosting += " Location: ";
        jobPosting += JobList[i][4] + "<br>";
        jobPosting += "Education Level: ";
        jobPosting += JobList[i][5] + "<br>";
        jobPosting += "Job Responsibilities: " + JobList[i][6] + "<br>";
        jobPosting += "Job Requirements: " + JobList[i][7] + "</span><br>";
        jobPosting += "<div class='popup' onClick='myFunction()'>Apply Now"
        +"<span class='popuptext' id='myPopup'>" 
        +"<h1>Are you sure?</h1>"
        +"<button type='yes' class = 'btn btn-success' onClick='showDiv()' style = 'color:white;'>Yes</button>"
        +"<button type='no' class = 'btn btn-success' onClick='location.href = 'index.html'' style = 'color:white;'>No</button></span>"
        +"<span class='popuptext1' id='myPopup1'><h2>Submit Resume</h2><label for='resume'>Choose Resume:</label>"
        +"<select id='resume'><option value='resume1'>R1</option><option value='resume2'>R2</option></select>"
        +"<button id='EmpAccount' onClick = 'submit()' class='btn btn-success'>Submit</button>"
        +"<style>span[class=popuptext1]{position: relative;display: inline-block;cursor: pointer; }"
        +"span[class = popuptext1] { visibility: hidden; width: 160px; background-color: #555; color: #fff;text-align: center;border-radius: 6px;padding: 8px 0; position: fixed; top: 50%; left: 50%; margin-top: -50px; margin-left: -100px; }"
        +"span[class = popuptext1] .show { visibility: visible;}"
        +"div[class=popup]{position: relative;display: inline-block;cursor: pointer; }"
        +".popup .popuptext { visibility: hidden; width: 160px; background-color: #555; color: #fff;text-align: center;border-radius: 6px;padding: 8px 0; position: fixed; top: 50%; left: 50%; margin-top: -50px; margin-left: -100px; }"
        +".popup .show { visibility: visible;}"
        +"button[type]{ background-color: #00ff7c} button[type]:hover{background-color: rgb(29, 150, 29)} </style>"
        +"</div>";
        jobPosting += "<hr>";
        document.getElementById("jobPostings").innerHTML = document.getElementById("jobPostings").innerHTML + jobPosting;
      }
    }
  });
}
function submit()
  {
    var btn = document.getElementById('EmpAccount');
    btn.addEventListener('click', function() {
      document.location.href = 'EmployeeAccount.php';
    });
  }
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
function showDiv() {
  document.getElementById('myPopup1').style.visibility = "visible";
}



$(function () {
  $('#radioBTN input[type=radio]').change(function () {
    if ($(this).val() == 'EmpChck') {
      var showEmployee = '<p>Please fill in this form to create an account.</p>';
        showEmployee += '<hr>';
        showEmployee += '<label for ="FName"><b>First Name</b></label><br>';
        showEmployee += '<input type="text" placeholder="First Name" name="FName" id="FName" class="createA" required><br>';
        showEmployee += '<label for ="LName"><b>Last Name</b></label><br>';
        showEmployee += '<input type="text" placeholder="Last Name" name="LName" id="LName" class="createA" required><br>';
        showEmployee += '<label for="email"><b>Email</b></label><br>';
        showEmployee += '<input type="text" placeholder="Enter Email" name="email" id="email" class="createA" required><br>';
        showEmployee += '<label for="psw"><b>Password</b></label><br>';
        showEmployee += '<input type="password" placeholder="Enter Password" name="password" id="c-password" class="psd" required><br>';
        showEmployee += '<label for="psw-repeat"><b>Repeat Password</b></label><br>';
        showEmployee += '<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" class="psd" required><br>';
        showEmployee += '<label for="phone"><b>Phone Number</b></label><br>';
        showEmployee += '<input type="text" placeholder="Phone Number" name="phoneNum" id="phoneNum" class="createA" required><br>';
      document.getElementById("account").innerHTML = " ";
      document.getElementById("account").innerHTML = showEmployee;
    }
    else{
      var showEmployer = '<p>Please fill in this form to create an account.</p>';
        showEmployer += '<hr>';
        showEmployer += '<label for ="compName"><b>Company Name</b></label><br>';
        showEmployer += '<input type="text" placeholder="Company Name" name="compName" id="compName" class="createA" required><br>';
        showEmployer += '<label for="email"><b>Email</b></label><br>';
        showEmployer += '<input type="text" placeholder="Enter Email" name="email" id="email" class="createA" required><br>';
        showEmployer += '<label for="psw"><b>Password</b></label><br>';
        showEmployer += '<input type="password" placeholder="Enter Password" name="password" id="c-password" class="psd" required><br>';
        showEmployer += '<label for="psw-repeat"><b>Repeat Password</b></label><br>';
        showEmployer += '<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" class="psd" required><br>';
        showEmployer += '<label for="phone"><b>Phone Number</b></label><br>';
        showEmployer += '<input type="text" placeholder="Phone Number" name="phoneNum" id="phoneNum" class="createA" required><br>'; 
      document.getElementById("account").innerHTML = " ";
      document.getElementById("account").innerHTML = showEmployer;
    }
    });
  });


 
//Test function to test Database
$(document).ready(function () {

  $("#loginbtn").click(function () {
    var username = $("#username").val().trim();
    var password = $("#password").val().trim();
    var usertype = $("input[name=emptype]:checked").val();
    if (usertype == "EmpChck") {
      if (username != "" && password != "") {
        $.ajax({
          url: 'User_login.php',
          type: 'post',
          data: { username: username, password: password },
          success: function (response) {
            if (response == 0) {
              alert("Login Successful!");
              //window.location.href = "EmployeeAccount.html";
              window.location.href = "EmployeeAccount.php";
            }
            else {
              alert("Invalid Username and Password!");
            }
          }
        });
      }
    }
    else if (usertype == "EmprChck")
      if (username != "" && password != "") {
        $.ajax({
          url: 'User_loginEmpr.php',
          type: 'post',
          data: { username: username, password: password },
          success: function (response) {
            if (response == 1) {
              alert("Login Successful!");
              //window.location.href = "EmployerAccount.html";
              window.location.href = "EmployerAccount.php";
            }
            else {
              alert("Invalid Username and Password!");
            }
          }
        });
      }
      else {
        alert("Username or Password required!");
      }
  });

});





//Function to create account
$(function () {
  $("#signupbtn").click(function () {
    $(this).parent().parent().hide();
    var usertype = $("input[name=emptype]:checked").val();

    if (usertype == "EmpChck") {
      var fName = $("#FName").val().trim();
      var lName = $("#LName").val().trim();
      var email = $("#email").val().trim();
      var password = $("#c-password").val().trim();
      var pswrepeat = $("#psw-repeat").val().trim();
      var phoneNum = $("#phoneNum").val().trim();

      if (password != pswrepeat) {
        alert("Please make sure passwords match!");
      }
      else {
        $.ajax({
          url: "CreateEmployee.php",
          type: "POST",
          data: { fName: fName, lName: lName, email: email, password: password, phoneNum: phoneNum },
          success: function (response) {
            if (response !== 0) {
              alert(response)
              if (response == "Successfully created a account!") {
                window.location.href = "index.html";
              }
              else {
                window.location.href = "createAccount.html";
              }
            }
          }
        });
      }
    }
    else {
      var cName = $('#compName').val().trim();
      var email = $("#email").val().trim();
      var password = $("#c-password").val().trim();
      var pswrepeat = $("#psw-repeat").val().trim();
      var phoneNum = $("#phoneNum").val().trim();

      $.ajax({
        url: 'CreateEmployer.php',
        type: 'POST',
        data: { cName: cName, email: email, password: password, phoneNum: phoneNum },
        success: function (response) {
          if (response !== 0) {
            alert(response)
            if (response == "Successfully created a account!") {
              window.location.href = "index.html";
            }
            else {
              window.location.href = "createAccount.html";
            }
          }
        }
      });
    }
  });
});



//ADD JOB FUNCTION
$(function () {
  $("#addjobbtn").click(function () {

      var Company = $("#Company").val().trim();
      var jobTitle = $("#jobTitle").val().trim();
      var jobDescription = $("#jobDescription").val().trim();
      var location = $("#location").val().trim();
      var eduLevel = $("#eduLevel").val().trim();
      var Responsibilities = $("#Responsibilities").val().trim();
      var Requirements = $('#Requirements').val().trim();

      if(Company != ''){
        $.ajax({
          url: "addJob.php",
          type: "POST",
          data: { Company: Company, 
            jobTitle: jobTitle, 
            jobDescription: jobDescription, 
            location: location, 
            eduLevel: eduLevel,
            Responsibilities: Responsibilities,
            Requirements: Requirements },
          success: function (response) {
            if (response !== 0) {
              alert(response);
              }
            else {
              alert("Someting Went Wrong with Account Creation");
            }
          }
        });
      }
  });
});
//FUNCTION TO GET COOKIE FOR WELCOME MESSAGE
function checkCookie() {
  // Get cookie using our custom function
  var firstName = getCookie("person");
  if(firstName != null) {
    document.getElementById("clearbuttons").innerHTML = " ";
    var welcome = "<ul class='nav nav-pills nav-fill' id='list'>";
    welcome += "<li class='nav-item'>";
    welcome ="<a style='color:rgb(255,255,255)'>Welcome, " + firstName + "</a>";
    welcome +="  <button href='#' id='logout' class='btn btn-success float-right'>Logout</button>";
    if(firstName == 'CyberHire'){
      welcome += '<button href="#" id="EmprAccount" class="btn btn-success float-right">Company</button>';
    }
    else{
      welcome += '<button href="#" id="EmpAccount"  class="btn btn-success float-right">Candidate</button>';
    }
    welcome += "</li>";
    welcome += "</ul>";
    document.getElementById("UserLogged").innerHTML = welcome;
      //alert("Welcome again, " + firstName);
  } 
  if(firstName == null) {
    document.getElementById("UserLogged").innerHTML = "";
    }
}

function getCookie(name) {
      // Split cookie string and get all individual name=value pairs in an array
      var cookieArr = document.cookie.split(";");
  
      // Loop through the array elements
      for(var i = 0; i < cookieArr.length; i++) {
          var cookiePair = cookieArr[i].split("=");
  
          /* Removing whitespace at the beginning of the cookie name
          and compare it with the given string */
          if(name == cookiePair[0].trim()) {
              // Decode the cookie value and return
              return decodeURIComponent(cookiePair[1]);
          }
      }
  
      // Return null if not found
      return null;
  }


//Function for Logout
  $(function () {
    $('#logout').click(function () {
      if (confirm('Are you sure to logout')) {
        $.ajax({
          url: 'Logout.php',
          type: 'post',
          success: function (response) {
            if (response == 1) {
              alert("You Logged Out")
              window.location.reload()
            }
          }
        });
      }
      else {
        alert("User Cancelled Logout.")
      }
      return false;
    });
  });

$(function() {
  $('#EmpAccount').click(function(){
    window.location.href = "EmployeeAccount.php";
  });
});
$(function() {
  $('#EmprAccount').click(function(){
    window.location.href = "EmployerAccount.php";
  });
});



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


var JobApp = [];
function jobAppl() {
      $.ajax({
        url: 'getApplication.php',
        type: 'POST',
        datatype: 'JSON',
        success: function (JobApp) {
            JobApp1 = JSON.parse(JobApp);
            JobApp = jQuery.makeArray( JobApp1 );
            console.log(JobApp);
            
            for (i = 1; i < JobApp.length; i++){
                var jobApps ="";
                jobApps += "<h2>Application #: " +JobApp[i][0] +"</h2>";
                jobApps += "<p>Job Title: " +JobApp[i][6];
                jobApps += "<br>Candidate ID: " +JobApp[i][1];
                jobApps += "<br>Name: " + JobApp[i][2];
                jobApps += " " +JobApp[i][3];
                jobApps += "<br>Email: " +JobApp[i][5]; 
                jobApps += "<br>Resume: <a href='uploads/" +JobApp[i][4] +"' target='_blank'>view resume</a></p>";
                document.getElementById("jobApplications").innerHTML = document.getElementById("jobApplications").innerHTML +jobApps;
          }
        }
      });
    }
