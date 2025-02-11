<?php
session_start();
if (isset($_SESSION['username']) == false) {
    header('Location: login.php');
} else {
include 'includes/config.php';
$mysqli = new mysqli($database_host, $database_user, $database_password, $database_name);
$logs = $mysqli->query("SELECT user_id, username, message, time FROM delete_messages ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>МАЙОРОВЫ МАНХАРТ | Логи удаленных сообщений</title> </head>
<body>
<?php
include 'includes/links.php';
?>
<table>
    <thead>
        <th colspan="4" style="text-align: center;">Логи удаленных сообщений</th>
      <tr>
        <th>ID автора</th><th>Имя автора</th><th>Сообщение</th><th>Время</th>
      </tr>
    </thead>
    <tbody>
    <?php
     foreach ($logs as $row) {
        echo '<tr>
                <td>' . $row['user_id'] . '</td>
                <td>' . $row['username'] . '</td>
                <td>' . $row['message'] . '</td>
                <td>' . $row['time'] . '</td>
            </tr>';
     }
    ?>
    </tbody>
</table>
</body>
</html>
<?php } ?>