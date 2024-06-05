<?php

isUserValid();

$conn = new Database( config() );

try {

    $conn->query("  UPDATE history 
                    SET product_type = :product_type, product_name = :product_name, product_price = :product_price 
                    WHERE id = :id AND user_id = :user_id", [
                                    
                    "product_type" => $_POST['type'],
                    "product_name" => $_POST['product'],
                    "product_price" => $_POST['price'],
                    "id" => $_POST['id'],
                    "user_id" => $_SESSION['user_id']
    ]);

}catch (Exception $e) {

    errorPage(401, "Unauthorized");

}finally {

    redirect('/');

}