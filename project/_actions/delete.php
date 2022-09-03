<?php

include ("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

$auth = Auth::check();

$table = new UsersTable(new MySQL());

$id = $_GET['id'];

if($_SESSION['csrf'] === $_GET['csrf']){
    $table->delete($id);
    HTTP::redirect("/admin.php");
} else {
    HTTP::redirect("/index.php", "csrf=true");
}

