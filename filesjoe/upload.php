<?php
session_start();
include "config.php";

$con = new mysqli($server, $login, $password, $dbname) or
    die("<br>Cannot connect to Database");


$EmpID = $_SESSION['EmpID'];
if ($EmpID == null) {
    echo "login first";
} else {
    if (isset($_POST['btn-upload'])) {

        $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder = "uploads/";

        // new file size in KB
        $new_size = $file_size / 1024;
        // new file size in KB

        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case

        $final_file = str_replace(' ', '-', $new_file_name);

        if (move_uploaded_file($file_loc, $folder . $final_file)) {
                $insert = "INSERT INTO Resume(EmpID, Date, Resume)
                            VALUES ('$EmpID', Now(), '$final_file')";
                $con->query($insert);

            //"INSERT INTO User_Employee(Resume) VALUES('$final_file')";
            $con->query($sql);
?>
            <script>
                alert('successfully uploaded');
                window.location.href = 'EmployeeAccount.php?success';
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('error while uploading file');
                window.location.href = 'EmployeeAccount.php?fail';
            </script>
<?php
        }
    }
}
?>