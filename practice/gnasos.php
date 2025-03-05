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


$sql = "SELECT nasos.id, nasos.title,nasos.category,nasos.category1,nasos.category2,nasos.category3,nasos.category4,nasos.country, nasos.content, nasos.img,nasos.img1, COALESCE(users.username, nasos.name) AS user_name 
        FROM nasos
        LEFT JOIN users ON nasos.user_id = users.id
        ORDER BY nasos.id DESC";
$result = $conn->query($sql);
if (!$result) {
    die("Ошибка выполнения запроса: " . $conn->error);
}
if ($result->num_rows > 0) {
    echo '<div class="post-links-container">'; 
  
    while($row = $result->fetch_assoc()) {
      
        echo '<div class="post-link" data-category="' . htmlspecialchars($row['category']) . '"
        data-category1="' . htmlspecialchars($row['category1']) . '" 
                data-category2="' . htmlspecialchars($row['category2']) . '"
                data-country="' . htmlspecialchars($row['country']) . '"
                data-category3="' . htmlspecialchars($row['category3']) . '"
                data-category4="' . htmlspecialchars($row['category4']) . '">';
        echo '<a href="product/post_' . $row["id"] . '.php" style="text-decoration: none;">'; 
      
        $imagePath = 'D:/OSPanel/domains/practice/' . $row['img1'];
        if (file_exists($imagePath)){
            echo '<img src="../' . htmlspecialchars($row["img1"]) . '"  width="250" height="200">';}
        echo '<h2>' . htmlspecialchars($row["title"]) . '</h2>';
      
        if (isset($_COOKIE['user'])) {
        
            echo '<p>Автор: ' . htmlspecialchars($row["user_name"]) . '</p>';
        }
        echo '</a>';
        ob_start();
        include './temlate1.php';
        $html_content = ob_get_clean();

        $file_name = "post_" . $row["id"] . ".php";
        $file_path = "product/" . $file_name;
        file_put_contents($file_path, $html_content);
        // Добавление кнопки для удаления если есть cookie
        if (isset($_COOKIE['user'])) { 
            echo '<form action="dnasos.php" method="post" style="margin-top: 10px;">';
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