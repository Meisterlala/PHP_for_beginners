<?php

use Core\Response;

function dd(mixed $var): void
{
    highlight_string("<?php\n" . var_export($var, true) . "\n?>");
    die();
}
function authorize(bool $condition, $statusCode = Response::FORBIDDEN): void
{
    if (!$condition) {
        abort($statusCode);
    }
}

function render($view, $data = []): void{
    extract($data);
    require "views/{$view}.view.php";
}