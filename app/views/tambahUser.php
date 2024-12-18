<?php
include 'components/navbar.php';
include 'components/formUser.php';
include 'components/alert.php';
require_once '../app/controllers/getData.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah User | SiTatib</title>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="../assets/images/logo-sitatib.png" type="image/png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <!-- NAVBAR -->
  <?php Navbar(true); ?>

  <div class="container pt-5">
    <h1 class="title">Tambah Pengguna</h1>
    <?php FormUser(null, 'add-user'); ?>
  </div>
  
  <?php 
  Alert('alert-success-icon.svg', 'Berhasil', 'Berhasil menambahkan user!', false, 'alert-success-add-user');
  ?>

  <script src="../assets/js/handleManageUser.js"></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>