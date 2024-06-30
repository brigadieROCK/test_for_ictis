<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $table = "test_for_ictis";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $table);

    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    //   }
    // echo "Connected successfully";
    
    // $query = "SELECT * FROM `schedule` LIMIT 50";

    // $res = mysqli_query($conn, $query);
    // // echo $res;
    // foreach($res as $row){
    //     echo json_encode($row);
    //     echo '<br>';
    // }
    // echo json_encode($res);
?>
