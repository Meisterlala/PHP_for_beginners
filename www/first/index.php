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
    </div>
</body>

</html>