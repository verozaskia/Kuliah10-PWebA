<?php

include 'config.php';

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-pendaftar.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pendaftar WHERE id=$id";
$query = mysqli_query($db_connection, $sql);
$pendaftar = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    exit('data tidak ditemukan...');
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Pendaftar | Pendaftaran Lomba Nyanyi</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <section class="vh-100" style="background-color: #e76f51">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card rounded-4">
              <div class="card-body p-4 p-lg-5 text-black">
                <h5
                  class="fw-normal mb-3 pb-3 text-center"
                  style="letter-spacing: 1px"
                >
                  Edit Pendaftaran pendaftar Baru
                </h5>
                <form action="edit_proses.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $pendaftar['id']; ?>" />
                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Nama"
                      aria-label="nama"
                      name="nama"
                      value="<?php echo $pendaftar['nama']; ?>"
                      required
                    />
                  </div>
                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Alamat Anda"
                      aria-label="alamat"
                      name="alamat"
                      value="<?php echo $pendaftar['alamat']; ?>"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <?php $jk = $pendaftar['jenis_kelamin']; ?>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="jenis_kelamin"
                        id="laki"
                        value="Laki-Laki" <?php echo ($jk == 'Laki-Laki') ? 'checked' : ''; ?>
                      />
                      <?php echo $jk; ?>
                      <label class="form-check-label" for="laki">
                        Laki-Laki
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="jenis_kelamin"
                        id="Perempuan"
                        value="Perempuan" <?php echo ($jk == 'Perempuan') ? 'checked' : ''; ?>
                      />
                      <label class="form-check-label" for="Perempuan">
                        Perempuan
                      </label>
                    </div>
                  </div>

                  <div class="mb-3">
                    <?php $agama = $pendaftar['agama']; ?>
                    <select class="form-select" aria-label="Agama" name="agama" required>
                     <option <?php echo ($agama == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                      <option <?php echo ($agama == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                      <option <?php echo ($agama == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                      <option <?php echo ($agama == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                      <option <?php echo ($agama == 'Budha') ? 'selected' : ''; ?>>Budha</option>
                      <option <?php echo ($agama == 'Konghuchu') ? 'selected' : ''; ?>>Konghuchu</option>
                    </select>
                  </div>

                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Kampus Asal"
                      aria-label="KampusAsal"
                      name="kampus_asal"
                      value="<?php echo $pendaftar['kampus_asal']; ?>"
                      required
                    />
                  </div>
                  <input type="submit" value="Simpan" class="btn btn-primary btn-block" name="simpan"></input>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- JavaScript by bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>