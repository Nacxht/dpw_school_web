<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/pendataan_alumni_form.css" />
</head>

<body>
  <!-- navbar website smk 1 krian -->
  <div class="header">
    <div class="logo">SMK 1 Krian</div>
    <div class="navbar">
      <div class="item">
        <a href="index.html">Beranda</a>
        <a href="#">Visi &amp; Misi</a>
      </div>
      <div class="login">
        <a href="#">login</a>
      </div>
    </div>
  </div>

  <!-- container website -->

  <div class="container">
    <div class="judul">
      <h2>Form Pendataan Alumni SMK Krian 1<br />Sidoarjo</h2>
    </div>

    <div class="form">
      <div class="label-pendataan">Pendataan</div>

      <div class="form-pendataan">
        <form action="#" method="post">
          <div class="isi-form">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" required />
          </div>

          <div class="isi-form">
            <label for="telepon">Nomor Telepon</label>
            <input type="tel" name="telepon" id="telepon" required />
          </div>

          <div class="isi-form">
            <label for="alamat">Alamat Tempat Tinggal</label>
            <input type="text" name="alamat" id="alamat" />
          </div>

          <div class="baris">
            <div class="isi-form">
              <label for="awal-tahun">Awal Tahun Ajaran</label>
              <input type="text" name="awal-tahun" id="awal-tahun" />
            </div>

            <div class="isi-form">
              <label for="akhir-tahun">Akhir Tahun Ajaran</label>
              <input type="text" name="akhir-tahun" id="akhir-tahun" />
            </div>
          </div>

          <div class="isi-form">
            <label>Jurusan</label>
            <div class="radio">
              <label for="instalasi-listrik">
                <input
                  type="radio"
                  name="jurusan"
                  id="instalasi-listrik"
                  value="instalasi-listrik" />
                Teknik Instalasi Tenaga Listrik
              </label>

              <label for="permesinan">
                <input
                  type="radio"
                  name="jurusan"
                  id="permesinan"
                  value="permesinan" />
                Teknik Permesinan
              </label>

              <label for="rpl">
                <input type="radio" name="jurusan" id="rpl" value="rpl" />
                Rekayasa Perangkat Lunak
              </label>

              <label for="logistik">
                <input
                  type="radio"
                  name="jurusan"
                  id="logistik"
                  value="logistik" />
                Teknik Logistik
              </label>

              <label for="pengelasan">
                <input
                  type="radio"
                  name="jurusan"
                  id="pengelasan"
                  value="pengelasan" />
                Teknik Pengelasan
              </label>
            </div>
          </div>

          <div class="isi-form">
            <label for="email">Email (valid)</label>
            <input type="email" name="email" id="email" required />
          </div>

          <div class="isi-form">
            <label>Kegitan Terakhir</label>
            <div class="radio">
              <label for="kerja">
                <input type="radio" name="kerja" id="kerja" value="kerja" />
                Kerja
              </label>

              <label for="melanjutkan-kuliah">
                <input
                  type="radio"
                  name="melanjutkan-kuliah"
                  id="melanjutkan-kuliah"
                  value="melanjutkan-kuliah" />
                Melanjutkan Kuliah
              </label>

              <label for="wiraswasta">
                <input
                  type="radio"
                  name="wiraswasta"
                  id="wiraswasta"
                  value="wiraswasta" />
                Wiraswasta
              </label>

              <label for="lain">
                <input type="radio" name="lain" id="lain" value="lain" />
                Lain-lain
              </label>
            </div>
          </div>

          <div class="isi-form">
            <label for="foto">Masukkan Foto</label>
            <input type="file" name="foto" id="foto" />
          </div>

          <button type="submit" class="submit">Submit Form</button>
        </form>
      </div>
    </div>
  </div>

  <!-- footer website -->

  <div class="footer">
    <div class="footer-content">
      <div class="footer-kiri">
        <h3>SMK 1 Krian</h3>
      </div>

      <div class="footer-kanan">
        <div class="medsos">
          <a href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24">
              <g fill="none" stroke="currentColor" stroke-width="1.5">
                <path
                  fill="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="m14 12l-3.5 2v-4z" />
                <path
                  d="M2 12.708v-1.416c0-2.895 0-4.343.905-5.274c.906-.932 2.332-.972 5.183-1.053C9.438 4.927 10.818 4.9 12 4.9s2.561.027 3.912.065c2.851.081 4.277.121 5.182 1.053S22 8.398 22 11.292v1.415c0 2.896 0 4.343-.905 5.275c-.906.931-2.331.972-5.183 1.052c-1.35.039-2.73.066-3.912.066s-2.561-.027-3.912-.066c-2.851-.08-4.277-.12-5.183-1.052S2 15.602 2 12.708Z" />
              </g>
            </svg>
          </a>

          <a href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24">
              <path
                fill="currentColor"
                d="M16 7a1 1 0 1 1 2 0a1 1 0 0 1-2 0" />
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="M12 7.25a4.75 4.75 0 1 0 0 9.5a4.75 4.75 0 0 0 0-9.5M8.75 12a3.25 3.25 0 1 1 6.5 0a3.25 3.25 0 0 1-6.5 0"
                clip-rule="evenodd" />
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="M17.258 2.833a47.7 47.7 0 0 0-10.516 0c-2.012.225-3.637 1.81-3.873 3.832a46 46 0 0 0 0 10.67c.236 2.022 1.86 3.607 3.873 3.832a47.8 47.8 0 0 0 10.516 0c2.012-.225 3.637-1.81 3.873-3.832a46 46 0 0 0 0-10.67c-.236-2.022-1.86-3.607-3.873-3.832m-10.35 1.49a46.2 46.2 0 0 1 10.184 0c1.33.15 2.395 1.199 2.55 2.517a44.4 44.4 0 0 1 0 10.32a2.89 2.89 0 0 1-2.55 2.516a46.2 46.2 0 0 1-10.184 0a2.89 2.89 0 0 1-2.55-2.516a44.4 44.4 0 0 1 0-10.32a2.89 2.89 0 0 1 2.55-2.516"
                clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="footer-bawah">
      <p>Copyright 2025 SMK 1 Krian</p>
    </div>
  </div>
</body>

</html>