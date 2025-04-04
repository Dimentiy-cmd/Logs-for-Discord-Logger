<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
include 'includes/config.php';
$mysqli = new mysqli($database_host, $database_user, $database_password, $database_name);
$logs = $mysqli->query("SELECT user_id, username, message_original, message_edits, message_id, time FROM message_edit ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Логи редактированных сообщений</title>
</head>
<body>
    <?php include 'includes/links.php'; ?>
    <table>
        <thead>
            <tr>
                <th>ID автора</th>
                <th>Имя автора</th>
                <th>Оригинал сообщения</th>
                <th>Сообщение</th>
                <th>ID сообщения</th>
                <th>Время</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($logs as $row) {
                echo '<tr>
                    <td>' . htmlspecialchars($row['user_id']) . '</td>
                    <td>' . htmlspecialchars($row['username']) . '</td>
                    <td>' . htmlspecialchars($row['message_original']) . '</td>
                    <td>' . htmlspecialchars($row['message_edits']) . '</td>
                    <td>' . htmlspecialchars($row['message_id']) . '</td>
                    <td>' . htmlspecialchars($row['time']) . '</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
