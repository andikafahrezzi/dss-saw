<!DOCTYPE html>
<html>
<head>
	<title>SAW</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome/css/fontawesome-all.css">
</head>
<?php
session_start();
if ($_SESSION['status'] != 'login') {
    header('location:login.php');
}
?>

<body>

<nav class="navbar navbar-expand-lg">
  <div class="container">
  <a class="navbar-brand" href="index.php"><img src="assets/image/logo.png" alt="" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="nilai.php">Nilai</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="kriteria.php">Kriteria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="alternatif.php">Alternatif</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="rangking.php">Rangking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="logout.php" id="logout"><i class="fas fa-user"></i> Logout</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
