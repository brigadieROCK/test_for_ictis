<?php
    include 'db_work.php';


    $query = "SELECT qr, title, date FROM (SELECT * FROM events ORDER BY id DESC LIMIT 3) t ORDER BY id;";
    $resp = "{";
    $res = mysqli_query($conn, $query);
    foreach($res as $row){
        $newrow = [];
        $newrow['date'] = $row['date'];
        $newrow['title'] = $row['title'];
        $newrow['qr'] = 'http://localhost/test_for_ictis/qrs/'.$row['qr'];
        $resp = $resp.json_encode($newrow, JSON_UNESCAPED_UNICODE);
    }
    $resp = $resp."}";
    echo $resp;
?>