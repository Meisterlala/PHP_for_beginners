<?php

function dd(mixed $var): void
{
    highlight_string("<?php\n" . var_export($var, true) . "\n?>");
    die();
}

function abort(int $statusCode = 404): void
{
    http_response_code($statusCode);
    require "views/{$statusCode}.view.php";
}