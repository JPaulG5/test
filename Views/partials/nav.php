<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

    <img class="navbar-brand rounded" src="../Views/image/logo.jfif" style="height: 60px;" alt="Logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= urlIs(redirectLink("")) ? 'active' : '' ?>" aria-current="page" style="font-size: 1.2rem;" href="<?= redirectLink("") ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= urlIs(redirectLink("history")) ? 'active' : '' ?>" style="font-size: 1.2rem;" href="<?= redirectLink("history") ?>">History</a>
        </li>
      </ul>
      <div class="d-flex" role="search">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link link-danger" style="font-size: 1.2rem;" href="<?= redirectLink("logout") ?>">Sign out</a>
          </li>
        </ul>
      </div>
    </div>

  </div>
</nav>