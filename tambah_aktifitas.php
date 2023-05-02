<?php
require_once "function.php";

if(isset($_POST["submit"])) {
  if(append_aktifitas($_POST) > 0) {
      echo "
          <script>
              alert('data berhasil ditambahkan');
              document.location.href = 'index.php';
          </script>
      ";
      
  } else {
      echo "
          <script>
              alert('data gagal ditambahkan');
          </script>
      ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Aktifitas</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-wrapper">
          <div class="logo">Ghost</div>
          <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="tambah_anggota.php">Tambah Anggota</a></li>
              <li><a href="tambah_aktifitas.php">Tambah Aktifitas</a></li>
              <li><a href="tambah_kontes.php">Tambah Kontes</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main>
      <section>
        <div class="container">
          <div class="wrapper wrapper-center ">
            <div class="content-title">Tambah Aktifitas Anggota</div>
            <form action="" method="post">
              <div class="input-data">
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" required />
              </div>
              <div class="input-data">
                <label for="nim">nim</label>
                <input type="text" name="nim" id="nim" required/>
              </div>
              <div class="input-data">
                <label for="kegiatan">kegiatan</label>
                <select name="kegiatan" id="kegiatan" required>
                  <option value="Workout">Workout</option>
                  <option value="Gym">Gym</option>
                </select>
              </div>
              <div class="input-data">
                <label for="waktu">waktu</label>
                <select name="waktu" id="waktu" required>
                  <option value="Pagi">Pagi</option>
                  <option value="Sore">Sore</option>
                </select>
              </div>
              <div class="input-data">
                <label for="tempat">tempat</label>
                <select name="tempat" id="tempat" required>
                  <option value="Renon">Renon</option>
                  <option value="Jimbaran">Jimbaran</option>
                </select>
              </div>
              <div class="btn-wrapper">
                <button class="btn-submit" name="submit" type="submit">tambah</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
