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

#[NoReturn] function abort($status_code = 404): void
{
    if ($status_code !== 404 & file_exists("controllers/$status_code.php")) {
        http_response_code($status_code);
        require "controllers/$status_code.php";
    } else {
        http_response_code(404);
        require "controllers/404.php";
    }
    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition)
        abort($status);
}