<!DOCTYPE html>
<html lang="en">
<head>
    <title>Save Cookie</title>
</head>
<body>
    <script>
        document.cookie = "name=Alice";
    </script>
</body>
</html>

<?php

setcookie("age", "32", time() + 3600);
echo "view in view-cookie.php";