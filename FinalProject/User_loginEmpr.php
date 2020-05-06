<?php
session_start();
include "config.php";

$con = new mysqli($server, $login, $password, $dbname) or die("<br>Cannot connect to Database");

$cookie_n = "person";
$uname = $_POST['username'];
$password = $_POST['password'];


if ($uname != "" && $password != "") {

    $sql_EMPR = "SELECT CompanyName, Email, PhoneNum, EmprID, count(*) AS cntUsers, Password as passEMPR FROM User_Employer WHERE Email='" . $uname . "'";
    $EMPRresult = mysqli_query($con, $sql_EMPR);
    $row = mysqli_fetch_array($EMPRresult);
    $countEMPR = $row['cntUsers'];
    $passEMPR = $row['passEMPR'];
    $CompanyName = $row['CompanyName'];
    $Email = $row['Email'];
    $PhoneNum = $row['PhoneNum'];
    $EmprID = $row['EmprID'];
    $_SESSION['CompanyName'] = $CompanyName;
    $_SESSION['Email'] = $Email;
    $_SESSION['PhoneNum'] = $PhoneNum;
    $_SESSION['EmprID'] = $EmprID;
    if(password_verify($password, $passEMPR)) {
        if ($countEMPR > 0){
            $cookie_id = $row['CompanyName'];
            setcookie($cookie_n, $cookie_id, time() + (3600), "/");
            echo 1;
        }
    }
    else{
        echo "There was an issue with account";
    }
}
