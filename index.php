<!DOCTYPE html>
<html>
<head>

<title>Booking Lapangan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand">Booking Lapangan</a>

<div>
<a href="auth/login.php" class="btn btn-primary">Login</a>
<a href="auth/register.php" class="btn btn-success">Register</a>
</div>

</div>
</nav>

<div class="container text-center mt-5">

<h1 class="mb-3">Sistem Booking Lapangan Olahraga</h1>

<p>
Pesan lapangan futsal, basket, dan badminton dengan mudah.
</p>

<a href="auth/login.php" class="btn btn-lg btn-primary mt-3">
Booking Sekarang
</a>

</div>
<script>

document.querySelector("h1").style.opacity = "0";

setTimeout(function(){
document.querySelector("h1").style.transition = "1s";
document.querySelector("h1").style.opacity = "1";
},300);

</script>

</body>
</html>