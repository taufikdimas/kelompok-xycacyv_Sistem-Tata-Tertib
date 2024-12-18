<!DOCTYPE html>
<?php
include 'components/navbar.php';
include 'components/footerSection.php';
include 'components/headerSection.php';
include 'components/tataTertibSection.php';
require_once '../app/controllers/getData.php';
?>

<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda | SiTatib</title>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="../assets/images/logo-sitatib.png" type="image/png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <!-- DATA -->
  <?php $data = ListPelanggaran() ?>

  <?php Navbar(false); ?>
  <?php HeaderSection("Bersama dan Bersatu Mewujudkan POLINEMA MAJU", "Pelajari tingkat tata tertib yang berlaku di Jurusan Teknik Informatika dan peraturan umum di Polinema Tetap patuhi peraturan untuk menjaga suasana belajar yang kondusif", true); ?>

  <div class="container">
    <?php TataTertibSection($data) ?>
    <?php FooterSection() ?>
  </div>

  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/handleFilter.js"></script>
</body>
</html>