
    $(function () {
      $('#Employee').click(function () {
      var showEmployee = "<br><br><br><div class = 'box'><br>";
        showEmployee += "<center>"
        showEmployee += "<h1>Employee Login</h1>";
        showEmployee += "<div>";
        showEmployee += "<input type='text' class='textbox' id='txt_uname' name='txt_uname' placeholder='Username'/>";
        showEmployee += "</div>";
        showEmployee += "<div>";
        showEmployee += "<input type='password' class='textbox' id='txt_pwd' name='txt_pwd' placeholder='Password'/>";
        showEmployee += "</div>";
        showEmployee += "<div>";
        showEmployee += "<input type='submit' value='Login' name='but_submit' id='but_submit'/>";
        showEmployee += "</div></center></div>";
      document.getElementById("demployee").innerHTML = "";
      document.getElementById("employer").innerHTML = "";
      document.getElementById("employee").innerHTML = showEmployee;
    });
  });

  $(function () {
      $('#Employer').click(function () {
      var showEmployer = "<br><br><br><div class = 'box'><br>";
        showEmployer += "<center>"
        showEmployer += "<h1>Employer Login</h1>";
        showEmployer += "<div>";
        showEmployer += "<input type='text' class='textbox' id='txt_uname' name='txt_uname' placeholder='Username'/>";
        showEmployer += "</div>";
        showEmployer += "<div>";
        showEmployer += "<input type='password' class='textbox' id='txt_pwd' name='txt_pwd' placeholder='Password'/>";
        showEmployer += "</div>";
        showEmployer += "<div>";
        showEmployer += "<input type='submit' value='Login' name='but_submit' id='but_submit'/>";
        showEmployer += "</div></center></div>";  
      document.getElementById("demployee").innerHTML = "";
      document.getElementById("employee").innerHTML = "";
      document.getElementById("employer").innerHTML = showEmployer;
    });
  });
