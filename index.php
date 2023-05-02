<?php
require_once 'function.php';

$anggotas = query("SELECT * FROM anggota");
$aktifitas = query("SELECT * FROM aktifitas");
$kontes = query("SELECT * FROM kontes");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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
          <div class="wrapper">
            <h1>Daftar Anggota</h1>
            <br />
            <table
              class="table-anggota"
              border="1"
              cellpadding="10"
              cellspacing="0"
              border="1"
              style="text-align: center"
            >
              <thead>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Email</th>
                <th>No Hp</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $count = 1 ?>
                <?php foreach($anggotas as $agt ) : ?>
                <tr>
                    <td><?= $count ?></td>
                    <td><?= $agt["nama"] ?></td>
                    <td><?= $agt["nim"] ?></td>
                    <td><?= $agt["prodi"] ?></td>
                    <td><?= $agt["angkatan"] ?></td>
                    <td><?= $agt["email"] ?></td>
                    <td><?= $agt["no_hp"] ?></td>
                    <td>
                      <button><a href="update_anggota.php?id=<?= $agt["id"] ?>">Ubah</a></button>
                      <button><a href="hapus_anggota.php?id=<?= $agt["id"] ?>">Hapus</a></button>
                    </td>
                </tr>
                <?php $count++ ?>
                <?php endforeach; ?>
              </tbody>
            </table>
            <br>
            <br>
            <br>
            <h1>Daftar Aktifitas Anggota</h1>
            <br />
            <table
              class="table-anggota"
              border="1"
              cellpadding="10"
              cellspacing="0"
              border="1"
              style="text-align: center"
            >
              <thead>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kegiatan</th>
                <th>Waktu</th>
                <th>Tempat</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $count = 1 ?>
                <?php foreach($aktifitas as $akf ) : ?>
                <tr>
                    <td><?= $count ?></td>
                    <td><?= $akf["nama"] ?></td>
                    <td><?= $akf["nim"] ?></td>
                    <td><?= $akf["kegiatan"] ?></td>
                    <td><?= $akf["waktu"] ?></td>
                    <td><?= $akf["tempat"] ?></td>
                    <td>
                      <button><a href="update_aktifitas.php?id=<?= $akf["id"] ?>">Ubah</a></button>
                      <button><a href="hapus_aktifitas.php?id=<?= $akf["id"] ?>">Hapus</a></button>
                    </td>
                </tr>
                <?php $count++ ?>
                <?php endforeach; ?>
              </tbody>
            </table>
            <br>
            <br>
            <br>
            <h1>Daftar Kontes Anggota</h1>
            <br />
            <table
              class="table-anggota"
              border="1"
              cellpadding="10"
              cellspacing="0"
              border="1"
              style="text-align: center"
            >
              <thead>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kontes Yang Diikuti</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $count = 1 ?>
                <?php foreach($kontes as $kts ) : ?>
                <tr>
                    <td><?= $count ?></td>
                    <td><?= $kts["nama"] ?></td>
                    <td><?= $kts["nim"] ?></td>
                    <td><?= $kts["kontes_diikuti"] ?></td>
                    <td>
                      <button><a href="update_kontes.php?id=<?= $kts["id"] ?>">Ubah</a></button>
                      <button><a href="hapus_kontes.php?id=<?= $kts["id"] ?>">Hapus</a></button>
                    </td>
                </tr>
                <?php $count++ ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
