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
            
            for (i = 1; i < JobList.length; i++){
                var jobPosting ="";
                jobPosting += "<br><b>Company: </b>";
                jobPosting += "<b>" + JobList[i][1] + "</b><br>";
                jobPosting += " Title: ";
                jobPosting += JobList[i][2];
                jobPosting += " <p style='white-space: pre-line'>Description: ";
                jobPosting += JobList[i][3] + "</p>";
                jobPosting += " Location: ";
                jobPosting += JobList[i][4] + "<br>";
                jobPosting += " Education Level: ";
                jobPosting += JobList[i][5] + "<br>";
                jobPosting += "<hr>";
                document.getElementById("jobPostings").innerHTML = document.getElementById("jobPostings").innerHTML +jobPosting;
          }
        }
      });
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
  $(document).ready(function(){

    $("#but_submit").click(function(){
        var username = $("#txt_uname").val().trim();
        var password = $("#txt_pwd").val().trim();

        console.log(username);

        if( username != "" && password != "" ){
            $.ajax({
                url:'checkUsers.php',
                type:'post',
                data:{username:username,password:password},
                success:function(response){
                    var msg = "";
                    var msg1= "";
                    var msg2= "";
                    if(response == 1){
                       msg1="Login Successful!";
                       $("#message").html(msg1);
                       $("#txt_pwd").attr("placeholder", "Password").val("").blur();
                    }
                    else{
                        msg = "Invalid Username and Password!";
                        $("#message").html(msg);
                        $("#txt_pwd").attr("placeholder", "Password").val("").blur();
                    }
                }
            });
        }
        else {
            msg2="Username or Password required!";
            $("#message").html(msg2);
        }
    });

});





//Function to create account
$(function () {
  $("#signupbtn").click(function () {
    $(this).parent().parent().hide();

    var usertype = $("input[name=emptype]:checked").val(); 
    var username = $("#email").val().trim();
    var password = $("#c-password").val().trim();
    var pswrepeat = $("#psw-repeat").val().trim();
    var phoneNum = $("#phoneNum").val().trim();

    if(password != pswrepeat){
      alert("Please make sure passwords match!");
    }

    else if (password == pswrepeat) {
      alert("Account creation success");
      /*$.ajax({
        url: 'addUser.php',
        type: 'post',
        dataType: 'json',
        data: { username: username, password: password },
        success: function (response) {
          name = response;
          var msg = "";
          var msg1 = "";
          var msg2 = "";
          if (response == 2){
            alert("Please Logout First")
          }
          else if (response != 0) {
            name = response[0];
            avgWageAvgUser = response[1];
            ePopAvgUser = response[2];
            msg1 = "Welcome, " + name;
            $("#welcome").html(msg1);
            document.getElementById("message2").innerHTML = "";
            $("#password").attr("placeholder", "password").val("").blur();
          }
          else {
            msg = "Invalid Username and Password!";
            $("#message2").html(msg);
            $("#password").attr("placeholder", "password").val("").blur();
          }
        }
      });*/
    }
    else {
      alert("account creation fail");
    }
  });

});
