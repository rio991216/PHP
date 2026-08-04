<?php
// データベースの接続
try {
    $dsn = 'mysql:host=db;dbname=interplan_pizza;charset=utf8';
    $user = 'pizzataro';
    $pass = 'GEiBNZVk!RYIK8Rg';
    $option = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //PDO専用のエラーを受け取る
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC //データを連想配列で受け取る
    ];

    $db = new PDO($dsn, $user, $pass, $option);

    // var_dump($db);
} catch (PDOException $e) {
    echo 'データベースの接続でエラーが発生しました。' . $e->getMessage();
}
