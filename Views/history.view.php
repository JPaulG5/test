<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>

<main>
    <div class="container my-5">
        <form id="history_date_search" action="<?= redirectLink("history") ?>" method="GET">
            <input type="date" name="past">
            <input type="date" name="present" value="<?php echo date("Y-m-d");?>">
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
    <div class="container">
        <h1 class="text-center">HISTORY</h1>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center" >DATE</th>
                    <th class="text-center" >TYPE</th>
                    <th class="text-center" >NAME</th>
                    <th class="text-center" >PRICE</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $row) :?>
                <tr>
                    <td class="text-center" ><?= $row['date_created'] ?></td>
                    <td class="text-center" ><?= $row['product_type'] ?></td>
                    <td class="text-center" ><?= $row['product_name'] ?></td>
                    <td class="text-center" ><?= "₱ ". $row['product_price'] . ".00"?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<script type="module" src="../../Views/assets/js/index.js"></script>
<?php require('partials/footer.php'); ?>