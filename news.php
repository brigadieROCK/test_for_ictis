<?php
    include 'db_work.php';


    $query = "SELECT img, title FROM (SELECT * FROM news ORDER BY id DESC LIMIT 6) t ORDER BY id;";
    $resp = "{";
    $res = mysqli_query($conn, $query);
    foreach($res as $row){
        $newrow = [];
        $newrow['title'] = $row['title'];
        $newrow['img'] = 'http://localhost/test_for_ictis/photo-news/'.$row['img'];
        $resp = $resp.json_encode($newrow, JSON_UNESCAPED_UNICODE);
    }
    $resp = $resp."}";
    echo $resp;
?>