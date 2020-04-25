<?php
include "config.php";

$con = new mysqli($server, $login, $password, $dbname) or die("<br>Cannot connect to Database");

$cookie_n = "name";
$uname = $_POST['username'];
$password = $_POST['password'];


if ($uname != "" && $password != "") {

    $sql_EMPR = "SELECT EmprID, count(*) AS cntUsers, Password as passEMPR FROM User_Employer WHERE Email='" . $uname . "'";
    $EMPRresult = mysqli_query($con, $sql_EMPR);
    $row = mysqli_fetch_array($EMPRresult);
    $countEMPR = $row['cntUsers'];
    $passEMPR = $row['passEMPR'];

    if(password_verify($password, $passEMPR)) {
        if ($countEMPR > 0){
            $cookie_id = $row['EmprID'];
            setcookie($cookie_n, $cookie_id, time() + (3600), "/");
            echo 1;
        }
    }
    else{
        echo "There was an issue with account";
    }
}