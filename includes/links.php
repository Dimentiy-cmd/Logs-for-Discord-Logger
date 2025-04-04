<?php
if (!isset($_SESSION['user'])) {
    $current_page = basename($_SERVER['PHP_SELF']);
    echo '<nav>
        <div class="nav-links">
            <a href="message.php" class="' . ($current_page == 'message.php' ? 'active' : '') . '">Все сообщения</a>
            <a href="del_message.php" class="' . ($current_page == 'del_message.php' ? 'active' : '') . '">Удаленные сообщения</a>
            <a href="voice.php" class="' . ($current_page == 'voice.php' ? 'active' : '') . '">Логи голосовых каналов</a>
            <a href="edit_message.php" class="' . ($current_page == 'edit_message.php' ? 'active' : '') . '">Редактированные сообщения</a>
            <a href="exit.php" class="' . ($current_page == 'exit.php' ? 'active' : '') . '">Выход с аккаунта</a>
        </div>
    </nav>';
}
?>