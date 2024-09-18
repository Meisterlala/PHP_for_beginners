<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <div>
        <h1>Recommended Books</h1>
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
        ?>


        <ul>
            <?php foreach ($books as $book) {
                echo "<li>{$book}</li>";
            } ?>
        </ul>

        Another way to display it:
        <ul>
            <?php foreach ($books as $book): ?>
                <li><?= $book ?></li>
            <?php endforeach ?>
        </ul>


        And we can display assosiative Arrays like this: <br>
        <ul>
            <li> <?= $assosiative["name"] ?> </li>
            <li> <?= $assosiative["author"] ?> </li>
            <li> <?= $assosiative["date"] ?> </li>
        </ul>

        And here are all Books that have a 1 in there title: <br>
        <ul>
            <?php foreach (filter($books) as $book): ?>
                <li><?= $book ?></li>
            <?php endforeach ?>
        </ul>

        All books that have and e in the title:
        <ul>
            <?php foreach (filterGeneric($books, fn($i) => str_contains($i, "e")) as $book): ?>
                <li><?= $book ?></li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>