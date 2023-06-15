<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "gerkyles21@gmail.com"; // Введіть свою адресу електронної пошти для отримання повідомлень
  $subject = "Нове повідомлення з форми";

  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

  $mailBody = "
    <h2>Нове повідомлення</h2>
    <p><strong>Ім'я:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Повідомлення:</strong> $message</p>
  ";

  if (mail($to, $subject, $mailBody, $headers)) {
    echo "Повідомлення успішно надіслано.";
  } else {
    echo "Виникла помилка при відправці повідомлення.";
  }
}
?>
