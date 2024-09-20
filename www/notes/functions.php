<?php

function dd(mixed $var): void
{
    highlight_string("<?php\n" . var_export($var, true) . "\n?>");
    die();
}