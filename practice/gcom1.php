<?php
$servername = "practice";
$username = "root";
$password = ""; 
$dbname = "fulltext"; 

// Подключение к базе данных
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение постов из базы данных с информацией об авторе и изображении
$sql = "SELECT posts.id, posts.title, posts.content, posts.img, COALESCE(users.username, posts.name) AS user_name 
        FROM posts
        LEFT JOIN users ON posts.user_id = users.id
        ORDER BY posts.id DESC LIMIT 3";
$result = $conn->query($sql);
if (!$result) {
    die("Ошибка выполнения запроса: " . $conn->error);
}
if ($result->num_rows > 0) {
    echo '<div class="post-links-container">'; // Обертка для блоков ссылок
    // Создание и сохранение страниц для каждого поста
    while($row = $result->fetch_assoc()) {
        // Генерация содержимого страницы
        echo '<div class="post-link">';
        echo '<a href="generated_pages/post_' . $row["id"] . '.php" style="text-decoration: none;">'; // Добавление стиля
        $imagePath = 'D:/OSPanel/domains/practice/' . $row['img'];
        if (file_exists($imagePath)){
            echo '<img src="../' . htmlspecialchars($row["img"]) . '"  width="250" height="200">';}
        echo '<h2>' . htmlspecialchars($row["title"]) . '</h2>';
        if (isset($_COOKIE['user'])) {
            // Выводим информацию об авторе только для авторизованных пользователей
            echo '<p>Автор: ' . htmlspecialchars($row["user_name"]) . '</p>';
        }
        echo '</a>';
        ob_start();
        include './temlate.php';
        $html_content = ob_get_clean();

        $file_name = "post_" . $row["id"] . ".php";
        $file_path = "generated_pages/" . $file_name;
        file_put_contents($file_path, $html_content);
        // Добавление кнопки для удаления если есть cookie
        if (isset($_COOKIE['user'])) { // замените 'your_cookie_name' на имя вашего cookie
            echo '<form action="delete_post.php" method="post" style="margin-top: 10px;">';
            echo '<input type="hidden" name="post_id" value="' . $row["id"] . '">';
            echo '<button type="submit" class="btn btn-danger btn-sm">Удалить</button>';
            echo '</form>';
        }

        echo '</div>';
    }
    echo '</div>'; // Закрытие обертки
} else {
    echo "Нет постов для создания страниц";
}

$conn->close();
?>
