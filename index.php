<?php
session_start();
ini_set('display_errors', 'Off');

include 'pages/timer.php';

ini_set('display_errors', 'On');

$auth = $_SESSION['auth'] ?? null;
$login = $_SESSION['login'] ?? null;

$count = $_SESSION['count'] ?? 0;
$count++;
$_SESSION['count'] = $count;



?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>uSPA - СПА-салон на вершине мира</title>
    <link rel="icon" type="image/jpg" href="https://i.ibb.co/7SQVS44/favicon.jpg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">


</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <img width="50" src="images/US-Logo-1.png" alt="Us logo">
                    <a class="nav__link__main" href="#">uSPA</a>

                </div>
                <nav class="nav">

                    <?php
                    if (!$auth) {
                    ?>
                        <a class="custom-btn btn-16" href="pages/login.php">Вход</a>
                    <?php } else {
                        
                    ?>
                        <span><strong><?=$login?></strong>, <br> добро пожаловать. </span>
                        <a class="custom-btn btn-16 " href="pages/logout.php?exit">Выход</a>
                    <?php
                    }
                    ?>
                </nav>
            </div>

        </div>

    </header>
    <main>

        <!-- INTRO -->
        <div class="intro">
            <div class="container">
                <div class="raw intro__inner">
                    <h1 class="intro__title">СПА-салон<br>на вершине мира </h1>
                </div>

                <?php
                if ($auth) {
                ?>
                    <div class="row mt-4 justify-content-center align-items-center">
                        <div class="col-10">

                            <div class="card text-center">
                                <div class="card-header">
                                    <h5 class="card-title mt-2">У вас есть персональная скидка 50%</h5>
                                    <p class="card-text">Успейте воспользоваться скидкой, ибо до конца акции осталось:</p>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title promo"><?= $promoMsg ?></h5>
                                </div>
                                <?php
                if ($count >= 2) {
                ?>
                                <div class="card-footer <?= $bdClasses ?>">
                                <?= $birthMsg ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>

                <?php }
                ?>

            </div>

        </div>

        <!-- content -->

        <div class="container">
            <div class="content__about">
                <div class="content__about__pic">
                    <img width="400" src="images/spa1.jpg" alt="">
                </div>
                <div class="content__about__text">
                    <h2 class="content__title">Обертывание ламинарией
                    </h2>
                    <p>Обёртывание водорослями ламинарии – антицеллюлитная классика, давно покорившая сердца ценителей телесной красоты.

                        Благодаря ламинарии ускоряются процессы в подкожно-жировой клетчатке, расщепляются накопленные липиды, открываются закупоренные поры, уходит лишняя вода. Всего несколько сеансов – и кожа подтягивается, обогащается минеральными веществами, восстанавливается ее тонус, уменьшаются растяжки, исчезает целлюлит.

                    </p>
                    <p>Водорослевые обёртывания являются незаменимой частью коррекционных программ и хорошо сочетаются с антицеллюлитным массажем.</p>
                </div>
            </div>

            <div class="content__learn">

                <div class="content__learn__text">
                    <h2 class="content__title">Ойл-массаж</h2>
                    <p>Массаж, направленный на расслабление и снятие спазмов мышц, включает проработку биологических точек и мягкую мануальную терапию. Проводится с использованием масла, но возможно использование крема по запросу.
                    </p>
                    <p>Показания: стресс, повышенная возбудимость, мышечное переутомление, упадок сил, нарушение сна.
                        Можно выбрать степень интенсивности - слабый, средний, сильный (relax, medium, strong)</p><br><br>
                </div>
                <div class="content__learn__pic">
                    <img width="400" src="images/spa2.jpg" alt="">
                </div>
            </div>

            <div class="content__about">
                <div class="content__about__pic">
                    <img width="400" src="images/spa3.jpg" alt="">
                </div>
                <div class="content__about__text">
                    <h2 class="content__title">Тайский массаж</h2>
                    <p>Глубокая проработка всех мышц при помощи особых техник воздействия на определенные точки тела, скручиваний и растяжек. Массаж стимулирует кровообращение, снимает зажимы, улучшает гибкость тела. </p>
                    <p>Проводится на специальном мате - тай-бед. Показания: стресс, повышенная возбудимость, мышечное переутомление, защемление мышечных тканей.</p>
                </div>
            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer>
        <div class="foot">
            <div class="designed">Designed by Ivan Us in SkillFactory</div>

        </div>
    </footer>
</body>

</html>