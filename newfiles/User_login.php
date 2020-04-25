<?php
session_start();
include "config.php";

$con = new mysqli($server, $login, $password, $dbname) or die("<br>Cannot connect to Database");

$cookie_n = "name";
$uname = $_POST['username'];
$password = $_POST['password'];


if ($uname != "" && $password != "") {

    $sql_EMP = "SELECT EmpID, FName, LName, count(*) AS cntUser, Password as passEMP FROM User_Employee WHERE Email='" . $uname . "'";
    //$sql_EMPR = "SELECT count(*) AS cntUsers, Password as passEMPR FROM User_Employer WHERE Email='" . $uname . "'";

    $EMPresult = mysqli_query($con, $sql_EMP);
    //$EMPRresult = mysqli_query($con, $sql_EMPR);

    $rowz = mysqli_fetch_array($EMPresult);
    //$row = mysqli_fetch_array($EMPRresult);

    $countEMP = $rowz['cntUser'];
    //$countEMPR = $row['cntUsers'];
    $passEMP = $rowz['passEMP'];
    //$passEMPR = $row['passEMPR'];

    if(password_verify($password, $passEMP)) {
        if ($countEMP > 0) {
            $cookie_id = $rowz['EmpID'];
            $FName = $rowz['FName'];
            $LName = $rowz['LName'];
            $_SESSION['FName'] = $FName;
            $_SESSION['LName'] = $LName;
            setcookie($cookie_n, $cookie_id, time() + (3600), "/");
            echo 0;
        }
        /*if ($countEMPR > 0){
            $cookie_id = $row['EmprID'];
            setcookie($cookie_n, $cookie_id, time() + (3600), "/");
            echo 1;
        }*/
    }
    else{
        echo "There was an issue with account";
    }
}
