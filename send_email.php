<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Отримуємо дані з форми
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Параметри для надсилання пошти
  $to = 'gerkyles21@gmail.com'; // Введіть вашу електронну адресу
  $subject = 'Нове повідомлення з форми сайту';
  $body = "Ім'я: $name\nЕлектронна адреса: $email\nПовідомлення: $message";

  // Надсилаємо пошту
  if (mail($to, $subject, $body)) {
    echo 'Повідомлення надіслано успішно!';
  } else {
    echo 'Помилка при надсиланні повідомлення.';
  }
}
?>
