<?php

session_start();

if(isset($_SESSION['email']))
{
    header('location: ./home.php');
}

$users = [
    [
        'email' => "a@a.com",
        'password' => '123'
    ],
    [
        'email' => "b@b.com",
        'password' => '123456'
    ],
    [
        'email' => "c@c.com",
        'password' => '123456789'
    ],
    
];

$email = $_POST['email'];
$password = $_POST['password'];


foreach($users as $user)
{
    if($user['email'] == $email && $user['password'] == $password)
    {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location: ./home.php');
    }
}
