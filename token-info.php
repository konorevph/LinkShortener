<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Стиль для таблицы */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px auto;
            font-size: 16px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Стиль для заголовков таблицы */
        th {
            background-color: #888888;
            color: #fff;
            text-align: left;
            padding: 10px;
            border: 1px solid #888888;
        }

        /* Стиль для обычных ячеек таблицы */
        td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }

        /* Стиль для четных строк */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Стиль для нечётных строк */
        tr:nth-child(odd) {
            background-color: #ffffff;
        }

    </style>
</head>
<body>
    <?php
        include('header.php');
    ?>
    <section>
        <table>
            <thead>
                <tr>
                    <th>Token</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    // phpinfo();
                    
                    $mysqli = new mysqli("localhost", "Roman", "<e[nbR", "short_links");
                    if ($mysqli->connect_errno) {
                        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                        exit();
                    }
                    
                    $result = $mysqli->query("SELECT * from `token_table`");

                    $mysqli->close();
                    foreach ($result as $row) {
                        echo "<tr><td>" . $row['token'] ."</td><td>" . $row['link'] . "</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>