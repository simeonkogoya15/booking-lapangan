<?php
include "../config/koneksi.php";

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM booking WHERE id='$id'");

header("location:booking_saya.php");
?>