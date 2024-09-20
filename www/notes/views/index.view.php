<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/bootstrap_head.php" ?>

<h2 class="text-center">Hello, <?= htmlspecialchars($user['name']) ?></h2>
<p class="text-body-secondary mt-3 text-center">Here is a list of all your Notes, click on one to show more details</p>
<div>
    <ul class="list-group">
        <?php foreach ($notes as $note): ?>
            <li class="list-group-item list-group-item-action">
                <a class="link-primary text-decoration-none" href="note?id=<?= htmlspecialchars($note['id']) ?>">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>

<?php require "partials/bootstrap_footer.php" ?>
<?php require "partials/footer.php" ?>