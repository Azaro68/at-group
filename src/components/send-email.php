<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['message' => 'Неверный метод запроса']);
    exit;
}

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

if (empty($name) || empty($phone)) {
    echo json_encode(['message' => 'Заполните все поля']);
    exit;
}

$to = 'mantyr87@gmail.com';
$subject = 'Новая заявка с сайта';
$message = "Имя: $name\nТелефон: $phone";
$headers = "From: no-reply@yourdomain.com\r\n" .
           "Reply-To: no-reply@yourdomain.com\r\n" .
           "Content-Type: text/plain; charset=UTF-8\r\n";

$mailSent = mail($to, $subject, $message, $headers);

if ($mailSent) {
    echo json_encode(['message' => 'Письмо успешно отправлено']);
} else {
    error_log('Mail error: ' . error_get_last()['message']);
    echo json_encode(['message' => 'Ошибка при отправке письма']);
}
?>