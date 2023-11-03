<?php

include 'config.php';

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $kampus_asal = $_POST['kampus_asal'];

    if ($nama != null && $alamat != null && $jenis_kelamin != null && $agama != null && $kampus_asal != null) {
        $sql_script = "INSERT INTO PENDAFTAR (nama, alamat, jenis_kelamin, agama, kampus_asal) VALUE ('$nama','$alamat','$jenis_kelamin','$agama','$kampus_asal')";
        $sql_query = mysqli_query($db_connection, $sql_script);
    } else {
        header('Location: registrasi.php?status=gagal');
    }

    if ($sql_query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    exit('Prohibited Access');
}
