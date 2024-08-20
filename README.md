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
