<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Стиль для центрирования контейнера */
        .center-container {
            display: flex;
            justify-content: center;
            
        }

        /* Стиль для формы сокращения ссылки */
        #link-shortener-form {
            
            padding: 20px;
            text-align: center;
            width: 350px;
            margin: 40px;
        }

        #link-shortener-form h2 {
            font-size: 24px;
        }

        .form-group {
            margin: 20px 0;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 300px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group input[readonly] {
            background-color: #f9f9f9;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <?php
        include('header.php');
    ?>
    <section class="center-container">
        <form id="link-shortener-form" method="POST" action="add-link-db.php">
            <h2>Сократить ссылку</h2>
            <div class="form-group">
                <label for="original-url">Исходная ссылка:</label>
                <input type="text" id="original-url" name="original-url" placeholder="Вставьте вашу ссылку" required>
            </div>
            <div class="form-group">
                <label for="shortened-url">Сокращенная ссылка:</label>
                <input type="text" id="shortened-url" name="shortened-url" readonly>
            </div>
            <button id="create-button">Сократить</button>
        </form>
    </section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/createToken.js"></script>
</html>