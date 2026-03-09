<?php
session_start();
include "../config/koneksi.php";

if($_SESSION['role']!="user"){
echo "Akses ditolak";
exit;
}

$user = $_SESSION['username'];

// hitung booking saya
$booking = mysqli_query($conn,"SELECT * FROM booking WHERE username='$user'");
$total_booking = mysqli_num_rows($booking);

// hitung jumlah lapangan
$lapangan = mysqli_query($conn,"SELECT * FROM lapangan");
$total_lapangan = mysqli_num_rows($lapangan);
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard User</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- ICON -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
<div class="container">

<span class="navbar-brand">
<i class="fa-solid fa-user"></i> Dashboard User
</span>

<a href="../logout.php" class="btn btn-danger">
<i class="fa-solid fa-right-from-bracket"></i> Logout
</a>

</div>
</nav>

<div class="container mt-5">

<h3 class="mb-4">
<i class="fa-solid fa-hand"></i> Selamat Datang, <?php echo $user; ?>
</h3>

<div class="row">

<div class="col-md-4">
<div class="card bg-primary text-white shadow">
<div class="card-body text-center">

<i class="fa-solid fa-calendar-check fa-2x mb-2"></i>

<h4><?php echo $total_booking; ?></h4>
<p>Total Booking Saya</p>

</div>
</div>
</div>

<div class="col-md-4">
<div class="card bg-success text-white shadow">
<div class="card-body text-center">

<i class="fa-solid fa-futbol fa-2x mb-2"></i>

<h4><?php echo $total_lapangan; ?></h4>
<p>Jumlah Lapangan</p>

</div>
</div>
</div>

<div class="col-md-4">
<div class="card bg-warning text-dark shadow">
<div class="card-body text-center">

<i class="fa-solid fa-basketball fa-2x mb-2"></i>

<h4>Booking</h4>
<p>Pesan Lapangan</p>

<a href="booking.php" class="btn btn-dark">
<i class="fa-solid fa-plus"></i> Booking Sekarang
</a>

</div>
</div>
</div>

</div>

<br>

<div class="card shadow">
<div class="card-body">

<h5>
<i class="fa-solid fa-bars"></i> Menu Cepat
</h5>

<a href="booking.php" class="btn btn-primary">
<i class="fa-solid fa-calendar"></i> Booking Lapangan
</a>

<a href="booking_saya.php" class="btn btn-success">
<i class="fa-solid fa-list"></i> Booking Saya
</a>

</div>
</div>

</div>

</body>
</html>