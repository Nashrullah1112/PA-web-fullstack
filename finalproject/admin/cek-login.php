<?php
session_start();
$errorMessage = '';

if (isset($_POST['username']) && isset($_POST['password'])) {
    include("config.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password ='$password'";
    $query = mysqli_query($db, $sql);
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['login'] = true;
        $_SESSION['id'] = mysqli_fetch_assoc($query)['id'];
        header('Location:read.php');
        exit;
    } else {
        header('Location:admin.php?status=gagal-autentikasi');
        echo 'Sorry, wrong user id / password';
    }
}