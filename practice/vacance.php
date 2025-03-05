<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>"Дора" — Поиск</title>
    <link rel="icon" href="water_pump_icon_229881.ico">
    <link rel="stylesheet" href="/header.css" !important;/>
    <style>
       .sticky-header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background-color: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    height: 60px; /* Уменьшаем высоту на 60px */
    display: none;
    padding-top: 0; /* Убираем отступ сверху */
}

     .copyright {
    color: white; /* Цвет текста */
}
      .brand-icon {
    width: 125px; /* Задайте нужный размер значка */
    height: 125px; /* Задайте нужный размер значка */
    margin-right: 32px; /* Отступ справа от значка */
    margin-left: 32px; /* Отступ справа от значка */
  }
  .brand-icon1 {
    width: 46px; /* Задайте нужный размер значка */
    height: 32px; /* Задайте нужный размер значка */
    margin-right: 0px; /* Отступ справа от значка */
    margin-left: 15px; /* Отступ справа от значка */
  }
      body {
        padding-top: 85px; /* Отступ сверху, равный высоте header */
      }
      section {
        background-color: #ffffff;
        max-width: 1200px;
        margin: 0 auto 10px; /* Отступы: сверху 0, снизу 50px, авто для центрирования по горизонтали */
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding-top: 95px; /* Отступ сверху, равный высоте header */}
      .preserve-whitespace {
        white-space: pre-wrap; /* Сохраняем пробелы и переносы строк */
      }
      .carousel-item {
        height: 32rem;
        background:#000;
        color:white;
        position: relative;
        background-position:center;
        background-size:cover;
      }
      .container{
        position:absolute;
        bottom:0;
        left:0;
        right:0;
        padding-bottom: 50px;
      }
      .overlay-image{
        position:absolute;
        bottom:0;
        left:0;
        right:0;
        top:0;
        background-position:center;
        background-size:cover;
        opacity:0.5;
        background-repeat: no-repeat;
      }
      .link-container {
        width: 224px;
        height: 114px; /* Автоматическая высота */
        background-color: #898c8a; /* Серый цвет фона для области ссылок */
        display: block;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        margin-bottom: 10px;
        margin-right: 20px; /* Уменьшенный отступ справа */
        margin-left: 200px; /* Сдвиг влево */
        margin-top: -220px; /* Поднятие вверх */
      }

      .featurette-text {
          margin-bottom: 10px; /* Отступ снизу между блоками */
      }

      .featurette-text a {
          display: block; /* Делаем ссылки блочными элементами */
          padding: 5px; /* Внутренний отступ вокруг текста ссылки */
          color: black; /* Цвет ссылок */
          line-height: 0.55; /* Высота строки */
      }

      .row.featurette {
        display: flex;
        align-items: center;
        flex-wrap: wrap; /* Разрешаем перенос элементов */
        margin-left: -250px; /* Сдвиг влево */
      }
      .col-md-7 {
        flex: 1;
        min-width: 200px; /* Минимальная ширина для адаптивности */
      }
      .col-md-5 {
        flex: 0.5;
        min-width: 200px; /* Минимальная ширина для адаптивности */
      }
      .brand-header .tagline {
        font-size: 0.8em; 
        margin-top: 70px; 
        margin-left: -690px; 
        color: black; 
        position: relative;
        
      }
      .brand-header .contact-info1 {
        position: absolute; /* Абсолютное позиционирование */
        left: 950px; /* Сдвиг влево */
        top: 30%; /* Вертикальное выравнивание */
        transform: translateY(-50%); /* Центрирование по вертикали */
        font-size: 0.6em; 
      }
      .brand-header .contact-info2 {
        position: absolute; /* Абсолютное позиционирование */
        left: 1000px; /* Сдвиг влево */
        top: 15%; /* Вертикальное выравнивание */
        transform: translateY(-50%); /* Центрирование по вертикали */
        font-size: 0.6em; 
      }
      .sticky-header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background-color: white; /* Убедитесь, что фон совпадает с цветом заголовка */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Тень для визуального отделения */
    display: none; /* Изначально скрыта */
}
.search-button1 {
          width: 30px; /* Размер кнопки поиска */
          height: 30px; /* Размер кнопки поиска */
          display: flex;
          align-items: center;
          justify-content: center;
          border: 1px solid #ccc; /* Граница кнопки */
          border-radius: 4px; /* Радиус границы кнопки */
          background-color: #f8f9fa; /* Цвет фона кнопки */
          cursor: pointer;
        }
        .search-button1 img {
          width: 20px; /* Задайте нужный размер значка */
          height: 20px; /* Задайте нужный размер значка */
        }

        /* Стили для модального окна */
        .modal-content {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        /* Плавный переход для кнопки Вход */
        .login-btn {
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #007bff;
        }
        body.modal-open {
            overflow-y: hidden;
            padding-right: 0 !important;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
/* Стили для контейнера блоков ссылок */
.post-links-container {
    display: block; /* Размещаем дочерние элементы по вертикали */
    gap: 20px; /* Расстояние между блоками */
}

/* Стили для каждого блока ссылки */
.post-link {
    background-color: #f0f0f0; /* Цвет фона */
    padding: 20px; /* Внутренние отступы */
    border-radius: 10px; /* Закругление углов */
    margin-bottom: 20px; /* Расстояние между блоками */
    display: flex; /* Для размещения элементов внутри блока в ряд */
    align-items: center; /* Вертикальное выравнивание */
}

.post-link img {
    margin-right: 20px; /* Расстояние между картинкой и текстом */
    width: 150px; /* Ширина изображения */
    height: auto; /* Автоматическая высота для сохранения пропорций */
}

.post-link h2 {
    font-size: 1.5em; /* Размер заголовка */
    margin-bottom: 10px; /* Расстояние между заголовком и текстом */
    color: black; /* Цвет текста кнопки */
}

.post-link p {
    color: black; /* Цвет текста */
}
.post-link .details-button {
    color: black; /* Цвет текста кнопки */
    text-decoration: none; /* Удаление подчеркивания при наведении */
}
.navbar-nav .nav-item {
        margin-right: 30px;
      }
      .footer-container {
            display: flex;
            justify-content: space-around;
            color: white;
        }

        .footer-column {
            flex: 1;
            padding: 0 20px;
        }

        .footer-column p {
            margin: 5px 0;
        }
        footer {
            background-color: black;
            box-shadow: 0 0px 10px rgba(0, 0, 0, 0.1);
            padding:0;
            text-align: center;
            position: relative
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            max-width: 1200px;
            width: 100%;
            z-index: 1000;
            border-top: 1px solid #ccc;
            margin-top: auto; /* Позволяет футеру находиться внизу страницы */
            margin-bottom: 0; /* Убедитесь, что у футера нет нижнего отступа */
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
  <body style="background-color:#0f5e9c;">
    <header>
        <div class="brand-header">
            <a class="navbar-brand" href="/index.php">
              <img src="/4070419.png" alt="Icon" class="brand-icon">
            </a>
            <p1 class="company-name" style="font-size: 1.5em; color: #0f3e8c;">ЗАО Производственная фирма «Дора» </p1>
            <p2 class="tagline">Новейшие технологии</p2>
            <p3 class="contact-info1">Телефон: +7 (XXX) XXX-XX-XX</p3>
            <p4 class="contact-info2">Email: info@dora.com</p4>
            <?php if (!isset($_COOKIE['user'])): ?>
                <form class="d-flex" style="position: absolute; right: -80px; top: 10px;">
                    <button class="btn btn-primary me-2" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Войти</button>
                </form>
            <?php else: ?>
                <div class="dropdown" style="position: absolute; right: -80px; top: 10px;">
                    <img src="/зареган.png" alt="Изображение" style="border-radius: 5%; width: 60px; height: 60px; border: 2px solid black; object-fit: cover; object-position: center;">
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="/exit.php">Выйти</a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-xxl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/index.php">Главная</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="/company.php">О компании</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/about.php">Консультация</a></li>
                    <li><a class="dropdown-item" href="/contact.php">Контакты</a></li>
                    <li><a class="dropdown-item" href="/vacance.php">Вакансии</a></li>
                    
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="/news.php">Новости</a></li>
                <li class="nav-item"><a class="nav-link" href="/catalog.php">Каталог насосов</a></li>
                <li class="nav-item"><a class="nav-link" href="/postavka.php">Поставка</a></li>
              </ul>
              <div class="search-container">
                <button class="search-button" type="button" id="search-button"><img src="/лупа.png" alt="Icon" class="brand-search"></button>
                <form action="/search.php" method="post"><input type="text" class="form-control" id="search-input" placeholder="Поиск..." name="query"></form>
              </div>
            </div>
          </div>
        </nav>
    </header>
    <header class="sticky-header">
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
                <a class="navbar-brand" href="/index.php">
                  <img src="4070419.png" alt="Icon" class="brand-icon1">
                </a>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Главная</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="company.php">О компании</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="about.php">Консультация</a></li>
                    <li><a class="dropdown-item" href="contact.php">Контакты</a></li>
                    <li><a class="dropdown-item" href="vacance.php">Вакансии</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news.php">Новости</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="catalog.php">Каталог насосов</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/postavka.php">Поставка</a>
                </li>
              </ul>
              <div class="search-container">
                <button class="search-button" type="button" id="search-button-sticky">
                  <img src="лупа.png" alt="Icon" class="brand-search">
                </button>
                <form action="search.php" method="post" >
                  <input type="text" class="form-control" id="search-input-sticky" placeholder="Поиск..." name="query">
                </form>
              </div>
            </div>
          </div>
        </nav>
    </header>
     <!-- Модальное окно для авторизации -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Авторизация</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/auth.php" method="post">
          <input type="text" class="form-control mb-3" name="username" id="username" placeholder="Введите логин">
          <input type="password" class="form-control mb-3" name="password" id="password" placeholder="Введите пароль">
          <button class="btn btn-success">Войти</button>
        </form>
      </div>
    </div>
  </div>
</div>
<section style="margin-bottom: 0;">
<h2>Вакансии</h2>
        <p><strong>1. Секретарь для работы в офисе</strong></p>
        <ul>
            <li>Опыт работы по профессии – несколько лет</li>
            <li>Знание делопроизводства</li>
            <li> Интерес к профессии</li>
            <li>Работа с компьютером (MS-Office, e-mail)</li>
            <li>Контактность, желание работать в коллективе</li>
            <li>Без вредных привычек</li>
        </ul>
        <p><strong>2. Специалист по лопастным и объемным насосам</strong></p>
        <ul>
            <li>Опыт работы по профессии – несколько лет</li>
            <li>Знание особенностей конструкции насосов</li>
            <li>Технические расчеты</li>
            <li>Интерес к профессии</li>
            <li>Контактность, желание работать в коллективе</li>
            <li>Опыт публикаций в печати и выступлений по техническим вопросам</li>
            <li> Без вредных привычек</li>
        </ul>
        <p><strong>3. Специалист по торцовым уплотнениям валов насосов</strong></p>
        <ul>
            <li>Опыт работы с насосами – несколько лет</li>
            <li>Английский язык – технический (желательно – разговорный)</li>
            <li>Интерес к профессии</li>
            <li>Контактность, желание работать в коллективе</li>
            <li>Опыт публикаций в печати и выступлений по техническим вопросам</li>
            <li>Без вредных привычек</li>
        </ul>
        <p><strong>4. Менеджер по продажам насосного оборудования</strong></p>
        <ul>
            <li>Опыт работы с насосами – несколько лет</li>
            <li>Знание номенклатуры насосов</li>
            <li>Интерес к профессии</li>
            <li>Контактность, желание работать в коллективе</li>
            <li>Работа с компьютером (MS-Office, e-mail)</li>
            <li> Без вредных привычек</li>
        </ul>
        <p><strong>5. Менеджер по продажам торцовых уплотнений валов</strong></p>
        <ul>
            <li>Знание номенклатуры уплотнений</li>
            <li>Интерес к профессии</li>
            <li>Контактность, желание работать в коллективе</li>
            <li>Работа с компьютером (MS-Office, e-mail)</li>
            <li>Без вредных привычек</li>
        </ul>
</section>
<footer style="background-color:black;position: relative;margin-top: 0;">
<div class="footer-container">
<div class="footer-column">
            <p style="color:white;">Адрес:</p>
            <p style="color:white;">198095, Россия, г. Санкт-Петербург,<br>
               ул. Трамвайный пр., д. 6, Лит. А</p>
        </div>
        <div class="footer-column">
            <p style="color:white;">Телефон:</p>
            <p style="color:white;">+7 (XXX) XXX-XX-XX</p>
        </div>
        <div class="footer-column">
            <p style="color:white;">Email:</p>
            <p style="color:white;">info@dora.com</p>
        </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzA8rQ0PzbgI4WhDVSoc7SC5LbLK78Gdf0xok5RASZX" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93q0I==2JvkxVi+o8gie3Ir+ljXE57pZRI4lQ8Q8gS5w2yFiN0iWmRY/++e0J8" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script>
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
      });
      document.addEventListener('DOMContentLoaded', function() {
    const stickyHeader = document.querySelector('.sticky-header');
    const originalHeader = document.querySelector('header');

    window.addEventListener('scroll', function() {
        if (window.scrollY > originalHeader.offsetHeight) {
            stickyHeader.style.display = 'block';
        } else {
            stickyHeader.style.display = 'none';
        }
    });

    // Обработчики для кнопки поиска
    const searchButtonSticky = document.getElementById('search-button-sticky');
    const searchInputSticky = document.getElementById('search-input-sticky');

    searchButtonSticky.addEventListener('click', function() {
        if (searchInputSticky.classList.contains('show')) {
            searchInputSticky.classList.remove('show');
            searchInputSticky.value = '';
        } else {
            searchInputSticky.classList.add('show');
            searchInputSticky.focus();
        }
    });

    document.addEventListener('click', function(event) {
        if (!searchButtonSticky.contains(event.target) && !searchInputSticky.contains(event.target)) {
            searchInputSticky.classList.remove('show');
            searchInputSticky.value = '';
        }
    });
});
function showDropdown() {
        document.querySelector('.dropdown-menu').style.display = 'block';
    }

    function hideDropdown() {
        document.querySelector('.dropdown-menu').style.display = 'none';
    }

    document.addEventListener('DOMContentLoaded', function() {
        const dropdownItems = document.querySelectorAll('.dropdown-item');

        dropdownItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Удаляем класс 'active' у всех пунктов
                dropdownItems.forEach(function(el) {
                    el.classList.remove('active');
                });

                // Добавляем класс 'active' только к выбранному пункту
                this.classList.add('active');
            });
        });
    });
    </script>
  </body>
</html>
