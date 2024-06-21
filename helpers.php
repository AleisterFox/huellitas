<?php

require 'vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $var) {
            VarDumper::dump($var);
        }
        die(1);
    }
}

if (!function_exists('is_user_logged_in')) {
    function is_user_logged_in()
    {
        return isset($_SESSION['user']);
    }
}

if (!function_exists('user')) {
    session_start();
    function user()
    {
        return $_SESSION['user'] ?? null;
    }
}

if (!function_exists('redirect')) {
    function redirect($url)
    {
        header("Location: $url");
        exit;
    }
}

if (!function_exists('get_current_url')) {
    function get_current_url()
    {
        return $_SERVER['REQUEST_URI'];
    }
}