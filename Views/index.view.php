<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>


<main class="container-fluid text-center">
    <div id="wrapper" class="row">
        <div id="action_container" class="row-lg">

            <form id="input_container" action="<?= redirectLink("") ?>" method="POST" class="needs-validation">
                <div class="input-group mb-3">
                    <select name="type" class="form-select form-select-sm" aria-label="Selection" required>
                        <option selected disabled value="">Choose...</option>
                        <option name="type" value="Food">Food</option>
                        <option name="type" value="Drink">Drink</option>
                        <option name="type" value="Pamasahi">Pamasahi</option>
                        <option name="type" value="Grocery">Grocery</option>
                        <option name="type" value="Other">Other</option>
                    </select> 
                    <div class="form-floating">
                        <input type="text" class="form-control" id="product_name" name="product" placeholder="product name" required>
                        <label for="product_name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control" id="product_price" name="price" placeholder="product name" required>
                        <label for="product_price">Price</label>
                    </div>
                    <span class="input-group-text">.00</span>
                </div>
                <button id="action-button" type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
        <div id="list_container" class="row-lg">
            <table class="table table-dark table-sm">
                <thead>
                    <tr>
                    <th scope="col">DATE</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">NAME</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach($result as $item) : ?>
                    <tr>
                        <td><?= $item['date_created'] ?></td>
                        <td><?= $item['product_type'] ?></td>
                        <td><?= $item['product_name'] ?></td>
                        <td class="text-start"><?= "₱ " . $item['product_price'] . ".00" ?></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= redirectLink("edit") ?>?id=<?= $item['id'] ?>">Edit</a></li>
                                    <li>
                                        <form action="<?= redirectLink("") ?>" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                            <input type="submit" class="dropdown-item" value="Delete">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="bg-light-subtle fs-5" colspan="6">TOTAL SPEND TODAY : <?= "₱ " . $total . ".00" ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</main>

<script type="module" src="../../Views/assets/js/index.js"></script>
<?php require('partials/footer.php'); ?>