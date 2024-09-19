<?php
$books = [
    "1984",
    "Brave New World",
    "Fahrenheit 451",
    "The Great Gatsby",
    "To Kill a Mockingbird",
    "Moby Dick",
    "The Catcher in the Rye",
    "Pride and Prejudice",
    "The Lord of the Rings",
    "The Hobbit",
    "War and Peace",
    "The Odyssey",
    "Crime and Punishment",
    "The Brothers Karamazov"
];

$assosiative = [
    "name" => "Brave New World",
    "author" => "Aldous Huxley",
    "date" => "1932"
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