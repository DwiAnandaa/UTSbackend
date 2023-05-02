<?php
require_once "function.php";

if(isset($_POST["submit"])) {
  if(append_kontes($_POST) > 0) {
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
    <title>Tambah Kontes</title>
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
            <div class="content-title">Tambah Data Kontes Anggota</div>
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
                <label for="kontes">kontes yang diikuti</label>
                <select name="kontes" id="kontes" required>
                  <option value="Pull Up">Pull Up</option>
                  <option value="Sit Up">Sit Up</option>
                  <option value="Push Up">Push Up</option>
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
