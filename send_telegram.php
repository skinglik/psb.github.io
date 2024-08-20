<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = "";
    $chat_id = "";
    
    // Собираем данные из формы
    $name = $_POST['name'];
    $inn = $_POST['inn'];
    $region = $_POST['region'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Сообщение для отправки
    $message = "Новое сообщение:\n";
    $message .= "Имя: " . $name . "\n";
    $message .= "ИНН: " . $inn . "\n";
    $message .= "Регион/Город: " . $region . "\n";
    $message .= "Телефон: " . $phone . "\n";
    $message .= "Почта: " . $email;

    // URL для отправки запроса
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat_id . "&parse_mode=HTML&text=" . urlencode($message);

    // Отправка запроса в Telegram
    $response = file_get_contents($url);

    // Проверяем успешность отправки
    if ($response) {
        echo "Сообщение отправлено!";
    } else {
        echo "Ошибка отправки сообщения.";
    }
}
?>
