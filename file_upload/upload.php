<?php

var_dump($_FILES);

$tmp = $_FILES['photo']['tmp_name'];
$name = $_FILES['photo']['name'];

move_uploaded_file($tmp, $name);