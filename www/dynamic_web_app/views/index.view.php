<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<?php require "partials/banner.php" ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        Home page with cool text
    </div>

    <div>
        <table class="table-auto min-w-full px-3 py-1">
            <thead class="border-b">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($db->fetchAll("select * from posts") as $post): ?>
                    <tr class="border-b">
                        <td class="px-3 py-1 border-r border-l text-center"><?= $post['id'] ?></td>
                        <td class="px-3 py-1 border-r border-l"><?= $post['title'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>
<?php require "partials/footer.php" ?>