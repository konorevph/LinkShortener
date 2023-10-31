<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        
        if (isset($_GET['token'])){
            $token = $_GET['token'];

            require_once('DBConnection.php');

            $dbconn = new DBConnection();
            if ($dbconn->connect() == false){
                echo "Connection error";
                die();
            }
            $mysql = $dbconn->getConn();
            $query = "SELECT `token`, `link` FROM `token_table` WHERE `token` = '$token'";

            $result = $mysql->query($query);

            $query = "INSERT INTO `token-statistic`(`token`, `place`, `date`) VALUES ('$token','" . $_SERVER['REMOTE_ADDR'] . "','" . date('Y-m-d G:i:s', time()) . "')";
            $mysql->query($query);
            $dbconn->close();
            
	        $url = $result->fetch_assoc()['link'];

            if (strpos($url, 'http://') === null || strpos($url, 'https://') === null)
            {
                $url = "http://" . $url;
            }
            header("Location: $url");

            die();
        }
        

        $header = file_get_contents('header.php');
        echo $header;
    ?>
</body>
</html>