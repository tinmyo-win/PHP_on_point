<?php

$name = $_GET['name'];
$password = $_GET['password'];

$hash = password_hash($password, PASSWORD_BCRYPT);

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$sql = "INSERT INTO test_passwords (name, password) VALUES (:name, :hash)";
$statement = $db->prepare($sql);
$statement->execute([
    ':name' => $name,
    ':hash' => $hash,
]);

return $db->lastInsertId();