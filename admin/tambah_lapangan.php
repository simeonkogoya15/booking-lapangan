<?php
include "../config/koneksi.php";

if(isset($_POST['simpan'])){

$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

mysqli_query($conn,"INSERT INTO lapangan(nama_lapangan,jenis,harga)
VALUES('$nama','$jenis','$harga')");

header("location:lapangan.php");

}
?>

<h2>Tambah Lapangan</h2>

<form method="POST">

Nama Lapangan
<br>
<input type="text" name="nama">

<br><br>

Jenis
<br>
<input type="text" name="jenis">

<br><br>

Harga
<br>
<input type="number" name="harga">

<br><br>

<button name="simpan">Simpan</button>

</form>