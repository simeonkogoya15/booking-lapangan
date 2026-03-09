<?php
session_start();
include "../config/koneksi.php";

if($_SESSION['role']!="user"){
echo "Akses ditolak";
exit;
}

$user = $_SESSION['username'];
$data_lapangan = mysqli_query($conn,"SELECT * FROM lapangan");

if(isset($_POST['booking'])){

$lapangan = $_POST['lapangan'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];

$cek = mysqli_query($conn,
"SELECT * FROM booking 
WHERE lapangan='$lapangan'
AND tanggal='$tanggal'
AND jam='$jam'");

if(mysqli_num_rows($cek)>0){

$pesan = "<div class='alert alert-danger'>Jadwal sudah dibooking, silakan pilih jam lain</div>";

}else{

mysqli_query($conn,"INSERT INTO booking(username,lapangan,tanggal,jam) 
VALUES('$user','$lapangan','$tanggal','$jam')");

$pesan = "<div class='alert alert-success'>Booking berhasil</div>";

}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Booking Lapangan</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>

.card img{
height:200px;
object-fit:cover;
}

</style>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
<div class="container">

<span class="navbar-brand">Booking Lapangan</span>

<a href="dashboard.php" class="btn btn-warning">Dashboard</a>

</div>
</nav>

<div class="container mt-5">

<div class="card shadow">

<div class="card-body">

<h3 class="mb-4">Booking Lapangan</h3>

<?php
if(isset($pesan)){
echo $pesan;
}
?>

<form method="POST">

<div class="mb-3">
<div class="row">

<?php while($row = mysqli_fetch_assoc($data_lapangan)){ ?>

<div class="col-md-4">

<form method="POST">

<div class="card shadow mb-4">

<img src="../images/<?php echo $row['gambar']; ?>" 
class="card-img-top"
onerror="this.src='../images/futsal.jpg'">

<div class="card-body text-center">

<h5><?php echo $row['nama_lapangan']; ?></h5>

<p>Harga : Rp <?php echo $row['harga']; ?></p>

<input type="hidden" name="lapangan" value="<?php echo $row['nama_lapangan']; ?>">

<div class="mb-3">
<label>Tanggal</label>
<input type="date" name="tanggal" class="form-control" required>
</div>

<div class="mb-3">
<label>Jam</label>
<select name="jam" class="form-control">

<option value="17:00">17:00 - 18:00</option>
<option value="18:00">18:00 - 19:00</option>
<option value="19:00">19:00 - 20:00</option>
<option value="20:00">20:00 - 21:00</option>

</select>
</div>

<button name="booking" class="btn btn-primary w-100">
Booking
</button>

</div>

</div>

</form>

</div>

<?php } ?>

</div>

<div class="mb-3">

<br><br>

<a href="booking_saya.php" class="btn btn-success">
Lihat Booking Saya
</a>

</form>

</div>

</div>

</div>

</body>
</html>