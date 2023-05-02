<?php
require "function.php";

$id = $_GET["id"];
$agt = query("SELECT * FROM anggota WHERE id=$id")[0];


if(isset($_POST["submit"])) {
    if(update_anggota($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
        
    } else {
        echo "
            <script>
                alert('data gagal diubah');
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
    <title>Ubah Anggota</title>
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
            <div class="content-title">Ubah Anggota</div>
            <form action="" method="post">
              <input type="hidden" name="id" id="id" value="<?=$agt["id"]?>"/>
              <div class="input-data">
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" required value="<?=$agt["nama"]?>" />
              </div>
              <div class="input-data">
                <label for="nim">nim</label>
                <input type="text" name="nim" id="nim" required value="<?=$agt["nim"]?>"/>
              </div>
              <div class="input-data">
                <label for="prodi">prodi</label>
                <select name="prodi" id="prodi" required>
                  <option value="<?=$agt["prodi"]?>" selected="selected"><?=$agt["prodi"]?></option>
                  <option value="Sistem Informasi">Sistem Informasi</option>
                  <option value="Bisnis Digital">Bisnis Digital</option>
                  <option value="Teknologi Informasi">
                    Teknologi Informasi
                  </option>
                  <option value="Manajemen Informatika">
                    Manajemen Informatika
                  </option>
                </select>
              </div>
              <div class="input-data">
                <label for="angkatan">angkatan</label>
                <input type="text" name="angkatan" id="angkatan" required value="<?=$agt["angkatan"]?>" />
              </div>
              <div class="input-data">
                <label for="email">email</label>
                <input type="text" name="email" id="email" required value="<?=$agt["email"]?>"/>
              </div>
              <div class="input-data">
                <label for="no-hp">nomor hp</label>
                <input type="text" name="no-hp" id="no-hp" required value="<?=$agt["no_hp"]?>" />
              </div>
              <div class="btn-wrapper">
                <button class="btn-submit" name="submit" type="submit">Ubah</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
