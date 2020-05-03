<?php
session_start();
include "config.php";

$con = new mysqli($server, $login, $password, $dbname) or die("<br>Cannot connect to Database");

$cookie_n = "name";
$cookie_p = "person";
$uname = $_POST['username'];
$password = $_POST['password'];


if ($uname != "" && $password != "") {

    $sql_EMP = "SELECT EmpID, FName, LName, Email, PhoneNum, count(*) AS cntUser, Password as passEMP FROM User_Employee WHERE Email='" . $uname . "'";
    //$sql_EMPR = "SELECT count(*) AS cntUsers, Password as passEMPR FROM User_Employer WHERE Email='" . $uname . "'";
    $EMPresult = mysqli_query($con, $sql_EMP);

    $rowz = mysqli_fetch_array($EMPresult);

    $countEMP = $rowz['cntUser'];
    $passEMP = $rowz['passEMP'];

    if(password_verify($password, $passEMP)) {
        if ($countEMP > 0) {
            $cookie_Name = $rowz['FName'];
            $FName = $rowz['FName'];
            $LName = $rowz['LName'];
            $Email = $rowz['Email'];
            $EmpID = $rowz['EmpID'];
            $PhoneNum = $rowz['PhoneNum'];
            $_SESSION['Email'] = $Email;
            $_SESSION['FName'] = $FName;
            $_SESSION['LName'] = $LName;
            $_SESSION['PhoneNum'] = $PhoneNum;
            $_SESSION['EmpID'] = $EmpID;
            
            $sql_resume = "SELECT EmpID, Resume FROM Resume WHERE EmpID = $EmpID";
            $resumeResult = mysqli_query($con,$sql_resume);

            $userResumes = array();

            while($row = mysqli_fetch_array($resumeResult)){
                    $userResumes[] = $row['Resume'];
            }

            setcookie($cookie_p, $cookie_Name, time() + (3600), "/");
            echo json_encode(array($userResumes));
        }
        /*if ($countEMPR > 0){
            $cookie_id = $row['EmprID'];
            setcookie($cookie_n, $cookie_id, time() + (3600), "/");
            echo 1;
        }*/
    }
    else{
        echo 0;
    }
}
?>
