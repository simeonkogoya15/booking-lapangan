<?php
session_start();
include "../config/koneksi.php";

if($_SESSION['role']!="admin"){
echo "Akses ditolak";
exit;
}

$user = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users"));
$booking = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM booking"));
$lapangan = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM lapangan"));

$today = date("Y-m-d");
$booking_hari_ini = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM booking WHERE tanggal='$today'"));

?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

.card{
border:none;
border-radius:15px;
}

</style>

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
<div class="container">

<span class="navbar-brand">Admin Dashboard</span>

<a href="../auth/logout.php" class="btn btn-danger">Logout</a>

</div>
</nav>

<div class="container mt-5">

<h3 class="mb-4">Dashboard</h3>

<div class="row">

<div class="col-md-3">

<div class="card bg-primary text-white shadow p-3">

<h5>Total User</h5>
<h2><?php echo $user; ?></h2>

</div>

</div>

<div class="col-md-3">

<div class="card bg-success text-white shadow p-3">

<h5>Total Booking</h5>
<h2><?php echo $booking; ?></h2>

</div>

</div>

<div class="col-md-3">

<div class="card bg-warning text-white shadow p-3">

<h5>Total Lapangan</h5>
<h2><?php echo $lapangan; ?></h2>

</div>

</div>

<div class="col-md-3">

<div class="card bg-danger text-white shadow p-3">

<h5>Booking Hari Ini</h5>
<h2><?php echo $booking_hari_ini; ?></h2>

</div>

</div>

</div>

<hr class="my-5">

<h4>Menu Admin</h4>

<a href="lapangan.php" class="btn btn-primary mt-2">
Kelola Lapangan
</a>

<a href="data_booking.php" class="btn btn-success mt-2">
Data Booking
</a>

<a href="data_user.php" class="btn btn-warning mt-2">
Data User
</a>

</div>

</body>
</html>