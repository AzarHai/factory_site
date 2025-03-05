<?php
// Подключение к базе данных
$servername = "practice";
$username = "root";
$password = ""; 
$dbname = "fulltext"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Предположим, что у вас есть переменная с именем пользователя из Cookie или сессии
if (isset($_COOKIE['user'])) {
    $name = $_COOKIE['user']; // Получаем имя пользователя из Cookie
}

// Обработка отправки поста
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"]; // Получаем значение заголовка из POST-запроса
    $content = nl2br($_POST["content"]); // Получаем значение содержания из POST-запроса
    $category = $_POST["category"]; // Получаем значение заголовка из POST-запроса
    $category1 = $_POST["category1"]; // Получаем значение заголовка из POST-запроса
    $category2 = $_POST["category2"]; // Получаем значение заголовка из POST-запроса
    $category3 = $_POST["category3"]; // Получаем значение заголовка из POST-запроса
    $category4 = $_POST["category4"]; // Получаем значение заголовка из POST-запроса
    $country = $_POST["country"]; // Получаем значение заголовка из POST-запроса

    // Проверяем, загружено ли основное изображение
    if (isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_destination = 'uploads/' . $file_name; // Путь для сохранения файла (uploads/ - это папка, куда файл будет сохранен)

        // Перемещаем файл из временной директории в желаемую директорию (uploads/)
        move_uploaded_file($file_tmp, $file_destination);

        // Проверяем, загружено ли превью изображение
        if (isset($_FILES['image1'])) {
            $file_name1 = $_FILES['image1']['name'];
            $file_tmp1 = $_FILES['image1']['tmp_name'];
            $file_destination1 = 'uploads/' . $file_name1; // Путь для сохранения превью файла

            // Перемещаем превью файл из временной директории в желаемую директорию (uploads/)
            move_uploaded_file($file_tmp1, $file_destination1);

            // Вставляем данные в таблицу posts с указанием имени пользователя, заголовка, содержания и путей к изображениям
            $sql = "INSERT INTO nasos (name, title, content, img, img1,category,category1,category2,country,category3,category4) VALUES ('$name', '$title', '$content', '$file_destination', '$file_destination1','$category','$category1','$category2','$country','$category3','$category4')";

            if ($conn->query($sql) === TRUE) {
                // Успешно добавлено в базу данных
                echo "Пост успешно сохранен!";
            } else {
                // Ошибка при добавлении
                echo "Ошибка: " . $sql . "<br>" . $conn->error;
            }
        } else {
            // Обработка случая, если превью изображение не было загружено
            echo "Превью изображение не загружено.";
        }
    } else {
        // Обработка случая, если основное изображение не было загружено
        echo "Основное изображение не загружено.";
    }
}

$conn->close();
?>