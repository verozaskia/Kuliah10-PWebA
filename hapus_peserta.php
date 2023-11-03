<?php

include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM pendaftar WHERE id=$id";
    $query = mysqli_query($db_connection, $sql);

    if ($query) {
        header('Location: ../list-pendaftar.php?status=sukses');
    } else {
        exit('Location: ../list-pendaftar.php?status=gagal');
    }
} else {
    exit('akses dilarang...');
}
