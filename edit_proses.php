<?php

include 'config.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['kampus_asal'];

    $sql = "UPDATE pendaftar SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', kampus_asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($db_connection, $sql);

    if ($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-pendaftar.php');
    } else {
        // kalau gagal tampilkan pesan
        exit('Gagal menyimpan perubahan...');
    }
} else {
    exit('Akses dilarang...');
}
