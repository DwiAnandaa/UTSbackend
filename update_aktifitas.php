<?php
require_once "function.php";


$id = $_GET["id"];
$akf = query("SELECT * FROM aktifitas WHERE id=$id")[0];


if(isset($_POST["submit"])) {
    if(update_aktifitas($_POST) > 0) {
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
    <title>Ubah Aktifitas</title>
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
            <div class="content-title">Ubah Aktifitas Anggota</div>
            <form action="" method="post">
              <input type="hidden" name="id" id="id" value="<?=$akf["id"]?>"/>
              <div class="input-data">
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" required value="<?=$akf["nama"]?>" />
              </div>
              <div class="input-data">
                <label for="nim">nim</label>
                <input type="text" name="nim" id="nim" required value="<?=$akf["nim"]?>" />
              </div>
              <div class="input-data">
                <label for="kegiatan">kegiatan</label>
                <select name="kegiatan" id="kegiatan" required>
                  <option value="<?=$akf["kegiatan"]?>" selected="selected"><?=$akf["kegiatan"]?></option>
                  <option value="Workout">Workout</option>
                  <option value="Gym">Gym</option>
                </select>
              </div>
              <div class="input-data">
                <label for="waktu">waktu</label>
                <select name="waktu" id="waktu" required >
                  <option value="<?=$akf["waktu"]?>" selected="selected"><?=$akf["waktu"]?></option>
                  <option value="Pagi">Pagi</option>
                  <option value="Sore">Sore</option>
                </select>
              </div>
              <div class="input-data">
                <label for="tempat">tempat</label>
                <select name="tempat" id="tempat" required value="<?=$akf["tempat"]?>" >
                  <option value="<?=$akf["tempat"]?>" selected="selected"><?=$akf["tempat"]?></option>
                  <option value="Renon">Renon</option>
                  <option value="Jimbaran">Jimbaran</option>
                </select>
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
