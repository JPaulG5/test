<?php

isUserValid();

$conn = new Database( config() );

try {

    $result = $conn->query("SELECT * FROM history WHERE id = :id AND user_id = :user_id", [
        "id" => $_GET['id'],
        "user_id" => $_SESSION['user_id']
    ])->fetch();

} catch (Exception $e) {

    errorPage(401, "Unauthorized");

}

if(empty($result)) errorPage(401, "Unauthorized");;

view("edit.view.php", [
    "value" => $result
]);