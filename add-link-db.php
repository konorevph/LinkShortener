<?php
    $link = $_POST['original-url'];

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
    
    $token = uniqid();     

    $query = "SELECT `token`, `link` FROM `token_table` WHERE `link` = '$link'";
    $result = $mysql->query($query);
    $row = $result->fetch_assoc();
    if ($row != null) {
        echo $row['token'];
        exit();
    }

    $query = "INSERT INTO `token_table` (`token`, `link`) VALUES ('$token', '$link')";

    $result = $mysql->query($query);
    $dbconn->close();

    if (!$result) {
        printf("%s\n", $mysql->error);
        exit();
    }
    else echo $token;
?>