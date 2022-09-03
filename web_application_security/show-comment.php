<?php

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$statement = $db->query("SELECT * FROM comments");
$comments = $statement->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
    <title> Show Comment </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <table class="table table-striped table-bordered">
        <tr>
            <td>Id</td>
            <td>Comment</td>
        </tr>
        <?php foreach ($comments as $comment) : ?>
            <tr>
                <td><?= $comment->id ?></td>
                <td><?= htmlspecialchars($comment->paragraph) ?></td> <!-- for XSS scripting -->
            </tr>
        <?php endforeach ?>
    </table>
