<?php
// Проверяем, был ли отправлен ответ
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем ответ на вопрос "Сосал?"
    $sosal = $_POST['sosal'] ?? '';

    // Перенаправляем в зависимости от ответа
    if ($sosal === 'Да') {
        header('Location: result.php'); // Перенаправление на result.php
        exit;
    } else {
        header('Location: net.php'); // Перенаправление на main.php
        exit;
    }
} else {
    // Если пользователь зашел напрямую, перенаправляем на главную
    header('Location: main.php');
    exit;
}
?>