<?php
$books = [
    "1984",
    "Brave New World",
    "Fahrenheit 451",
    "The Great Gatsby"

];

$assosiative = [
    "name" => "Bookname",
    "author" => "Me",
    "date" => "today"
];

function filter(array $items): array
{
    $filtered = [];

    foreach ($items as $item) {
        if (str_contains($item, "1")) {
            $filtered[] = $item;
        }
    }
    return $filtered;
}

function filterGeneric(array $items, callable $filter): array
{
    $filtered = [];

    foreach ($items as $item) {
        if ($filter($item)) {
            $filtered[] = $item;
        }
    }
    return $filtered;
}

require "index.view.php";