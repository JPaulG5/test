<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>


<main>
    <div id="wrapper" class="container">
        <form id="form_edit" action="<?= redirectLink("edit") ?>" method="POST" class="p-4 rounded">
            <input type="hidden" name="id" value="<?= $value['id'] ?>">
            <div class="mb-4">
                <h1 class="text-center">EDIT</h1>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Type</span>
                <input type="text" name="type" class="form-control" aria-label="Type" value="<?= $value['product_type'] ?>" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Name</span>
                <input type="text" name="product" class="form-control" aria-label="Name" value="<?= $value['product_name'] ?>" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Price</span>
                <input type="number" name="price" class="form-control" aria-label="Price" value="<?= $value['product_price'] ?>" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Date</span>
                <input type="text" class="form-control" aria-label="Date" value="<?= $value['date_created'] ?>" disabled readonly>
            </div>
            <input type="submit" value="Change" class="btn btn-primary">
            <button type="button" class="btn btn-danger">Cancel</button>
        </form>
    </div>
</main>

<script type="module" src="../../Views/assets/js/index.js"></script>
<?php require('partials/footer.php'); ?>