
       
/* Code to open show pop-up messgage */
function popup() {
    $("#logindiv").css("display", "block");
    $("#password").attr("placeholder", "password").val("").blur();
    $("#username").attr("placeholder", "username").val("").blur();
}

$(document).ready(function () {

    $("#cancel").click(function () {
        $(this).parent().parent().hide();
        document.getElementById("message2").innerHTML = "User Pressed Cancel";
    });

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

//Code for the See more/See less tabs for all five jobs
function Job1() {
    var dots = document.getElementById("dots1");
    var moreText = document.getElementById("more1");
    var btnText = document.getElementById("myBtn1");

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

function Job2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("myBtn2");

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
function Job3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("myBtn3");

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
function Job4() {
    var dots = document.getElementById("dots4");
    var moreText = document.getElementById("more4");
    var btnText = document.getElementById("myBtn4");

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

function Job5() {
    var dots = document.getElementById("dots5");
    var moreText = document.getElementById("more5");
    var btnText = document.getElementById("myBtn5");

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

