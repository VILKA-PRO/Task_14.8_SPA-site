<?php

$users = [
    'admin' => [
        'id' => '1',
        'password' => '$2y$10$LUeyPBjnQ6oAA3TYXwMWl.mYtgFEuNRP1IEiCg8n8RkkIVP6GKiEG',
        'birthday' => '',
        ],
    'vano' => [
        'id' => '2', 
        'password' => '$2y$10$bAbNRpkV6yRsZDhzmPkJCOZ4aFzA1enzSFSzrr13dGw8LRQRqAxoC',
        'birthday' => '',
        ],
    'petr' => [
        'id' => '3', 
        'password' => '$2y$10$FQ5d391vAu2boE1edE9bnOj25.Q128F/xMupriQ6qe1If89ESQ10e',
        'birthday' => '',
        ],

];


// Так я получил хеши паролей и записал их в БД
// $hash_123 = password_hash("123", PASSWORD_BCRYPT);
// $hash_321 = password_hash("321", PASSWORD_BCRYPT);
// $hash_111 = password_hash("111", PASSWORD_BCRYPT);

// var_dump($hash_123);
// var_dump($hash_321);
// var_dump($hash_111);


