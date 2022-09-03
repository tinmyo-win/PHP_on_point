<?php
namespace Helpers;

error_reporting(E_ALL & ~E_NOTICE);

class Auth {
    static $loginUrl = "/index.php";

    static function check() {
        session_start();
        if(isset($_SESSION['user'])) {
            return $_SESSION['user'];
        } else {
            HTTP::redirect(static::$loginUrl);
        }
    }
}