<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация в логах</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <form method="POST">
            <h1 style="color: white">Авторизация в системе логов</h1>
            <label>Логин</label>
            <input type="text" name="username" required>
            <label>Пароль</label>
            <input type="password" name="password" required>
            <input type="submit" value="Вход">
        </form>
    </div>
    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_set_cookie_params(7200);
        $username = trim($_POST['username']);
        $password = hash('sha256', trim($_POST['password']));

        include 'includes/config.php';
        $mysqli = new mysqli($database_host, $database_user, $database_password, $database_name);
        $result = $mysqli->query("SELECT password FROM a_users WHERE username = '$username'");
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit;
        } else {
            echo "<p style='color: red;'>Неправильный пароль</p>";
        }
    }
    ?>
</body>
</html>
