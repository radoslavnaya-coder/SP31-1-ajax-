<?php

$date = [
    "title" => $_POST['title'],
    "content" => $_POST['content']
];

$connect = new PDO('mysql: host = localhost; dbname = ajax31-1', 'root', 'root');
$sql = 'INSERT INTO `posts` (title, content) VALUES (:title, :content)';
$statement = $connect -> prepare($sql);
$result = $statement -> execute($date);
//var_dump($result);
