<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/form_pendaftaran.css" />
</head>

<body>
  <nav>
    <div class="logosmk">
      <img src="../assets/images/pendaftaran/images-removebg-preview.png" alt="" />
      <p>SMK 1 KRIAN</p>
    </div>
    <div class="beranda">
      <p><a href="../index.php">BERANDA</a></p>
      <p><a href="../visi-misi/index.php">VISI&MISI</a></p>
    </div>
  </nav>

  <!-- Main content -->
  <form action="">
    <main>
      <div class="mainright">
        <h1>PENDAFTARAN</h1>

        <!-- table input  -->
        <div class="inputdata">
          <div class="nama">
            <p><label for="">NAMA LENGKAP</label></p>
            <input type="text" />
          </div>

          <div class="alamat">
            <p><label for="">ALAMAT</label></p>
            <input type="text" />
          </div>

          <div class="lahir">
            <p><label for="">TANGGAL LAHIR</label></p>
            <input type="date" />
          </div>

          <div class="kelamin">
            <p><label for="">JENIS KELAMIN</label></p>
            <input type="text" />
          </div>

          <div class="agama">
            <p><label for="">AGAMA</label></p>
            <input type="text" />
          </div>

          <div class="ayah">
            <p><label for="">NAMA AYAH</label></p>
            <input type="text" />
          </div>

          <div class="ibu">
            <p><label for="">NAMA IBU</label></p>
            <input type="text" />
          </div>

          <div class="telp">
            <p><label for="">NO TELP/HP</label></p>
            <input type="number" />
          </div>

          <div class="foto">
            <p><label for="">FOTO 3X3</label></p>
            <img src="../assets/images/pendaftaran/profil.jpg" alt="" />
            <input type="file" />
          </div>
        </div>
        <!-- gambar anak smanya  -->
      </div>
      <div class="gambar">
        <img src="../assets/images/pendaftaran/manusia.jpg" alt="" />
      </div>
    </main>
    <div class="buttons">
      <h2><button>EDIT</button></h2>
      <h2><button>KONFIRMASI</button></h2>
    </div>
  </form>
</body>

</html>