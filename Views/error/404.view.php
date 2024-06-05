<?php require('Views/partials/head.php'); ?>

<div class="d-flex flex-row align-items-center" style="min-height: 100vh">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block"><?php echo $error; ?></span>
                <div class="mb-4 lead"><?php echo $description; ?></div>
                <a href="<?php echo redirectLink("/"); ?>" class="btn btn-link">Back to Home</a>
            </div>
        </div>
    </div>
</div>

<?php require('Views/partials/footer.php'); ?>