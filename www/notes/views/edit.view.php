<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/bootstrap_head.php" ?>

<h3 class="text-body-secondary mt-3 text-center fw-bold">Here is the Note you selected:</h3>
<div class="row">
    <div class="card mt-3 bg-body-secondary shadow">
        <div class="card-body p-4 fs-4 ">
            <?= htmlspecialchars($note['body']) ?>
        </div>
    </div>
    <div class="d-flex justify-content-center gap-4">
        <form method="POST">
            <input type="hidden" name ="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= htmlspecialchars($note['id']) ?>">
            <button class="btn btn-danger mt-3 px-3" type="submit">Delete</button>
        </form>
    </div>
</div>


<?php require "partials/bootstrap_footer.php" ?>
<?php require "partials/footer.php" ?>