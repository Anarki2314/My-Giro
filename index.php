<?php session_start();
if (empty($_SESSION['theme'])) {
    $_SESSION['theme'] = 'light';
};
if (!empty($_POST['dark'])) {
    $_SESSION['theme'] = $_POST['dark'];
    unset($_POST['dark']);
};

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>My-Giro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <script src='https://kit.fontawesome.com/133d28f73e.js' crossorigin='anonymous'></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <?php if ($_SESSION['theme'] == 'dark') : ?>
        <link rel="stylesheet" href="css/dark.css">
    <?php endif; ?>

</head>

<body>

    <!-- Смена на светлую/тёмную тему -->

        <form action="/" method="post">

            <input type="hidden" name="dark" value="<?php if ($_SESSION['theme'] == 'dark'): echo ('light'); else : echo ('dark'); endif; ?>">
            <input type="submit" value='' class="dark_subm">
        </form>



    <!-- Шапка -->
    <header id="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2">
                    <h1 class="fw-bold logo_text">My-Giro</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-2 d-md-none">
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Меню
                        </a>
                    <!-- Навигации при разрешении < 768px -->
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#header">Домашняя</a></li>
                            <li><a class="dropdown-item" href="#advantages">Преимущества</a></li>
                            <li><a class="dropdown-item" href="#desc">Особенности</a></li>
                            <li><a class="dropdown-item" href="#products">Товары</a></li>
                            <li><a class="dropdown-item" href="#staff">Консультанты</a></li>
                            <li><a class="dropdown-item" href="#personal">Персонал</a></li>
                            <li><a class="dropdown-item" href="#about">О нас</a></li>
                            <li><a class="dropdown-item" href="#header">+7 351 111 22 33 <img src="img/call.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row text-center justify-content-around mt-4 d-none d-md-flex">
                <!-- Навигация -->
                <div class="col-xl-1 col-md-3 mb-3"><a href="#header">Домашняя</a></div>
                <div class="col-xl-1 col-md-3"><a href="#advantages">Преимущества</a></div>
                <div class="col-xl-1 col-md-3"><a href="#desc">Особенности</a></div>
                <div class="col-xl-1 col-md-3"><a href="#products">Товары</a></div>
                <div class="col-xl-1 col-md-3"><a href="#staff">Консультанты</a></div>
                <div class="col-xl-1 col-md-3"><a href="#personal">Персонал</a></div>
                <div class="col-xl-1 col-md-3"><a href="#about">О нас</a></div>
                <div class="col-xl-2 col-md-3"><a href="#header">+7 351 111 22 33 <img src="img/call.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </header>
<!-- Блок Преимущества Компании -->
    <section id="advantages">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-uppercase text-center mb-5">Преимущества Компании</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Начало слайдера -->
                    <div id="slider" class="carousel slide slider" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <!-- Слайды -->
                            <div class="carousel-item active">

                                <div class="carousel-caption  d-md-block">
                                    <h5 class="slider_title">Мы обслуживаем одинаково качественно как своих гарантийных
                                        клиентов, так и сторонние заказы.</h5>

                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="carousel-caption  d-md-block">
                                    <h5 class="slider_title">Если деталь сломалась — в нашем центре ее не будут
                                        ремонтировать, а сразу заменят на новую.</h5>

                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="carousel-caption  d-md-block">
                                    <h5 class="slider_title">Мы работаем с крупной сетью сервисных центров, ее филиалы
                                        находятся в 70 городах России.</h5>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="carousel-caption  d-md-block">
                                    <h5 class="slider_title">Гарантия действует в течении 3 лет!</h5>

                                </div>
                            </div>
                        </div>
                        <!-- Кнопки навигации слайдера -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- Конец слайдера -->
                </div>
            </div>
        </div>
    </section>

<!-- Блок Особенности -->
    <section id="desc">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-uppercase text-center mb-5">Особенности</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4 mb-5 text-center"><img src="/img/elsam.jpg" alt="" width="250px">
                    <p>Электросамокат - современный вариант простого самоката. Для того чтобы на нем кататься, нужно
                        всего один раз оттолкнуться ногой от земли, обеспечив стартовое ускорение. Дальше устройство
                        будет везти хозяина самостоятельно за счет встроенного электромотора. Если выбирать между
                        моноколесом или электросамокатом, последний будет гораздо безопаснее в эксплуатации за счет
                        наличия 2 колес (т.е. 2 точек опоры) и ручки для опоры руками.</p>
                </div>

                <div class="col-md-4 mb-5 text-center"><img src="/img/elsam.jpg" alt="" width="250px">
                    <p>Гироскутер представляет собой конструкцию из 2 колес, расположенных по бокам от наездника и
                        соединенных поперечной планкой-корпусом. Внутри корпуса располагаются электродвигатели,
                        аккумуляторные батареи и гироскопы, поддерживающие в горизонтальном положении площадку для ног.
                        Гироскутеры никогда не оснащаются рукоятками для рук. Устройства из 2 колес, поперечной площадки
                        и рулевого столба называются сигвеями и управляются манипуляциями руками. Особенность управления
                        гироскутером состоит в том, что для движения вперед наезднику необходимо наклониться вперед. Для
                        торможения или движения назад - наклониться назад. Для поворота нужно наклонять корпус в правую
                        или левую сторону.</p>
                </div>

                <div class="col-md-4 mb-5 text-center"><img src="/img/elsam.jpg" alt="" width="250px">
                    <p>Cигвей - средство передвижения для одного человека, которое держит равновесие с помощью
                        специальной автобалансирующей системы. Это своеобразный электрический скутер, самостоятельно
                        удерживающий равновесие. Сигвеи бесшумны в работе, не загрязняют окружающую среду, работают на
                        электрической энергии, накопленной батареей аккумуляторов.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <section id="products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-uppercase mb-5">Товары</h1>


                </div>
            </div>

            <!-- Блок с фильтрами -->
            <input type="radio" name="categories" value="All" id="All" checked>
            <input type="radio" name='categories' value="gyro" id="gyro">
            <input type="radio" name='categories' value="elec" id="elec">
            <input type="radio" name='categories' value="sigw" id="sigw">
            <div class="row text-center justify-content-around mb-5 filt">

                <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 mb-4 flt"><label for="All" class="filters">Все</label></div>
                <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 mb-4 flt"><label for="gyro" class="filters">Гироскутеры</label></div>
                <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 mb-4 flt"><label for="elec" class="filters">Электросамокаты</label></div>
                <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 mb-4 flt"><label for="sigw" class="filters">Сигвеи</label>
                </div>
            </div>


            <!-- Блок с товарами -->
            <div class="row justify-content-around products">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4 text-center product" data-category="gyro">
                    <img src="img/tov1.jpg" alt="" width="200px" height="200px">
                    <h5 class="mb-3">Smart Balance 6.5" Ver. 1 <br> 8999 <br> Гироскутер
                    </h5>
                    <a href="#" class="btn text-uppercase btn_link">Заказать</a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4 text-center product" data-category="gyro">
                    <img src="img/tov2.jpg" alt="" width="200px" height="200px">
                    <h5 class="mb-3">KIWANO KO-X ES031<br> 18900 <br> Гироскутер
                    </h5>
                    <a href="#" class="btn text-uppercase btn_link">Заказать</a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4 text-center product" data-category="sigw">
                    <img src="img/tov1.jpg" alt="" width="200px" height="200px">
                    <h5 class="mb-3">Minirobot Mini PRO 36V<br> 15990 <br> Сигвей
                    </h5>
                    <a href="#" class="btn text-uppercase btn_link">Заказать</a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4 text-center product" data-category="sigw">
                    <img src="img/tov1.jpg" alt="" width="200px" height="200px">
                    <h5 class="mb-3">Xiaomi Ninebot Mini1<br> 22900 <br> Сигвей
                    </h5>
                    <a href="#" class="btn text-uppercase btn_link">Заказать</a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4 text-center product" data-category="sigw">
                    <img src="img/tov4.jpg" alt="" width="200px" height="200px">
                    <h5 class="mb-3">Hili E+1<br>39900<br>Сигвей
                    </h5>
                    <a href="#" class="btn text-uppercase btn_link">Заказать</a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4 text-center product" data-category="elec">
                    <img src="img/tov1.jpg" alt="" width="200px" height="200px">
                    <h5 class="mb-3">Yamato PES MINI <br>15900 <br> Электросамокат
                    </h5>
                    <a href="#" class="btn text-uppercase btn_link">Заказать</a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4 text-center product" data-category="elec">
                    <img src="img/tov7.jpg" alt="" width="200px" height="200px">
                    <h5 class="mb-3">KUGOO S2 (Jilong) <br> 14900 <br>Электросамокат
                    </h5>
                    <a href="#" class="btn text-uppercase btn_link">Заказать</a>
                </div>
            </div>
        </div>
    </section>

<!-- Блок Консультанты -->
    <section id="staff">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-uppercase mb-5">Консультанты</h1>
                </div>
            </div>
            <div class="row text-center justify-content-around">
                <div class="col-xl-4 col-md-6 staff_personal">
                    <img src="img/group1.png" alt="">
                    <h5 class="text-uppercase mt-3">ИВАНОВ ИВАН ИВАНОВИЧ</h5>
                    <p>Квалифицированный специалист сервисного центра My Gyro</p>
                </div>
                <div class="col-xl-4 col-md-6 staff_personal">
                    <img src="img/group2.png" alt="">
                    <h5 class="text-uppercase mt-3">ПУПКИН ВАСИЛИЙ ВАСИЛЬЕВИЧ
                    </h5>
                    <p>Старший консультант My Gyro

                    </p>
                </div>
                <div class="col-xl-4 col-md-6 staff_personal">
                    <img src="img/group3.png" alt="">
                    <h5 class="text-uppercase mt-3">ЗАХАРОВ АНДРЕЙ БОРИСОВИЧ</h5>
                    <p>Менеджер-консультант My Gyro</p>
                </div>
            </div>
        </div>
    </section>
<!-- Блок Бренды -->
    <section id="brands">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-uppercase mb-5">Бренды</h1>
                </div>
            </div>
            <div class="row justify-content-around text-center">
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <img src="img/brand/br9.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <img src="img/brand/br9.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <img src="img/brand/br9.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <img src="img/brand/br9.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <img src="img/brand/br9.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <img src="img/brand/br9.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <img src="img/brand/br9.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <img src="img/brand/br9.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <img src="img/brand/br9.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <img src="img/brand/br9.png" alt="">
                </div>
            </div>

    </section>

    <!-- Блок Персонал -->
    <section id="personal">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-uppercase mb-5">Персонал</h1>
                </div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-12 mb-5">
                    <img src="img/personal.jpg" width="100%" alt="">
                </div>
                <div class="col-9">
                    <p>Чтобы работать в наших магазинах нужно знать каждую модель, её плюсы и минусы и уметь ездить на ней. Да, это долго, и кто-то скажет, что неэффективно. Но так мы гарантированно получаем сотрудника, который разбирается в каждом товаре и сможет по-настоящему помочь покупателю, а не “впихнуть” ему, что-нибудь подороже.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Блок "О нас" -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-uppercase mb-5">О нас</h1>
                </div>
            </div>
            <div class="row justify-content-around align-items-center">
                <div class="col-md-6">
                    <p>Наш магазин работает с 2016 года. Мы представлены в таких городах как Екатеринбург, Москва и Челябинск и многие другие. В среднем мы отправляем по 15-20 заказов в день в разные города и регионы по всей России.</p>
                    <p>Мы имеем свои сервисные центры и собственных мастеров, благодаря которым, выполняем гарантийные работы качественно и в срок. Так же вы можете обратиться к нам с любой проблемой. Мастера выполнят диагностику и выполнят ремонт.</p>
                </div>
                <div class="col-md-6 text-center">

                <!-- Форма подписки -->
                    <form action="/" method="post">
                        <span>Имя:</span>
                        <input type="text" placeholder="Имя" class="mb-4">
                        <br>
                        <span>E-mail</span>
                        <input type="email" placeholder="E-mail" class="mb-4"><br>
                        <input type="submit" value="" class="about_sbm">
                </div>
                </form>

            </div>
        </div>
    </section>

    <!-- "Подвал" -->
    <footer id="footer" class="">
        <div class="container">
            <div class="row justify-content-center text-center --bt-white">
                <div class="col-12">© 2021 My-Giro</div>
            </div>
        </div>
    </footer>
    <!-- Кнопка возврата на верх -->
    <a href="#header" class="fixed-bottom back"><img src="img/back.png" width="50px"></a>


</body>

</html>