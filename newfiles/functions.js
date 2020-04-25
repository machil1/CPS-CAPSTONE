

/* Code to open show pop-up messgage */
function popup() {
    $("#logindiv").css("display", "block");
    $("#password").attr("placeholder", "password").val("").blur();
    $("#username").attr("placeholder", "username").val("").blur();
}

$(document).ready(function () {
    /*
        $("#cancel").click(function () {
            $(this).parent().parent().hide();
        });
    */

    $("#loginbtn").click(function () {
        $(this).parent().parent().hide();
        var username = $("#username").val().trim();
        var password = $("#password").val().trim();

        if (username != "" && password != "") {
            $.ajax({
                url: 'UserLogin.php',
                type: 'post',
                dataType: 'json',
                data: { username: username, password: password },
                success: function (response) {
                    name = response;
                    var msg = "";
                    var msg1 = "";
                    var msg2 = "";
                    if (response == 2) {
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
            });
        }
        else {
            msg2 = "Username or Password required!";
            $("#message2").html(msg2);
        }
    });

});

//Code for the See more/See less tabs for all jobs
function Job() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
function Job1() {
    document.querySelectorAll(".showmore").forEach(function (p) {
        p.querySelector("a").addEventListener("click", function () {
            p.classList.toggle("show");
            //this.textContent = p.classList.contains("show") ? "Show Less" : "Show More";
        });
    });
}
