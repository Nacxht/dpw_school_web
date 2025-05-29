<?php
require_once("../config.php");

$eskul_query = "SELECT * FROM ekstrakurikuler";
$eskul = $db->query($eskul_query)->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/ekstrakurikuler.css">
</head>

<body>
  <div class="header">
    <div class="logo-judul">
      <img src="../assets/images/ekstrakurikuler/logo.png" width="64" height="64" alt="Logo">
      <h1>Ekstrakulikuler</h1>
    </div>
  </div>
  <div class="content">
    <table style="width: 100%; border-collapse: collapse;">
      <?php foreach ($eskul as $data): ?>
        <tr>
          <td>
            <div class="ekstra-box">
              <img src="../assets/images/ekstrakurikuler/<?= $data["foto"] ?>" width="64">
              <h3><?= $data["nama"] ?></h3>
              <p><?= $data["deskripsi"] ?></p>
            </div>
          </td>
          <td></td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
  <div class="footer">
    <a href="">BERANDA</a>
  </div>
</body>

</html>