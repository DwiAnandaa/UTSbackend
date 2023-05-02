<?php 
  require_once 'config.php';

  function query($query) {
    global $conn;
    
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }

  function append_anggota($data){
    global $conn;
    $nama = htmlentities(addslashes($data['nama']));
    $nim = htmlentities(addslashes($data['nim']));
    $prodi = htmlentities(addslashes($data['prodi']));
    $angkatan = htmlentities(addslashes($data['angkatan']));
    $email = htmlentities(addslashes($data['email']));
    $noHp = htmlentities(addslashes($data['no-hp']));
  
    $sql = "INSERT INTO anggota (nama, nim, prodi, angkatan, email, no_hp) 
            VALUES ('$nama', '$nim', '$prodi', '$angkatan', '$email', '$noHp')";
            
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
  }

  function append_aktifitas($data){
    global $conn;
    $nama = htmlentities(addslashes($data['nama']));
    $nim = htmlentities(addslashes($data['nim']));
    $kegiatan = htmlentities(addslashes($data['kegiatan']));
    $waktu = htmlentities(addslashes($data['waktu']));
    $tempat = htmlentities(addslashes($data['tempat']));
  
    $sql = "INSERT INTO aktifitas (nama, nim, kegiatan, waktu, tempat) 
            VALUES ('$nama', '$nim', '$kegiatan', '$waktu', '$tempat')";
            
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
  }

  function delete($id, $tabel){
    global $conn;
    mysqli_query($conn, "DELETE FROM $tabel WHERE id = $id");
    
    return mysqli_affected_rows($conn);
  }

  function append_kontes($data){
    global $conn;
    $nama = htmlentities(addslashes($data['nama']));
    $nim = htmlentities(addslashes($data['nim']));
    $kontes = htmlentities(addslashes($data['kontes']));
  
    $sql = "INSERT INTO kontes (nama, nim, kontes_diikuti) 
            VALUES ('$nama', '$nim', '$kontes')";
            
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
  }

  function update_anggota($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlentities(addslashes($data['nama']));
    $nim = htmlentities(addslashes($data['nim']));
    $prodi = htmlentities(addslashes($data['prodi']));
    $angkatan = htmlentities(addslashes($data['angkatan']));
    $email = htmlentities(addslashes($data['email']));
    $noHp = htmlentities(addslashes($data['no-hp']));

    //masukkan data
    $query = "UPDATE anggota SET
            nama = '$nama',
            nim  = '$nim',
            prodi = '$prodi',
            angkatan = '$angkatan',
            email = '$email',
            no_hp = '$noHp' 
            WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }

  function update_aktifitas($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlentities(addslashes($data['nama']));
    $nim = htmlentities(addslashes($data['nim']));
    $kegiatan = htmlentities(addslashes($data['kegiatan']));
    $waktu = htmlentities(addslashes($data['waktu']));
    $tempat = htmlentities(addslashes($data['tempat']));

    //masukkan data
    $query = "UPDATE aktifitas SET
            nama = '$nama',
            nim  = '$nim',
            kegiatan = '$kegiatan',
            waktu = '$waktu',
            tempat = '$tempat'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }

  function update_kontes($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlentities(addslashes($data['nama']));
    $nim = htmlentities(addslashes($data['nim']));
    $kontes = htmlentities(addslashes($data['kontes']));

    //masukkan data
    $query = "UPDATE kontes SET
            nama = '$nama',
            nim  = '$nim',
            kontes_diikuti = '$kontes'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }

