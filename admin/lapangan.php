<?php
session_start();
include "../config/koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM lapangan");
?>

<h2>Data Lapangan</h2>

<a href="tambah_lapangan.php">Tambah Lapangan</a>
<br><br>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Nama Lapangan</th>
<th>Jenis</th>
<th>Harga</th>
<th>Aksi</th>
</tr>

<?php while($d = mysqli_fetch_assoc($data)){ ?>

<tr>
<td><?php echo $d['id']; ?></td>
<td><?php echo $d['nama_lapangan']; ?></td>
<td><?php echo $d['jenis']; ?></td>
<td><?php echo $d['harga']; ?></td>

<td>
<a href="edit_lapangan.php?id=<?php echo $d['id']; ?>">Edit</a>
|
<a href="hapus_lapangan.php?id=<?php echo $d['id']; ?>">Hapus</a>
</td>

</tr>

<?php } ?>

</table>

<br>
<a href="dashboard.php">Kembali</a>