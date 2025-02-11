<?php 
session_start();
if (isset($_SESSION['username']) == false) {
    header('Location: login.php');
} else {
include 'includes/config.php';
$mysqli = new mysqli($database_host, $database_user, $database_password, $database_name);
$pages = $mysqli->query("SELECT name, link FROM a_pages ORDER BY id ASC");
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
      foreach ($pages as $row) {
          echo '<tr>
                  <td>' . $row['name'] . '</td>
                  <td><a href="' . $row['link'] . '">Перейти</a></td>
                </tr>';
        }
    ?>
    </tbody>
</table>
</body>
</html>
<?php } ?>