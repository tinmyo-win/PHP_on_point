<?php

$password = $_GET['password'];

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$user = $db->query("SELECT * FROM test_passwords WHERE id=1");

$hash = $user->fetch()->password;

if(password_verify($password, $hash)) {
    echo "Password Correct";
} else {
    echo "Incorrect Password";
}