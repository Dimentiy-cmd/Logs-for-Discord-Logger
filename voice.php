<?php
session_start();
if (isset($_SESSION['username']) == false) {
    header('Location: login.php');
} else {
include 'includes/config.php';
$mysqli = new mysqli($database_host, $database_user, $database_password, $database_name);
$logs = $mysqli->query("SELECT user_id, username, do, channel, time FROM `voice_logs` ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>МАЙОРОВЫ МАНХАРТ | Логи голосовых</title> </head>
<body>
<?php
include 'includes/links.php';
?>
<table>
    <thead>
        <th colspan="5" style="text-align: center;">Логи голосовых каналов</th>
      <tr>
        <th>ID</th><th>Имя пользователя</th><th>Действие</th><th>Канал</th><th>Время</th>
      </tr>
    </thead>
    <tbody>
    <?php
     foreach ($logs as $row) {
        echo '<tr>
                <td>' . $row['user_id'] . '</td>
                <td>' . $row['username'] . '</td>
                <td>' . $row['do'] . '</td>
                <td>' . $row['channel'] . '</td>
                <td>' . $row['time'] . '</td>
            </tr>';
     }
    ?>
    </tbody>
</table>
</body>
</html>
<?php } ?>