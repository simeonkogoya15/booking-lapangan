<?php
session_start();
include "../config/koneksi.php";

if($_SESSION['role']!="user"){
echo "Akses ditolak";
exit;
}

$username = $_SESSION['username'];

$data = mysqli_query($conn,"SELECT * FROM booking WHERE username='$username'");
?>

<!DOCTYPE html>
<html>
<head>

<title>Booking Saya</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
<div class="container">

<span class="navbar-brand">Booking Saya</span>

<a href="dashboard.php" class="btn btn-warning">Dashboard</a>

</div>
</nav>

<div class="container mt-5">

<div class="card shadow">

<div class="card-body">

<h3 class="mb-4">Daftar Booking Saya</h3>

<table class="table table-bordered">

<tr>
<th>No</th>
<th>Lapangan</th>
<th>Tanggal</th>
<th>Jam</th>
<th>Aksi</th>
</tr>

<?php
$no = 1;
while($row = mysqli_fetch_assoc($data)){
?>

<tr>

<td><?php echo $no++; ?></td>
<td><?php echo $row['lapangan']; ?></td>
<td><?php echo $row['tanggal']; ?></td>
<td><?php echo $row['jam']; ?></td>

<td>

<a href="hapus_booking.php?id=<?php echo $row['id']; ?>" 
class="btn btn-danger btn-sm">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</div>
</div>
</div>

</body>
</html>