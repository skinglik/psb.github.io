<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .required::before {
            content: "* ";
            color: red;
        }

        .note {
            font-size: 0.85em;
            color: #777;
        }
    </style>
</head>
<body>

<form action="send_telegram.php" method="post">
    <!-- Поля формы остаются такими же -->
    <label class="required" for="name">Как к Вам обращаться?</label>
    <input type="text" id="name" name="name" placeholder="ФИО контактного лица" required>
    <br>

    <label class="required" for="inn">ИНН</label>
    <input type="text" id="inn" name="inn" placeholder="ИНН организации или индивидуального предпринимателя" required>
    <br>

    <label class="required" for="region">Укажите регион или город присутствия организации (ИП)</label>
    <input type="text" id="region" name="region" required>
    <br>

    <label class="required" for="phone">Телефон</label>
    <input type="tel" id="phone" name="phone" required>
    <br>

    <label class="required" for="email">Почта</label>
    <input type="email" id="email" name="email" required>
    <br>

    <label class="required" for="consent">
        <input type="checkbox" id="consent" name="consent" required>
        Принимаю условия обработки персональных данных
    </label>
    <br><br>

    <input type="submit" value="Отправить">
</form>


</body>
</html>

