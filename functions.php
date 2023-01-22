<?php

use JetBrains\PhpStorm\NoReturn;

function dd($value): void
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}

#[NoReturn] function abort($status_code = 404, $status_page = 404): void
{
    http_response_code($status_code);
    require "controllers/$status_page.php";
    die();
}