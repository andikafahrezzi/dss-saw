<?php
include 'includes/config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = $koneksi->query("select * from users where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index.php");
} else {
    $_SESSION['alert'] = "password atau username salah";
    echo "<script>alert('gagallogin');</script>";
    header("location:login.php");
}
?>