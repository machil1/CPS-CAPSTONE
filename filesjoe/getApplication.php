<?php
session_start();
include "config.php";

    $con = new mysqli($server, $login, $password, $dbname) or
        die("<br>Cannot connect to Database");
$data = array();
//$EmpID = $_SESSION['EmpID'];
//$EmprID = $_SESSION['EmprID'];
    # Grab the data from the database
if (isset($_SESSION['EmpID'])){
    $EmpID = $_SESSION['EmpID'];
    $query = "SELECT * FROM Job_Applications WHERE EmpID = $EmpID";
    $mysqli_result = mysqli_query($con, $query);
    //$data = array();

    while (($row = $mysqli_result->fetch_assoc()) !== null) {
        $data[] = $row;
    }

    # our converstion function given above.
    function convertDataToChartForm($data)
    {
        $newData = array();
        $firstLine = true;

        foreach ($data as $dataRow) {
            if ($firstLine) {
                $newData[] = array_keys($dataRow);
                $firstLine = false;
            }

            $newData[] = array_values($dataRow);
        }

        return $newData;
    }
    echo json_encode(convertDataToChartForm($data));
}
else{

    $query = "SELECT * FROM Job_Applications";
    $mysqli_result = mysqli_query($con, $query);

    while (($row = $mysqli_result->fetch_assoc()) !== null) {
        $data[] = $row;
    }

    # our converstion function given above.
    function convertDataToChartForm($data)
    {
        $newData = array();
        $firstLine = true;

        foreach ($data as $dataRow) {
            if ($firstLine) {
                $newData[] = array_keys($dataRow);
                $firstLine = false;
            }

            $newData[] = array_values($dataRow);
        }

        return $newData;
    }
    echo json_encode(convertDataToChartForm($data));
}
?>