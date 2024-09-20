<?php

function dd(mixed $var): void
{
    highlight_string("<?php\n" . var_export($var, true) . "\n?>");
    die();
}

function abort(int $statusCode = Response::NOT_FOUND): void
{
    http_response_code($statusCode);
    die();
}

function authorize(bool $condition, $statusCode = Response::FORBIDDEN): void
{
    if (!$condition) {
        abort($statusCode);
    }
}