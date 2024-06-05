<?php

$conn = new Database( config() );

$result = $conn->query("SELECT * FROM users WHERE email = :email", [
    'email' => $_POST['email']
])->findOrFail();


if($_POST['email'] == $result['email'])
{
    if( Validator::isPasswordExist($_POST['password'], $result['password']) )
    {
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_name'] = $result['user_name'];

        redirect("/");
    }
}