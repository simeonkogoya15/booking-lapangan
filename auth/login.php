<?php
session_start();
include "../config/koneksi.php";

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($query);

if($data){

$_SESSION['username'] = $data['username'];
$_SESSION['role'] = $data['role'];

if($data['role']=="admin"){
header("location:../admin/dashboard.php");
}else{
header("location:../user/dashboard.php");
}

}else{
$pesan = "Login gagal";
}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login - Booking Lapangan</title>

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

<h3 class="text-center mb-4">Login</h3>

<?php
if(isset($pesan)){
echo "<div class='alert alert-danger'>$pesan</div>";
}
?>

<form method="POST">

<div class="mb-3">
<input type="text" name="username" class="form-control" placeholder="Username" required>
</div>

<div class="mb-3">
<input type="password" name="password" class="form-control" placeholder="Password" required>
</div>

<button name="login" class="btn btn-primary w-100">Login</button>

</form>

<div class="text-center mt-3">
<a href="register.php">Belum punya akun? Register</a>
</div>

</div>

</div>

</div>

</div>

</div>

</body>
</html>