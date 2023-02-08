<?php 
session_start(); 

include 'users.php';

$curentUser = $_POST['login'] ?? null;
$curentPass = $_POST['password'] ?? null;
$curentBirthDay = $_POST['birthday'] ?? null;
$authTime = $_SESSION['authTime'] ?? time(); // Записали в сессию текущее время


if (array_key_exists($curentUser, $users) && password_verify($curentPass, $users[$curentUser]['password'])) {

    // Пишем в сессию об авторизации и логин и др пользователя
    $_SESSION['auth'] = true; 
    $_SESSION['birthday'] = $curentBirthDay; 
    $_SESSION['login'] = $curentUser; 
    $_SESSION['authTime'] = $authTime;
    $_SESSION['count'] = 0;

    echo $_SESSION['login'] . "<br>" . $_SESSION['birthday'];
} else {

    $_SESSION['msg'] = true; 
    header('Location: login.php');
}



$auth = $_SESSION['auth'] ?? null;

// если авторизованы
if ($auth) {
    header('Location: ../index.php');
}



