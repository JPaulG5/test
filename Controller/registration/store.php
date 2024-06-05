<?php

$conn = new Database( config() );

if(empty($_POST)) redirect("/register");

try {

    $result = $conn->query("SELECT * FROM users WHERE email = :email", [
        'email' => $_POST['email']
    ])->fetch();

} catch (Exception $e) {
    
    redirect("/register");
}

$conn->query("INSERT INTO users( id, user_name, email, password, date_created ) VALUES( :id, :user_name, :email, :password, :date_created )", [
    'id' => rand(1000, 9999),
    'user_name' => $_POST['user_name'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
    'date_created' => date("Y/m/d")
]);

redirect("/login");