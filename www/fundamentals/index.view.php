<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended Books</title>
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