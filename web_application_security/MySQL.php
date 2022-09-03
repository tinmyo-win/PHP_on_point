<?php

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$id = $_GET['id'];
$comment = $_GET['comment'];

/*
$statement = $db->prepare("DELETE FROM test WHERE id=:id");
$statement->execute([':id' => $id]); //for sql injection

*/

$statement = $db->prepare("INSERT INTO comments (paragraph) VALUES (:paragraph)");
$statement->execute([':paragraph' => $comment]); //for sql injection


header('location: show-comment.php');