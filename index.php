<?php 
session_start();
if (!isset($_SESSION['username'])) header('Location: login.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Разделы логов</title>
</head>
<body>
    <table style="width: auto;">
        <thead>
            <tr>
                <th>Название раздела</th>
                <th>Ссылка</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Логи всех сообщений</td>
                <td><a href="message.php">Перейти в раздел</a></td>
            </tr>
            <tr>
                <td>Логи удаленных сообщений</td>
                <td><a href="del_message.php">Перейти в раздел</a></td>
            </tr>
            <tr>
                <td>Логи редактированных сообщений</td>
                <td><a href="edit_message.php">Перейти в раздел</a></td>
            </tr>
            <tr>
                <td>Логи голосовых каналов</td>
                <td><a href="voice.php">Перейти в раздел</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
