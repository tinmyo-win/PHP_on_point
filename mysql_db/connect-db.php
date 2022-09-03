<?php

namespace Math\Basic; 
use PDO; //because of PDO is a global namespace and connect-db is in Math\Basic;
$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$statement = $db->query("SELECT * FROM roles");
$result = $statement->fetchAll();
print_r($result);

//$sql = "INSERT INTO test (name, role_id) VALUES ('Kyaw Zaw', 5)";
//$db->query($sql);

/*
$sql = "INSERT INTO test (name, role_id) VALUES (:name, :role_id)";

$statement = $db->prepare($sql);

$statement->execute([
    ':name' => "Kyaw Lay",
    ':role_id' => '4',
]);

echo "<br>";
echo $db->lastInsertId();

*/

/*
$sql = "UPDATE test SET name=:name WHERE id= :id";
$statement = $db->prepare($sql);

$statement->execute([
    ':name' => "Kyaw Thein",
    ':id' => 32,
]);

echo $statement->rowCount();

*/

$sql = "DELETE FROM test WHERE role_id > :id";
$statement = $db->prepare($sql);
$statement->execute([
    ':id' => 3
]);
echo $statement->rowCount();

