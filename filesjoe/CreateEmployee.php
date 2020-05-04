<?php
include "config.php";

$con = new mysqli($server, $login, $password, $dbname) or die("<br>Cannot connect to Database");

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$pswd = $_POST['password'];
$phoneNum = $_POST['phoneNum'];
$hpswd = password_hash($pswd, PASSWORD_BCRYPT);

    $sql_query = "SELECT count(*) as emailCT FROM User_Employee WHERE '$email' = Email";
    $result = mysqli_query($con, $sql_query);
    $row = mysqli_fetch_array($result);
    if($result) {
        $count = $row['emailCT'];
        if ($fName != " " && $lName != " " && $email != " " && $pswd != " " && $phoneNum != " ") {
            if($count <= 0){
                $insert = "INSERT INTO User_Employee(FName, LName, Email, Password, PhoneNum)
                            VALUES ('$fName', '$lName', '$email', '$hpswd', '$phoneNum')";
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
