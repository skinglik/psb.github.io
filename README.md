<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
</head>
<body>
    <form action="#" method="post">
        <!-- Как к Вам обращаться? -->
        <label for="name">Как к Вам обращаться?*</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <!-- ИНН -->
        <label for="inn">ИНН</label>
        <input type="text" id="inn" name="inn">
        <br><br>

        <!-- ИНН организации или индивидуального предпринимателя -->
        <label for="org_inn">ИНН организации или индивидуального предпринимателя*</label>
        <input type="text" id="org_inn" name="org_inn" required>
        <br><br>

        <!-- Укажите регион или город присутствия организации (ИП) -->
        <label for="region">Укажите регион или город присутствия организации (ИП)*</label>
        <input type="text" id="region" name="region" required>
        <br><br>

        <!-- Телефон -->
        <label for="phone">Телефон*</label>
        <input type="tel" id="phone" name="phone" required>
        <br><br>

        <!-- Почта -->
        <label for="email">Почта*</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <!-- Согласие на обработку персональных данных -->
        <label for="consent">Принимаю условия обработки персональных данных*</label>
        <input type="checkbox" id="consent" name="consent" required>
        <br><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>
