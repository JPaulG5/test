<?php

isUserValid();

$conn = new Database( config() );

try {

    $result = $conn->query("SELECT * FROM history WHERE user_id = :user_id AND date_created < :date_created ORDER BY date_created DESC", [
        'user_id' => $_SESSION['user_id'],
        'date_created' => date("Y/m/d")
    ])->fetchAll();


    
}catch (Exception $e) {

    redirect("/history");
}

view('history.view.php', [
    'data' => $result
]);