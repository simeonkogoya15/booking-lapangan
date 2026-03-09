<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM lapangan WHERE id='$id'");
$d = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

mysqli_query($conn,"UPDATE lapangan SET
nama_lapangan='$nama',
jenis='$jenis',
harga='$harga'
WHERE id='$id'");

header("location:lapangan.php");

}
?>

<h2>Edit Lapangan</h2>

<form method="POST">

Nama Lapangan
<br>
<input type="text" name="nama" value="<?php echo $d['nama_lapangan']; ?>">

<br><br>

Jenis
<br>
<input type="text" name="jenis" value="<?php echo $d['jenis']; ?>">

<br><br>

Harga
<br>
<input type="number" name="harga" value="<?php echo $d['harga']; ?>">

<br><br>

<button name="update">Update</button>

</form>