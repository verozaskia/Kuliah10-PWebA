<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Index | Pendaftaran</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container p-5">
      <div class="text-center">
        <h1>Website Pendaftaran Siswa Baru</h1>
      </div>
      <div class="row mt-5">
        <h4 class="text-center mb-3">Menu Web Pendaftaran</h4>
        <div class="col-md-6">
          <div class="card w-100 h-100">
            <div class="card-body">
              <h5 class="card-title">Pendaftaran Siswa Baru</h5>
              <p class="card-text">
                Halaman untuk melakukan registrasi pendaftaran siswa baru
            
              </p>
              <a href="form-daftar.php" class="btn btn-primary"
                >Registrasi Siswa</a
              >
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card w-100 h-100">
            <div class="card-body">
              <h5 class="card-title">List Pendaftar Siswa Baru</h5>
              <p class="card-text">
                Halaman untuk mengelist semua pendaftar dari, bisa
                melakukan update dan delete data yang ada
              </p>
              <a href="list-siswa.php" class="btn btn-primary"
                >List Pendaftar</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if (isset($_GET['status'])) { ?>
    <script>
        <?php
            if ($_GET['status'] == 'sukses') {
                echo "Swal.fire({icon:'success',title:'Berhasil Menambahkan Data',text:'Berhasil registrasi di'})";
            } else {
                echo "Swal.fire({icon:'error',title:'Error Terjadi',text:'Gagal melakukan pendaftaran'})";
            }
        ?>
    </script>
<?php } ?>
  </body>
</html>