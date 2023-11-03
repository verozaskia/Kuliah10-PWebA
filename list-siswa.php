<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>List Pendaftar | Pendaftaran SMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>
    <div class="container p-5">
        <div class="text-center">
            <h1>Website Pendaftaran Siswa Baru SMA</h1>
        </div>
        <h4 class="text-center mb-3">List Siswa Pendaftar SMA</h4>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Asal Sekolah</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql_script = 'SELECT * FROM calon_siswa';
                $query = mysqli_query($db, $sql_script);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo '<tr>';
                    echo '<td>' . $siswa['id'] . '</td>';
                    echo '<td>' . $siswa['nama'] . '</td>';
                    echo '<td>' . $siswa['alamat'] . '</td>';
                    echo '<td>' . $siswa['jenis_kelamin'] . '</td>';
                    echo '<td>' . $siswa['agama'] . '</td>';
                    echo '<td>' . $siswa['sekolah_asal'] . '</td>';
                    echo '<td> <a class="btn btn-warning btn-sm" href="form-edit.php?id=' . $siswa['id'] . '">Edit</a> <button class="btn btn-danger btn-sm" data-id="' . $siswa['id'] . '">Hapus</button> </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <p>Total Pendaftar = <?php echo mysqli_num_rows($query); ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //delete validation
        const deleteButton = document.querySelectorAll('.btn-danger');
        deleteButton.forEach((button) => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Hapus',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'hapus.php?id=' + button.getAttribute('data-id');
                    }
                })
            });
        });
    </script>
    <?php if (isset($_GET['status'])) { ?>
        <script>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Swal.fire({icon:'success',title:'Berhasil',text:'Berhasil Melakukan Perintah'})";
            } else {
                echo "Swal.fire({icon:'error',title:'Error',text:'Terjadi Kesalahan'})";
            }
            ?>
        </script>
    <?php } ?>
</body>
</html>
