<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/bootstrap_head.php" ?>

<h3 class="text-body-secondary mt-3 text-center fw-bold">Edit the Note</h3>
<form method="POST" action="./note">
    <input type="hidden" name="_method" value="PATCH">
    <div class="row">
        <div class="card-body p-4 fs-4 ">

            <textarea name="body" class="form-control bg-body-secondary mt-3 shadow from-control-lg" rows="7"><?= $body ?? '' ?></textarea>
            <?php if (!empty($errors['body'])): ?>
                <div class="alert alert-danger mt-3 fs-5"><?= $errors['body'] ?></div>
            <?php endif; ?>
        </div>
    </div>
    <div class="d-flex justify-content-center gap-4">
        <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
        <button class="btn btn-primary mt-3 px-3" type="submit">Update</button>
        <a href="./" class="btn btn-primary mt-3 px-3">Cancel</a>
</form>
<form method="POST" action="./note">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
    <button class="btn btn-danger mt-3 px-3" type="submit">Delete</button>
</form>


</div>



<?php require "partials/bootstrap_footer.php" ?>
<?php require "partials/footer.php" ?>