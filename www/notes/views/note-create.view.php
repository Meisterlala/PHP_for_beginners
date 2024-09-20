<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/bootstrap_head.php" ?>

<h3 class="text-body-secondary mt-3 text-center fw-bold">Create a new Note</h3>
<form method="POST">
    <div class="row">
        <div class="card-body p-4 fs-4 ">

            <textarea name="body" class="form-control bg-body-secondary mt-3 shadow from-control-lg" rows="7"></textarea>

        </div>
    </div>
    <div class="d-flex justify-content-center gap-4">
        <button class="btn btn-primary mt-3 px-3" type="submit">Save</button>
        <a href="/notes/" class="btn btn-primary mt-3 px-3">Cancel</a>
    </div>

</form>

<?php require "partials/bootstrap_footer.php" ?>
<?php require "partials/footer.php" ?>