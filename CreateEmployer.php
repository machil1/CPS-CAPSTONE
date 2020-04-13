<?php
include "config.php";

$con = new mysqli($server, $login, $password, $dbname) or die("<br>Cannot connect to Database");

$cName = $_POST['CompanyName'];
$email = $_POST['email'];
$pswd = $_POST['c-password'];
$phoneNum = $_POST['phoneNum'];

$sql_query = "SELECT count(*) as emails FROM User_Employer WHERE '$email' = Email";
$result = mysqli_query($con, $sql_query);
$row = mysqli_fetch_array($result);
if($result) {
    $count = $row['emails'];
    if ($cName != " " && $email != " " && $pswd != " " && $phoneNum != " ") {
        if($count <= 0){
            $insert = "INSERT INTO User_Employer(CompanyName, Email, Password, PhoneNum)
                        VALUES ('$cName', '$email', SHA('$pswd'), '$phoneNum')";
            $con->query($insert);
            echo "Successfully created a account!";
        }      
        else {
            echo "Email already has account!";
        }
    }
}
else {
echo "There was an issue with account being created!";
}
?>
