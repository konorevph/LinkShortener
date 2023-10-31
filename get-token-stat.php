<?php
    $token = $_GET['token-input'];

    // echo $link;
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    require_once('DBConnection.php');

    $dbconn = new DBConnection();
    if ($dbconn->connect() == false){
        echo "Connection error";
        die();
    }
    $mysql = $dbconn->getConn();  

    $query = "SELECT * FROM `token-statistic` WHERE `token` = '$token'";
    $result = $mysql->query($query);

    if (!$result) {
        printf("<tr><td>%s</td></tr>", $mysql->error);
        exit();
    }
    $dbconn->close();
    foreach ($result as $row) {
        echo "<tr><td>" . $row['place'] . "</td><td>" . $row['date'] . "</td></tr>";
    }
?>