<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
} else {
    include 'config.php';
    $mysqli = new mysqli($database_host, $database_user, $database_password, $database_name);
    $pages = $mysqli->query("SELECT name, link FROM a_pages ORDER BY id ASC");

    echo '<nav>';
    if ($pages) {
        foreach ($pages as $row) {
            echo '<a href="' . htmlspecialchars($row['link']) . '">' . htmlspecialchars($row['name']) . '</a>';
        }
    }
    echo '</nav>';
}
?>