<?php
$servername = "practice";
$username = "root";
$password = ""; 
$dbname = "fulltext"; 

// Проверка наличия параметра post_id в запросе POST
if (isset($_POST['post_id'])) {
    $post_id = $_POST['post_id'];

    // Подключение к базе данных
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // SQL запрос для удаления поста по его id
    $sql = "DELETE FROM nasos WHERE id = $post_id";

    if ($conn->query($sql) === TRUE) {
        header('Location:/catalog.php');
    } else {
        echo "Ошибка при удалении поста: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Не указан идентификатор поста для удаления";
}
?>