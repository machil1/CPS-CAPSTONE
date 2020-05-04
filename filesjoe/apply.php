<?php
session_start();
if (isset($_SESSION['EmpID'])){
    $EmpID = $_SESSION['EmpID'];
    $Email = $_SESSION['Email'];
    $FName = $_SESSION['FName'];
    $LName = $_SESSION['LName'];
    $PhoneNum = $_SESSION['PhoneNum'];

include "config.php";

$con = new mysqli($server, $login, $password, $dbname) or die("<br>Cannot connect to Database");

$resume = $_POST['resumeSelected'];
$jobTitle = 'default';

    $sql_query = "SELECT count(*) as user FROM User_Employee WHERE $EmpID = EmpID";
    $result = mysqli_query($con, $sql_query);
    $row = mysqli_fetch_array($result);
    if($result) {
        $count = $row['user'];
        if($count > 0){
                $insert = "INSERT INTO Job_Applications(EmpID, FName, LName, Resume, Email, JobTitle)
                            VALUES ($EmpID, '$FName', '$LName', '$resume', '$Email', '$jobTitle')";
                $con->query($insert);
                echo "Successfully applied to Job!";
        }
    }      
    else {
    echo "There has been problem with the application";
    }
}
?>
