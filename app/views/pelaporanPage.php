<?php include 'components/navbar.php'; ?>
<?php include 'components/headerSection.php'; ?>
<?php include 'components/alert.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <!-- NAVBAR -->
  <?php Navbar(false); ?>

  <!-- HEADER SECTION -->
  <?php HeaderSection("Pengaduan Online Mahasiswa
Teknik Informatika", "Sampaikan laporan Anda langsung kepada admin jurusan Teknik Informatika dengan cepat dan aman", false); ?>

  <!-- FORM -->
  <div class="modal-box">
    <h2>Laporan anda:</h2>
    <form class="form-container" id="form-pelaporan" enctype="multipart/form-data">
      <!-- <input type="text" placeholder="Ketik Judul Laporan *" class="input-field"> -->
      <!-- <input type="text" placeholder="PIlih Tingkat Pelanggaran *" class="input-field"> -->
      <input type="text" placeholder="Masukkan NIM Pelanggar *" nama="nim" class="input-field" required>
      <select id="tingkatPelanggaran" class="tingkatPelanggaran input-field" name="tingkatPelanggaran" required>
        <option disabled selected hidden>PIlih Tingkat Pelanggaran *</option>
        <option value="">All</option>
        <option value="I">I</option>
        <option value="I/II">I/II</option>
        <option value="II">II</option>
        <option value="III">III</option>
        <option value="IV">IV</option>
        <option value="V">V</option>
      </select>
      <select id="jenisPelanggaran" class="jenisPelanggaran input-field" name="jenisPelanggaran" required>
        <option disabled selected hidden>PIlih Jenis Pelanggaran *</option>
        <option value="">Blablabla</option>
        <option value="">jjjjjjjj</option>
        <option value="">blbablabla</option>
        <option value="">gggggggg</option>
      </select>
      <textarea placeholder="Ketik Laporan Anda *" class="input-field" rows="10" name="deskripsiLaporan" required></textarea>
      <!-- <input type="date" class="input-field" placeholder="Pilih Tanggal Kejadian *" class="input-field custom-date" name="tanggalKejadian" required> -->
      <div class="footer-modal">
        <label class="upload-section" for="lampiran">
          <span class="upload-icon"><img src="../assets/images/upload-image-icon.svg" width="30px" alt=""></span>
          <p>Upload Lampiran</p>
        </label>
        <input type="file" name="lampiran[]" id="lampiran" accept="image/*" hidden multiple required>
        <button type="submit" class="btn btn-red">Laporkan!</button>
      </div>
      <div class="list-file-uploaded">
        <h4 id="file-count">0 file uploaded</h4>
        <ul id="file-list">
        </ul>
      </div>
    </form>
  </div>

  <!-- ALERT -->
  <?php Alert('alert-success-icon.svg','Berhasil', 'Laporan berhasil terkirim.', 'Kami akan berusaha untuk menyelesaikan kasus ini.', false); ?>

  <!-- Login Modal -->
  <!-- <div class="modal-box">
    <div class="login-required">
      <img src="../assets/images/Lock.png" alt="">
      <span>
        <h3>Perlu Login</h3>
        <p>Mohon login terlebih dahulu</p>
      </span>
      <a href="./login.php" class="btn btn-full btn-primary">
        Login
      </a>
    </div>
  </div> -->

  <script src="../assets/js/script.js"></script>
</body>

</html>