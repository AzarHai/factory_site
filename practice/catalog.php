<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>"Дора" — Новости</title>
    <link rel="icon" href="water_pump_icon_229881.ico">
    <link rel="stylesheet" href="./header.css"/>
    <style>
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
      .sticky-header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background-color: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    height: 60px; 
    display: none;
    padding-top: 0; 
}
      .brand-icon {
    width: 125px;
    height: 125px; 
    margin-right: 32px; 
    margin-left: 32px; 
  }
  .brand-icon1 {
    width: 46px; 
    height: 32px; 
    margin-right: 0px; 
    margin-left: 15px; 
  }
      body {
        padding-top: 85px; 
      }
      section {
        background-color: #ffffff;
        max-width: 1200px;
        margin: 0 auto 10px; 
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding-top: 95px; 
      }
      .preserve-whitespace {
        white-space: pre-wrap;
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
        height: 114px; 
        background-color: #898c8a; 
        display: block;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        margin-bottom: 10px;
        margin-right: 20px; 
        margin-left: 200px;
        margin-top: -220px; 
      }

      .featurette-text {
          margin-bottom: 10px; 
      }

      .featurette-text a {
          display: block; 
          padding: 5px;
          color: black; 
          line-height: 0.55; 
      }

      .row.featurette {
        display: flex;
        align-items: center;
        flex-wrap: wrap; 
        margin-left: -250px; 
      }
      .col-md-7 {
        flex: 1;
        min-width: 200px; 
      }
      .col-md-5 {
        flex: 0.5;
        min-width: 200px; 
      }
      .brand-header .tagline {
        font-size: 0.8em; 
        margin-top: 70px; 
        margin-left: -690px; 
        color: black; 
        position: relative;
        
      }
      .brand-header .contact-info1 {
        position: absolute; 
        left: 950px; 
        top: 30%;
        transform: translateY(-50%); 
        font-size: 0.6em; 
      }
      .brand-header .contact-info2 {
        position: absolute;
        left: 1000px; 
        top: 15%; 
        transform: translateY(-50%); 
        font-size: 0.6em; 
      }
      .sticky-header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background-color: white; 
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
    display: none; 
}
.search-button1 {
          width: 30px; 
          height: 30px; 
          display: flex;
          align-items: center;
          justify-content: center;
          border: 1px solid #ccc; 
          border-radius: 4px; 
          background-color: #f8f9fa; 
          cursor: pointer;
        }
        .search-button1 img {
          width: 20px; 
          height: 20px;
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
            display: flex; 
            flex-wrap: wrap; 
            gap: 20px; 
            justify-content: center; 
        }

        /* Стили для каждого блока ссылки */
        .post-link {
            background-color: #f0f0f0; 
            padding: 20px; 
            border-radius: 10px; 
            flex: 1 0 300px; 
            max-width: 300px; 
        }

        .post-link h2 {
            font-size: 1.5em; 
            margin-bottom: 10px; 
        }

        .post-link p {
            color: black; 
            
        }
        .post-link {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            flex: 1 0 300px;
            max-width: 300px;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .post-link:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); 
            transform: scale(1.05); 
        }

        .post-link img {
            transition: transform 0.3s ease; 
        }

        .post-link:hover img {
            transform: scale(1.2); 
        }
        .more-content {
                    display: none;
        }
        .read-more-button, .read-less-button {
            color: blue;
            cursor: pointer;
            margin-top: 5px;
        }
        .read-more-button {
            display: inline;
        }
        .read-less-button {
            display: none;
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
        /* Стили для кнопки */
        .btn-custom {
            margin-left: 800px; /* Регулируемое значение для сдвига вправо */
        }
        #filter-section-container {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa; /* Фон для наглядности */
        }
        #filter-section-container1 {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white; /* Фон для наглядности */
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
              <img src="4070419.png" alt="Icon" class="brand-icon">
            </a>
            <p1 class="company-name"style="font-size: 1.5em;color: #0f3e8c;" >ЗАО Производственная фирма «Дора» </p1>
            <p2 class="tagline">Новейшие технологии</p2>
            <p3 class="contact-info1">Телефон: +7 (XXX) XXX-XX-XX</p3>
            <p4 class="contact-info2">Email: info@dora.com</p4>
            <?php
            if (!isset($_COOKIE['user'])) {
                echo '<form class="d-flex" style="position: absolute; right: -80px; top: 10px;">';
                echo '<button class="btn btn-primary me-2" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Войти</button>';
                echo '</form>';
            } else {
                echo '<div class="dropdown" style="position: absolute; right: -80px; top: 10px;">';
                echo '<img src="зареган.png" alt="Изображение" style="border-radius: 5%; width: 60px; height: 60px; border: 2px solid black; object-fit: cover; object-position: center;">';
                echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                echo '<li><a class="dropdown-item" href="/exit.php">Выйти</a></li>';
                echo '</ul>';
                echo '</div>';
            }
            ?>
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
                <button class="search-button" type="button" id="search-button">
                  <img src="лупа.png" alt="Icon" class="brand-search">
                </button>
                <form action="search.php" method="post">
                  <input type="text" class="form-control" id="search-input" placeholder="Поиск..." name="query">
                </form>
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
                    <button class="search-button1" type="button" id="search-button-sticky">
                      <img src="лупа.png" alt="Icon" class="brand-search">
                    </button>
                    <form action="search.php" method="post">
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
    <div class="container-xxl">
    <h1>Каталог насосов</h1>
                  <form id="post-form" method="post" onsubmit="return validateForm() && submitComment()">
      <?php if (!isset($_COOKIE['user'])): ?>
          
      <?php else: ?>
                      <div class="form-group">
                          <label for="title">Заголовок:</label>
                          <input type="text" class="form-control" id="title" name="title">
                      </div>
                      <div class="form-group mt-3">
                          <label for="content">Содержание:</label>
                          <textarea class="form-control" id="content" name="content" style="resize: none;height:300px;"></textarea>
                          <!-- Добавление стиля для отключения изменения размера текстового поля -->
                      </div>
                      <div class="form-group mt-3">
                      <label for="image">Изображение:</label>
                      <input type="file" class="form-control" id="image" name="image" style="width:500px;">
                      </div>
                      <div class="form-group mt-3">
                          <label for="image1">Превьюшка:</label>
                          <input type="file" class="form-control" id="image1" name="image1" style="width:500px;">
                      </div>
                      <div id="filter-section-container1">
                      <div class="form-group mt-3">
                    <label for="category">Категория насоса по отрасли:</label>
                    <select class="form-control" id="category" name="category" style="width:150px;">
                        <option value="Производство удобрений">Производство удобрений</option>
                        <option value="Строительные компании">Строительные компании</option>
                        <option value="Химические заводы">Химические заводы</option>
                        <option value="Фармацевтические компании">Фармацевтические компании</option>
                        <option value="ГОК/Металлургия">ГОК/Металлургия</option>
                        <option value="Производство бытовой техники/косметики">Производство бытовой техники/косметики</option>
                        <option value="ЦБК/Бумажные комбинаты">ЦБК/Бумажные комбинаты</option>
                    </select>
                </div>
                <div class="form-group mt-3" style="margin-left:15px;">
                    <label for="country" >Категория насоса по стране:</label>
                    <select class="form-control" id="country" name="country" style="width:150px;">
                          <option value="Китай">Китай</option>
                          <option value="Индия">Индия</option>
                          <option value="Италия">Италия</option>
                          <option value="Россия">Россия</option>
                          <option value="Германия">Германия</option>
                      </select>
                </div>
                <div class="form-group mt-3">
                    <label for="category1" style="margin-left:15px;">Категория насоса по конструкции:</label>
                    <select class="form-control" id="category1" name="category1" style="width:150px;margin-left:15px;">
                          <option value="Вихревые насосы">Вихревые насосы</option>
                          <option value="Дренажные насосы">Дренажные насосы</option>
                          <option value="Ламинарные насосы">Ламинарные насосы</option>
                          <option value="Объемные насосы">Объемные насосы</option>
                          <option value="Скваженные насосы">Скваженные насосы</option>
                          <option value="Насосы для вакуум-выпарных установок">Насосы для вакуум-выпарных установок</option>
                          <option value="Пневмоприводные мембранные насосы">Пневмоприводные мембранные насосы</option>
                          <option value="Центробежные консольные насосы">Центробежные консольные насосы</option>
                          <option value="Циркуляционные «ин-лайн» насосы">Циркуляционные «ин-лайн» насосы</option>
                      </select>
                </div>
                <div class="form-group mt-3">
                    <label for="category2">Категория погруженность под уровень:</label>
                    <select class="form-control" id="category2" name="category2" style="width:150px;">
                          <option value="Поверхностные несамовсасывающие насосы">Поверхностные несамовсасывающие насосы</option>
                          <option value="Поверхностные самовсасывающие насосы">Поверхностные самовсасывающие насосы</option>
                          <option value="Погружные насосы">Погружные насосы</option>
                          <option value="Универсальные насосы">Универсальные насосы</option>
                      </select>
                </div>
                <div class="form-group mt-3">
                    <label for="category3">Категория количество рабочих колес:</label>
                    <select class="form-control" id="category3" name="category3" style="width:150px;">
                          <option value="Многоступенчатые насосы">Многоступенчатые насосы</option>
                          <option value="Одноступенчатые насосы">Одноступенчатые насосы</option>
                      </select>
                </div>
                <div class="form-group mt-3">
                    <label for="category4">Категория конструкция рабочего класса:</label>
                    <select class="form-control" id="category4" name="category4" style="width:150px;">
                                      <option value="Насосы с вихревым рабочим колесом">Насосы с вихревым рабочим колесом</option>
                                      <option value="Насосы с гибким рабочим колесом">Насосы с гибким рабочим колесом</option>
                                      <option value="Насосы с дисковым рабочим колесом">Насосы с дисковым рабочим колесом</option>
                                      <option value="Насосы с закрытым рабочим колесом">Насосы с закрытым рабочим колесом</option>
                                      <option value="Насосы с открытым рабочим колесом">Насосы с открытым рабочим колесом</option>
                      </select>
                </div>
      </div>
                      <button type="submit" class="btn btn-primary btn-block mt-3">Добавить пост</button>
                      <!-- Использование класса btn-block для кнопки, чтобы она занимала всю доступную ширину -->
                  </form>
                  <?php endif; ?>
                  <p>
        Оборудование применяется для перекачки нейтральных, агрессивных и взрывоопасных жидкостей — нефти, растворителей (ацетон, толуол), щелочи, кислоты малой и высокой химической активности (азотная кислота, серная кислота, фосфорная кислота и др.). Температура жидкостей может быть высокой, поэтому комплектующие насоса должны обладать повышенной прочностью и стойкостью к воздействию температур.
    </p>
    <span class="more-content">
        <p>
            По типу оборудования насосы подразделяются на следующие категории:
            <ul>
                <li>ламинарные насосы ОНЛ - допускают транспортировку среды с содержанием твердых компонентов до 40...50 мм при их концентрации до 45%;</li>
                <li>центробежные моноблочные химические насосы ХМ — размер твердых включений не должен превышать 0,2 мм при максимальной их концентрации 0,1 мм;</li>
                <li>самовсасывающие моноблочные центробежные насосы ХМс и вихревые ВКс  — откачивание из емкостей сверху, высота самовсасывания до 8 метров;</li>
                <li>погружные пневмоприводные Хаски - герметичные самовсасывающие.</li>
            </ul>
        </p>
        <p>
            Технико-эксплуатационные особенности химически стойких насосов:
            <ul>
                <li>применяется нержавеющая сталь марок К, Е, устойчивых к воздействию химических веществ;</li>
                <li>схема и тип торцового уплотнения подбирается с учетом требований безопасности согласно требованиям производства;</li>
                <li>надежные торцовые уплотнения фирмы Джон Крейн. Материал пар трения, уплотнительных элементов выбирается в соответствии с перекачиваемой жидкостью и условий эксплуатации;</li>
                <li>использование взрывозащищенных электродвигателей надежных электрозаводов, и материалов, исключающих искрообразование;</li>
                <li>камера обогрева горячей водой или паром, электрообогрев.</li>
            </ul>
        </p>
    </span>
    </p>
    <span class="read-more-button">Читать далее</span>
    <span class="read-less-button" style="display:none;">Свернуть</span>
    <button type="button" class="btn btn-primary mt-3 btn-custom" onclick="toggleFilters()">Показать/Скрыть фильтры</button>
    
<section34 id="filter-section" style="display: none;">
<div id="filter-section-container">
              <div class="form-group mt-3">
                  <label for="categoryFilter">Фильтр по категории:</label>
                  <select class="form-control" id="categoryFilter" name="categoryFilter" onchange="filterPosts()" style="width:100px;">
                      <option value="all">Все</option>
                      <option value="Производство удобрений">Производство удобрений</option>
                      <option value="Строительные компании">Строительные компании</option>
                      <option value="Химические заводы">Химические заводы</option>
                      <option value="Фармацевтические компании">Фармацевтические компании</option>
                      <option value="ГОК/Металлургия">ГОК/Металлургия</option>
                      <option value="Производство бытовой техники/косметики">Производство бытовой техники/косметики</option>
                      <option value="ЦБК/Бумажные комбинаты">ЦБК/Бумажные комбинаты</option>
                  </select>
              </div>
              <div class="form-group mt-3">
                  <label for="countryFilter" style="margin-right: 10px;">Фильтр по стране:</label>
                  <select class="form-control" id="countryFilter" name="countryFilter" onchange="filterPosts()" style="width:100px;margin-right: 10px;">
                      <option value="all">Все</option>
                      <option value="Китай">Китай</option>
                      <option value="Индия">Индия</option>
                      <option value="Италия">Италия</option>
                      <option value="Россия">Россия</option>
                      <option value="Германия">Германия</option>
                  </select>
              </div>
              <div class="form-group mt-3">
                  <label for="categoryFilter1" style="margin-left: 10px;">Фильтр по конструкции:</label>
                  <select class="form-control" id="categoryFilter1" name="categoryFilter1" onchange="filterPosts()" style="width:100px; margin-left: 10px;">
                  <option value="all">Все</option>
                                    <option value="Вихревые насосы">Вихревые насосы</option>
                                    <option value="Дренажные насосы">Дренажные насосы</option>
                                    <option value="Ламинарные насосы">Ламинарные насосы</option>
                                    <option value="Объемные насосы">Объемные насосы</option>
                                    <option value="Скваженные насосы">Скваженные насосы</option>
                                    <option value="Насосы для вакуум-выпарных установок">Насосы для вакуум-выпарных установок</option>
                                    <option value="Пневмоприводные мембранные насосы">Пневмоприводные мембранные насосы</option>
                                    <option value="Центробежные консольные насосы">Центробежные консольные насосы</option>
                                    <option value="Циркуляционные «ин-лайн» насосы">Циркуляционные «ин-лайн» насосы</option>
                  </select>
                </div>
                <div class="form-group mt-3">
                    <label for="categoryFilter2">Фильтр по погруженности под уровень:</label>
                    <select class="form-control" id="categoryFilter2" name="categoryFilter2" onchange="filterPosts()" style="width:100px;">
                    <option value="all">Все</option>
                    <option value="all">Все</option>
                                      <option value="Поверхностные несамовсасывающие насосы">Поверхностные несамовсасывающие насосы</option>
                                      <option value="Поверхностные самовсасывающие насосы">Поверхностные самовсасывающие насосы</option>
                                      <option value="Погружные насосы">Погружные насосы</option>
                                      <option value="Универсальные насосы">Универсальные насосы</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="categoryFilter3">Фильтр по количеству рабочих колес:</label>
                    <select class="form-control" id="categoryFilter3" name="categoryFilter3" onchange="filterPosts()" style="width:100px;">
                          <option value="all">Все</option>
                          <option value="Многоступенчатые насосы">Многоступенчатые насосы</option>
                          <option value="Одноступенчатые насосы">Одноступенчатые насосы</option>                
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="categoryFilter4">Фильтр по конструкции рабочих колес:</label>
                    <select class="form-control" id="categoryFilter4" name="categoryFilter4" onchange="filterPosts()" style="width:100px;">
                                      <option value="all">Все</option>
                                      <option value="Насосы с вихревым рабочим колесом">Насосы с вихревым рабочим колесом</option>
                                      <option value="Насосы с гибким рабочим колесом">Насосы с гибким рабочим колесом</option>
                                      <option value="Насосы с дисковым рабочим колесом">Насосы с дисковым рабочим колесом</option>
                                      <option value="Насосы с закрытым рабочим колесом">Насосы с закрытым рабочим колесом</option>
                                      <option value="Насосы с открытым рабочим колесом">Насосы с открытым рабочим колесом</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary mt-3" onclick="applyFilters()">Применить фильтры</button>
                </div>
                </section34>
                  <!-- Контейнер для отображения списка созданных страниц с постами -->
              <div id="post-links" class="mt-3">
                  <!-- Здесь будут отображаться ссылки на страницы с постами -->
              </div>
              <br></br>
                <br></br>
                <br></br>
    </div>
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
  function toggleFilters() {
    const filterSection = document.getElementById('filter-section');
    const button = document.querySelector('.toggle-filters-button');

    if (filterSection.style.display === 'none') {
        filterSection.style.display = 'block';
        button.textContent = 'Скрыть фильтры';
    } else {
        filterSection.style.display = 'none';
        button.textContent = 'Показать фильтры';
    }
}
  // Инициализация фильтрации при загрузке страницы
  function applyFilters() {
    var categoryFilter = document.getElementById('categoryFilter').value;
    var countryFilter = document.getElementById('countryFilter').value;
    var categoryFilter1 = document.getElementById('categoryFilter1').value;
    var categoryFilter2 = document.getElementById('categoryFilter2').value;
    var categoryFilter3 = document.getElementById('categoryFilter3').value;
    var categoryFilter4 = document.getElementById('categoryFilter4').value;
    var postLinks = document.querySelectorAll('#post-links .post-link');

    postLinks.forEach(function(post) {
        var postCategory = post.dataset.category;
        var postCountry = post.dataset.country;
        var postCategory1 = post.dataset.category1;
        var postCategory2 = post.dataset.category2;
        var postCategory3 = post.dataset.category3;
        var postCategory4 = post.dataset.category4;

        if (
            (categoryFilter === 'all' || postCategory === categoryFilter) &&
            (countryFilter === 'all' || postCountry === countryFilter) &&
            (categoryFilter1 === 'all' || postCategory1 === categoryFilter1) &&
            (categoryFilter2 === 'all' || postCategory2 === categoryFilter2) &&
            (categoryFilter3 === 'all' || postCategory3 === categoryFilter3) &&
            (categoryFilter4 === 'all' || postCategory4 === categoryFilter4)
        ) {
            post.style.display = 'block';
        } else {
            post.style.display = 'none';
        }
    });
}

  const moreContent = document.querySelector('.more-content');
        const readMoreButton = document.querySelector('.read-more-button');
        const readLessButton = document.querySelector('.read-less-button');

        readMoreButton.addEventListener('click', () => {
            moreContent.style.display = 'inline';
            readMoreButton.style.display = 'none';
            readLessButton.style.display = 'inline';
        });

        readLessButton.addEventListener('click', () => {
            moreContent.style.display = 'none';
            readMoreButton.style.display = 'inline';
            readLessButton.style.display = 'none';
        });
  // Функция для проверки куки и скрытия формы
  function checkCookieAndHideForm() {
    if (!document.cookie.includes('user')) {
      // Если куки отсутствует, скрыть форму
      document.getElementById('post-form').style.display = 'none';
    }
  }

  // Функция для отображения комментариев из базы данных
  function showPostLinks() {
        fetch('gnasos.php') // Предполагается, что у вас есть скрипт для получения ссылок на страницы с постами
            .then(response => response.text())
            .then(data => {
                document.getElementById('post-links').innerHTML = data;
            })
            .catch(error => {
                console.error('Ошибка:', error);
            });
    }
// Отображаем список страниц с постами при загрузке страницы
window.onload = function () {
        showPostLinks();
    };
  

  // Функция для отправки нового комментария
  function submitComment() {
    let formData = new FormData(document.getElementById('post-form'));
    fetch('snasos.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(() => {
        showComments(); // Показываем комментарии после отправки нового комментария
        document.getElementById('post-form').reset();
      })
      .catch(error => {
        console.error('Ошибка:', error);
      });
  }
        
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
    function validateForm() {
    var title = document.getElementById('title').value.trim();
    var content = document.getElementById('content').value.trim();
    var imageInput = document.getElementById('image');
    var imageInput1 = document.getElementById('image1');

    if (title === '' || content === '') {
        alert('Пожалуйста, заполните заголовок и содержание поста');
        return false; // Отмена отправки формы, если поля не заполнены
    }

    // Проверка наличия выбранного изображения
    if (imageInput.files.length === 0 || imageInput1.files.length === 0) {
        alert('Пожалуйста, выберите хотя бы одно изображение для загрузки');
        return false; // Отмена отправки формы, если изображение не выбрано
    }

    return true; // Продолжение отправки формы, если все проверки пройдены успешно
}

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

</script>
  </body>
</html>