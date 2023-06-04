<?php

session_start();

require_once './db_conn.php';

if (isset($_POST['username']) && isset($_POST['passw0rd'])) {
    $username = $_POST['username'];
    $passw0rd = $_POST['passw0rd'];
    
    $banned = 'OR';

    if (stripos($username, $banned) !== False) {
        header("Location: Badhacker.php");
      }else{

    $query = "SELECT * FROM user WHERE username='$username' AND passw0rd='$passw0rd'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = 'admin';
        header("Location: dashboard.php");
    } 
    else {
        $_SESSION['login_error'] = "Username atau passw0rd salah";
        header("Location: login.html");
    }}
} else {
    $_SESSION['login_error'] = "Username dan passw0rd harus diisi";
    header("Location: login.html");
}

?>
