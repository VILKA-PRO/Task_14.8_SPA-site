<?php
session_start();
$auth = $_SESSION['auth'] ?? null;
$wrongPass = $_SESSION['msg'] ?? null;

?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Анкета случайного героя</title>
        <link rel="icon" type="image/jpg" href="https://i.ibb.co/7SQVS44/favicon.jpg">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../CSS/style_login.css" type="text/css" />

    </head>

    <body>
        <div class="container">
        <?php    
        if (!$auth) { 
            ?>
            <div class="row game-card justify-content-md-center align-items-center myRow ">
                <div class="col-6">
                    <div class="card text-center ">
                        <div class="card-header">
                            <p class="m-0 ">Форма входа</p>
                        </div>
                        <div class="card-body ">
                            <div class="row ">
                                <div class="col-12 ">
                                    <h3 class="card-title mt-3">
                                        <span id="patronymicOutput">Введите свои данные</span>
                                    </h3>
                                </div>
                                <div class="col-12 my-1">
                                    <form action="process.php" method="post">
                                        <div class="form-row justify-content-md-center mt-1">
                                            <div class="col">
                                                <input name="login" class="form-control" type="text" placeholder="Логин" required>
                                            </div>
                                            <div class="col">
                                                <input name="password" class="form-control" type="password" placeholder="Пароль" required>
                                            </div>
                                            <div class="col">
                                                <input name="birthday" class="form-control" type="date" placeholder="Дата рождения" required>
                                            </div>
                                        </div>

                                        <?php
                                        if($wrongPass){
                                            ?>

                                        <div class="row mt-1">
                                            <div class="col">
                                                <p style="color:brown">Логин и/или пароль не найдены. Попробуйте еще раз</p>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        unset ($_SESSION['msg']);
                                        ?>

                                        <div class="row justify-content-md-center mt-4">
                                            <div class="col">
                                                <input class="custom-btn btn-11" name="submit" type="submit" value="Войти">
                                            </div>
                                        </div>
                                        <div class="row align-items-end mt-5">
                                            <div class="col">
                                                <a href="../index.php">На главную</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        <?php } else {
        ?>



            <div class="row justify-content-md-center align-items-center myRow">
                <div class="col-md-auto">
                    <h3 class="card-title-2">Вы уже авторизованы</h3>
                    <form action="../index.php">
                        <button class="custom-btn btn-16" >На главную</button>
                    </form>
                    
                </div>
                
            </div>
            
        <?php
    }
        ?>

        </div> <!-- // .Container -->



        <div class="designed">Designed by Ivan Us in SkillFactory</div>

        <script src="personGenerator.js"></script>
        <script src="init.js"></script>
    </body>

    </html>