<?php

include("vendor/autoload.php");

use Helpers\Auth;

$auth = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap {
            max-width: 500px;
        }

        .img-border {
            border-radius: 40px;
        }
    </style>
</head>
<body>
    <div class="container mt-5 wrap">
        <h1 class="mt-5 mb-5">

            <?php if(file_exists('_actions/photos/profile.jpg')): ?>
                <img
                    class="img-thumbnail mb-3 img-border"
                    src="_actions/photos/<?= $auth->photo ?>"
                    alt="Profile Photo" width="40";>
            <?php endif ?>
                
            <?= $auth->name ?>
            <span class="few-normal text-muted">
                (<?= $auth->role ?>)
        </h1>

        <?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Cannot upload file
            </div>
        <?php endif ?>

        <?php if($auth->photo): ?>
            <img
                class="img-thumbnail mb-3"
                src="_actions/photos/<?= $auth->photo ?>"
                alt="Profile Photo" width="200";>
        <?php endif ?>

        <form action="_actions/upload.php" method="post"
                    enctype="multipart/form-data">
            <div class="input-group mb-3">
                <input type="file" name="photo" class="form-control">
                <button class="btn btn-secondary">Upload</button>
            </div>
        </form>

        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b> <?= $auth->email ?>
            </li>
            <li class="list-group-item">
                <b>Phone:</b> <?= $auth->phone ?>
            </li>
            <li class="list-group-item">
                <b>Address:</b> <?= $auth->address ?>
            </li>
        </ul>
        <br>

        <a href="admin.php">Manage Users</a> |
        <a href="_actions/logout.php">Logout</a>
    </div>
</body>
</html>