<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = "���_��������_���_�����";
    $chat_id = "���_CHAT_ID";
    
    // �������� ������ �� �����
    $name = $_POST['name'];
    $inn = $_POST['inn'];
    $region = $_POST['region'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // ��������� ��� ��������
    $message = "����� ���������:\n";
    $message .= "���: " . $name . "\n";
    $message .= "���: " . $inn . "\n";
    $message .= "������/�����: " . $region . "\n";
    $message .= "�������: " . $phone . "\n";
    $message .= "�����: " . $email;

    // URL ��� �������� �������
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat_id . "&parse_mode=HTML&text=" . urlencode($message);

    // �������� ������� � Telegram
    $response = file_get_contents($url);

    // ��������� ���������� ��������
    if ($response) {
        echo "��������� ����������!";
    } else {
        echo "������ �������� ���������.";
    }
}
?>
