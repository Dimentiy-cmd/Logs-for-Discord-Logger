<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
} else {
echo '<nav>
        <a href="message.php">Все сообщения</a>
        <a href="del_message.php">Удаленные сообщения</a>
        <a href="voice.php">Логи ГС каналов</a>
        <a href="exit.php">Выход с аккаунта</a>
      </nav>';
}
?>