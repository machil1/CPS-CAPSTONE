<?php
session_start();
$cookie_n = "name";
	if(!isset($_COOKIE['person'])){
		echo "Please login in first<br>";
	}
$id = $_SESSION['EmprID'];

include "config.php";

$con = new mysqli($server, $login, $password, $dbname) or die("<br>Cannot connect to Database");

$comp = $_POST['Company'];
$jTitle = $_POST['jobTitle'];
$jDescrip = $_POST['jobDescription'];
$location = $_POST['location'];
$edulvl = $_POST['eduLevel'];
$resp = $_POST['Responsibilities'];
$require = $_POST['Requirements'];

    $sql_query = "SELECT count(*) as company FROM User_Employer WHERE $id = EmprID";
    $result = mysqli_query($con, $sql_query);
    $row = mysqli_fetch_array($result);
    if($result) {
        $count = $row['company'];
        if($count > 0){
                $insert = "INSERT INTO Job_Post(Company, JobTitle, JobDescrip, Location, EduLvl, Job_Responsiblties, Job_Requirements)
                            VALUES ('$comp', '$jTitle', '$jDescrip', '$location', '$edulvl', '$resp', '$require')";
                $con->query($insert);
                echo "Successfully created a Job Posting!";
        }
    }      
    else {
    echo "There has been problem with the upload";
    }
?>
