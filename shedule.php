<?php
    include 'db_work.php';
    $time = $_GET['time'];
    $date = $_GET['date'];

    // $time = "10:00:00";
    // $date = "2024-05-13";


    $query = "SELECT auditory, event FROM `schedule` WHERE ((time_start < '$time') AND (time_end > '$time') AND (date = '$date'))";
    $resp = "{";
    $res = mysqli_query($conn, $query);
    foreach($res as $row){
        $resp = $resp.json_encode($row, JSON_UNESCAPED_UNICODE);
    }
    $resp = $resp."}";
    echo $resp;
?>