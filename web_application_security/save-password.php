<!DOCTYPE html>
<html>
<head>
    <title> Saving Password </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
    .wrap {
        max-width: 300px;
    }
    </style>
</head>

<body>
    <form action="save-passDB.php" class="wrap">
        <input type = "text" name = "name" placeholder="Name" class="form-control ">
        <input type = "password" name = "password" placeholder="Password" class="form-control ">

        <button type="submit" class="btn btn-primary btn-lg">Save</button>
    </form>

</body>
</html>