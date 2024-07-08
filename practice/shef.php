<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GordonRamsayLoves</title>
    <link rel="shortcut icon" href="path/to/icon.png" />
    <link rel="stylesheet" href="./header.css" />
    <style>
      body {
      padding-top: 85px; /* Отступ сверху, равный высоте header */
    }
     section {
      background-color: #ffffff;
      max-width: 1200px;
      margin: 0 auto 10px; /* Отступы: сверху 0, снизу 50px, авто для центрирования по горизонтали */
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }


    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./style.css" />
    <script src="https://api-maps.yandex.ru/2.1/?apikey=98b95686-dd86-4029-b8f1-40b354e9c474&lang=ru_RU" type="text/javascript"></script>
  
  </head>
  <body>
  <header>
  <div class="brand-header">
    <a class="navbar-brand" href="/index.php">
      <img src="4070419.png" alt="Icon" class="brand-icon">
      GordonRamsayLoves
    </a>
  </div>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-xxl">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Главная</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="company.php" >
              О компании
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="about.php">О нас</a></li>
              <li><a class="dropdown-item" href="contact.php">Контакты</a></li>
              <li><a class="dropdown-item" href="vacance.php">Вакансии</a></li>
              <li><a class="dropdown-item" href="postavka.php">Поставка</a></li>
            </ul>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="map.php">Карта сайта</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="news.php">Новости</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="catalog.php">Каталог насосов</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Контакты</a>
            </li>
        </ul>
        <div class="search-container">
            <button class="search-button" type="button" id="search-button">
              <img src="лупа.png" alt="Icon" class="brand-search">
            </button>
            <input type="text" class="form-control" id="search-input" placeholder="Поиск...">
          </div>
      </div>
      </div>
    </nav>
  </header>
      
 
<section>
  <div class="container">
    <h2>Секция по центру страницы</h2>
    <p>Текст вашей секции...</p>
  </div>
</section>
    
    <footer>
      <p>&copy 2023 by Arturchik</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      / Добавляем обработчики событий для работы dropdown и поиска
  document.addEventListener('DOMContentLoaded', function() {
    const searchButton = document.getElementById('search-button');
    const searchInput = document.getElementById('search-input');

    searchButton.addEventListener('click', function() {
      if (searchInput.classList.contains('show')) {
        searchInput.classList.remove('show');
        searchInput.value = '';
      } else {
        searchInput.classList.add('show');
        searchInput.focus();
      }
    });

    document.addEventListener('click', function(event) {
      if (!searchButton.contains(event.target) && !searchInput.contains(event.target)) {
        searchInput.classList.remove('show');
        searchInput.value = '';
      }
    });

    // Для dropdown
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    dropdownToggles.forEach(function(toggle) {
      toggle.addEventListener('click', function(event) {
        event.preventDefault();
        const dropdownMenu = toggle.nextElementSibling;
        dropdownMenu.classList.toggle('show');
      });
    });
  });
</script>
  </body>
</html>