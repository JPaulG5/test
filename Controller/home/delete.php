<?php

isUserValid();

$conn = new Database( config() );

try {   

    $conn->query("DELETE FROM history WHERE id = :id AND user_id = :user_id", [
        'id' => $_POST['id'],
        'user_id' => $_SESSION['user_id']
    ]);

}
catch (Exception $e) {

    errorPage(401, "Unauthorized");;

} finally {

    redirect('/');

}