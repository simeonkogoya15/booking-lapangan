<?php

include "../config/koneksi.php";

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM lapangan WHERE id='$id'");

header("location:lapangan.php");

?>