<?php require('Views/partials/head.php'); ?>

<main id="log_wrapper">
    <form action="<?= redirectLink("login") ?>" method="POST">
        <div class="container rounded p-4" style="min-width: 360px; border: 1px solid white;">
            <div class="mb-4">
                <h1 class="text-center">Login</h1>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="login_email" name="email" placeholder="example@gmail.com">
                <label for="login_email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="login_password" name="password" placeholder="Password">
                <label for="login_password">Password</label>
            </div>
            <div class="row g-2 mt-4">
                <button class="btn btn-primary" type="submit">Log in</button>
                <button class="btn btn-primary" id="login_link_reg" type="button">Sign Up</button>
            </div>
        </div>
    </form>
</main>

<script type="module" src="../Views/assets/js/index.js"></script>
<?php require('Views/partials/footer.php'); ?>