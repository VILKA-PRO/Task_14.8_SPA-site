<?php

session_start();

$authTime = $_SESSION['authTime'];
$birthday = $_SESSION['birthday'];
$now = time();
$saleEndTime = mktime( // время конц акции
    date("H", $authTime)+23,
    date("i", $authTime)+59,
    date("s", $authTime)+59,
    date("m", $authTime),
    date("d", $authTime),
    date("y", $authTime)
);


$restSaleTime = $saleEndTime - $now;
$promoMsg = date('H:i:s', $restSaleTime);

if($restSaleTime <=0){
    $promoMsg = '<span class="ups">Упс. Акция-то закончилась 😥</span>';
}


$arr = explode('-', $birthday);
$tm = mktime(0, 0, 0, $arr[1], $arr[2], date('Y'));
if($tm<time()) $tm=mktime(0, 0, 0, $arr[1], $arr[2], date('Y')+1);
$daysToBirth = ceil( ($tm-time())/86400 );

if (date('dm', mktime(0, 0, 0, $arr[1], $arr[2])) === date('dm', $now)){
$birthMsg = "Поздравляем с днем ролждения!<br>Ловите доп скидку 5% на все услуги салона";
$bdClasses = "text-white bg-info";
} else {
    $birthMsg = "Дней до вашего ДР: <strong>$daysToBirth</strong><br>А там глядишь и скидка случится";
    $bdClasses = "text-muted";
}
