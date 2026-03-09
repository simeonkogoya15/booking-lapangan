<?php
session_start();
include "../config/koneksi.php";

if($_SESSION['role']!="admin"){
echo "Akses ditolak";
exit;
}

$data = mysqli_query($conn,"SELECT * FROM booking");
?>

<!DOCTYPE html>
<html>
<head>

<title>Semua Booking</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
<div class="container">

<span class="navbar-brand">Data Booking</span>

<a href="dashboard.php" class="btn btn-warning">Dashboard</a>

</div>
</nav>

<div class="container mt-5">

<div class="card shadow">

<div class="card-body">

<h3 class="mb-4">Semua Booking</h3>

<table class="table table-bordered">

<tr>
<th>No</th>
<th>User</th>
<th>Lapangan</th>
<th>Tanggal</th>
<th>Jam</th>
</tr>

<?php
$no = 1;
while($row = mysqli_fetch_assoc($data)){
?>

<tr>

<td><?php echo $no++; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['lapangan']; ?></td>
<td><?php echo $row['tanggal']; ?></td>
<td><?php echo $row['jam']; ?></td>

</tr>

<?php } ?>

</table>

</div>
</div>

</div>

</body>
</html>