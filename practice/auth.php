<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Подключение к базе данных
    $servername = "practice";
    $db_username = "root";
    $db_password = "";
    $dbname = "fulltext";

    // Создаем соединение
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Проверяем соединение
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Защита от SQL-инъекций
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // SQL-запрос для получения пользователя
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Получаем данные пользователя
        $row = $result->fetch_assoc();

        // Проверяем пароль (для незахешированного пароля)
        if ($password == $row['password']) {
            // Устанавливаем Cookie на 1 час
            setcookie('user', $username, time() + 3600, '/');
            // Перенаправляем пользователя на главную страницу или куда-то еще
            header('Location:/');
            exit();
        } else {
            echo '<script>alert("Неправильный логин или пароль!");</script>';
        }
    } else {
        echo '<script>alert("Неправильный логин или пароль!");</script>';
    }

    // Закрываем соединение
    $conn->close();
}
?>
