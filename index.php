<?php 
session_start();
if (isset($_SESSION['username']) == false) {
    header('Location: login.php');
} else {
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>МАЙОРОВЫ МАНХАРТ</title>
</head>
<body>
<table>
    <thead>
      <tr>
        <th>Название раздела</th><th>Ссылка</th>
      </tr>
    </thead>
    <tbody>
    <?php
      echo '<tr>
              <td>Все сообщения</td>
              <td><a href="message.php">Перейти</a></td>
            </tr>
            <tr>
              <td>Удаленные сообщения</td>
              <td><a href="del_message.php">Перейти</a></td>
            </tr>
            <tr>
              <td>Логи ГС каналов</td>
              <td><a href="voice.php">Перейти</a></td>
            </tr>
            <tr>
              <td>Выход с аккаунта</td>
              <td><a href="exit.php">Перейти</a></td>
            </tr>';
    ?>
    </tbody>
</table>
</body>
</html>
<?php } ?>