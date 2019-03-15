<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
<nav id="sidebar">
            <div class="sidebar-header">
                <h3>Arduino lerning</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Оглавление</p>
                <li>
                    <a href="/">Главная</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Теоретические основы</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Практическая работа</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="/practice/firstprog">Первая программа на С++</a>
                        </li>
                        <li>
                            <a href="/practice/vars">Переменные и типы данных</a>
                        </li>
                        <li>
                            <a href="/practice/vetvlenie">Ветвление</a>
                        </li>
                        <li>
                            <a href="/practice/loops">Циклы</a>
                        </li>
                        <li>
                            <a href="/practice/arrays">Массивы</a>
                        </li>
                        <li>
                            <a href="/practice/functions">Функции</a>
                        </li>
                        <li>
                            <a href="/practice/microcoding">Программирование микроконтроллера</a>
                        </li>
                        <li>
                            <a href="/practice/sensors">Сенсоры. Датчики Arduino</a>
                        </li>
                        <li>
                            <a href="/practice/button">Кнопка - датчик касания</a>
                        </li>
                        <li>
                            <a href="/practice/servo">Управление сервоприводом</a>
                        </li>
                        <li>
                            <a href="/practice/led">Бегущий огонь</a>
                        </li>
                        <li>
                            <a href="/practice/acp">Плавное затухание</a>
                        </li>
                        <li>
                            <a href="/practice/lcd">Работа с LCD</a>
                        </li>
                        <li>
                            <a href="/practice/driver">Драйвер двигателя</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/profile">Профиль</a>
                </li>
                <li>
                    <a href="/contact">Об авторе</a>
                </li>
            </ul>
        </nav>
    </body>

<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>