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
    <?php include("header.php"); ?>
    <form>
        <label for="token-input">Введите токен</label>
        <input type="text" id="token-input" name="token-input" />
        <button id="show-token-statistic-btn">Показать статистику</button>
    </form>
    <table>
        <thead>
            <tr>
                <td>Всего переходов: <span id="counter"></span><td>
            <tr>
            <tr>
                <th>IP</th>
                <th>Дата</th>
            </tr>
        </thead>
        <tbody id="data-container">

        </tbody>
    </table>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/tokenStatistic.js"></script>
</html>