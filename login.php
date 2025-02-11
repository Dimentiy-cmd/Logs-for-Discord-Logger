<!DOCTYPE html>
<html>
<head>
  <title>Авторизация в логах</title>
  <style>
    body {
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .container {
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      width: 350px;
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 0 solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
      background-color: #424242;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      width: 100%;
      color: #fffff;                                           
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    form {
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      border: 0 solid;
      background: #233444;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #333;
      color: white;
    }
    .error {
      color: #721c24;
      background-color: #f8d7da;
      text-align: center;
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }
  </style>
</head>
<body>
  <form action="check.php" method="POST">
    <h1 style="color: white">Авторизация в системе логов "Манхарт"</h1>
    <label for="username">Логин</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Пароль</label>
    <input type="password" id="password" name="password" required>
    <!-- {% with messages = get_flashed_messages() %}
      {% if messages %}
          {% for message in messages %}
            <p class="error">{{ message }}</p>
          {% endfor %}
      {% endif %}
    {% endwith %}-->
    <input type="submit" value="Вход">
  </form>
</body>
</html>