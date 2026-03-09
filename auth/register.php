<?php
include "../config/koneksi.php";

if(isset($_POST['register'])){

$username = $_POST['username'];
$password = $_POST['password'];
$role = "user";

mysqli_query($conn,"INSERT INTO users(username,password,role) VALUES('$username','$password','$role')");

echo "<div class='alert alert-success text-center'>Register berhasil! <a href='login.php'>Login</a></div>";

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Register - Booking Lapangan</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
height:100vh;
display:flex;
align-items:center;
justify-content:center;
background: linear-gradient(135deg,#1d3557,#457b9d);
}

.card{
border-radius:15px;
}

</style>

</head>

<body>

<div class="container">

<div class="row justify-content-center">

<div class="col-md-4">

<div class="card shadow">

<div class="card-body p-4">

<h3 class="text-center mb-4">Register</h3>

<form method="POST">

<div class="mb-3">
<input type="text" name="username" class="form-control" placeholder="Username" required>
</div>

<div class="mb-3">
<input type="password" name="password" class="form-control" placeholder="Password" required>
</div>

<button name="register" class="btn btn-success w-100">Register</button>

</form>

<div class="text-center mt-3">
<a href="login.php">Sudah punya akun? Login</a>
</div>

</div>

</div>

</div>

</div>

</div>

</body>
</html>