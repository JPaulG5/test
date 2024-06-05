<?php

isUserValid();

$conn = new Database( config() );

if( empty($_POST) || !isset($_POST)) redirect("/");
if(!Validator::string($_POST['product'], 3) || !Validator::number($_POST['price'])) redirect("/");

$conn->query("INSERT history ( product_type, product_name, product_price, date_created, user_id ) VALUE( :product_type, :product_name, :product_price, :date_created, :user_id )", [
    'product_type' => $_POST['type'],
    'product_name' => $_POST['product'],
    'product_price' => $_POST['price'],
    'date_created' => date("Y/m/d"),
    'user_id' => $_SESSION['user_id']
]);

redirect("/");