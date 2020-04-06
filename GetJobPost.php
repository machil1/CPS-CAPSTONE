<?php
include "config.php";

    $con = new mysqli($server, $login, $password, $dbname) or
        die("<br>Cannot connect to Database");

    # Grab the data from the database
    $query = "SELECT * FROM Job_Post";
    $mysqli_result = mysqli_query($con, $query);
    $data = array();

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
