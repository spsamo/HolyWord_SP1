<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS));
$Nickname = trim(filter_var($_POST['Nickname'], FILTER_SANITIZE_SPECIAL_CHARS));
$Password = trim(filter_var($_POST['Password'], FILTER_SANITIZE_SPECIAL_CHARS));


if(strlen($login) < 2){
    echo 'Login error';
    exit;
}

if(strlen($name) < 2){
    echo 'name error';
    exit;
}

if(strlen($Nickname) < 2){
    echo 'Nickname error';
    exit;
}

if(strlen($Password) < 4){
    echo 'Password error';
    exit;
}
    
// DB
$pdo = new PDO('mysql:hots=localhost;dbname=php-websayt;port=3306', 'root', 'root');
//INSERT
$sql = 'INSERT INTO users(login, name, Nickname, Password) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$login, $name, $Nickname, $Password]);

header('Location: /');
