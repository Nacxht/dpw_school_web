<?php
require_once("../config.php");

$jurusan_query = "SELECT id, nama_jurusan, foto_jurusan FROM jurusan";
$daftar_jurusan = $db->query($jurusan_query)->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Jurusan</title>
  <link rel="stylesheet" href="../assets/css/daftar_jurusan.css">
</head>

<body>
  <header class="header">
    <div class="header-kiri">
      <h1>SMK Krian 1</h1>
    </div>
    <div class="header-kanan">
      <ul>
        <li><a href="../index.php">Beranda</a></li>
        <li><a href="../visi-misi/index.php">Visi & Misi</a></li>
      </ul>
    </div>
  </header>

  <main class="container">
    <?php foreach ($daftar_jurusan as $jurusan): ?>
      <div class="kotak">
        <img src="<?= $jurusan["foto_jurusan"] ?>" alt="<?= $jurusan["nama_jurusan"] ?>">
        <p><?= str_replace("_", " ", $jurusan["nama_jurusan"]) ?></p>
        <a href="detail.php?id=<?= $jurusan["id"] ?>">Baca Selengkapnya</a>
      </div>
    <?php endforeach ?>
  </main>

  <footer class="footer">
    <h1>SMK Krian 1</h1>
    <p>Copyright 2025 SMK Krian 1</p>
    <div class="sosmed">

      <a href="https://www.youtube.com/@Pokejul."><i class="youtube">Youtube</i></a>
      <a href="https://www.instagram.com/izzulzulzul/"><i class="instagram">Instagram</i></a>
    </div>
  </footer>
</body>

</html>