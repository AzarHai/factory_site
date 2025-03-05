<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>"Дора" — Проектирование высокоэффективных систем насосов</title>
    <link rel="icon" href="water_pump_icon_229881.ico">
    <link rel="stylesheet" href="./header.css"/>
    <style>
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

     .copyright {
    color: white; 
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
    min-height: calc(100vh - 85px - 50px); /* высота экрана минус высота хедера и футера */
}
@media (max-width: 768px) {
  footer {
    flex-direction: column;
    align-items: center;
  }

  footer div {
    margin: 10px 0;
  }
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
            margin-top: 20px; 
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
        .centered {
                    text-align: center; 
                    margin-top: 20px; 
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
        <form action="auth.php" method="post">
          <input type="text" class="form-control mb-3" name="username" id="username" placeholder="Введите логин">
          <input type="password" class="form-control mb-3" name="password" id="password" placeholder="Введите пароль">
          <button class="btn btn-success">Войти</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <section style="margin-bottom: 0;">
      <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" data-inteval="2000">
            <div class="overlay-image"style="background-image:url(./slide.jpeg);"></div>
            <div class="container">
              <h1 class="large-text"style="font-size: 4em;margin-left: 350px;">10 лет вместе!</h1>
              <p style="font-size: 1.4em;margin-left: 350px;">-поставлено более 10 тысяч химеческих насосов</p>
              <p style="font-size: 1.4em;margin-left: 350px;">-модернизировано свыше 250-ти насосов</p>
            </div>
          </div>
          <div class="carousel-item"data-inteval="1000">
            <div class="overlay-image"style="background-image:url(./slide-2.png);width:1000px;height=400px;"></div>
            <div class="container">
              <h1>Calpeda NR</h1>
              <p>Легкость в обслуживании и эксплуатации: Простая установка и минимальные требования к техническому обслуживанию.</p>
              <a href="catalog.php" class="btn btn-lg btn-primary">Подробнее здесь</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Гарантии качества </h2>
          <p class="lead">
          Наша компания работает с 1996 года. Основными клиентами являются химические заводы, заводы фармоцевтические,предприятия бытовой техники, бумажные комбинаты, металлургические и строительные предприятия.

            Мы поставляем и внедряем измерительный инструмент и системы лучших мировых производителей.

            Наши инженеры по оборудованию решают сложнейшие измерительные задачи и обучают заказчиков.

            Наша сервисная служба обеспечивает постоянную техническую поддержку всего поставляемого оборудования.

            Наш коммерческий отдел всегда заботится о наших заказчиках.

            Все это позволяет нам быть одним из крупнейших поставщиков измерительной техники в РФ и странах СНГ.</p>
        </div>
        <div class="col-md-5 order-md-1 d-flex justify-content-center align-items-center">
          <div class="link-container">
            <div class="featurette-text">
              <a href="https://www.youtube.com/">Мы на Ютуб</a>
            </div>
            <div class="featurette-text">
              <a href="https://irecommend.ru/">Отзывы о фирме</a>
            </div>
            <div class="featurette-text">
              <a href="/catalog.php">Каталог</a>
            </div>
          </div>
        </div>
      </div>
      <div class="centered">
        <h1>Последние новости</h1>
    </div>
      <div id="post-links" class="mt-3">
                  <!-- Здесь будут отображаться ссылки на страницы с постами -->
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzF2QvHbPOuFmK5pglI1xM6sV+UNK8vcvF0F05JEv45k" crossorigin="anonymous"></script>
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
                
                dropdownItems.forEach(function(el) {
                    el.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    });
     // Функция для отображения комментариев из базы данных
  function showPostLinks() {
        fetch('gcom1.php') 
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
    </script>
  </body>
</html>
