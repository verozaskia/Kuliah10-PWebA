<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Siswa Baru | Pendaftaran SMA</title>
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
                  Pendaftaran Siswa Baru
                </h5>
                <form action="proses-pendaftaran.php" method="POST">
                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Nama"
                      aria-label="nama"
                      name="nama"
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
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="jenis_kelamin"
                        id="laki"
                        value="Laki-Laki"
                      />
                      <label class="form-check-label" for="laki">
                        Laki-Laki
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="jenis_kelamin"
                        id="perempuan"
                        value="Perempuan"
                      />
                      <label class="form-check-label" for="perempuan">
                        Perempuan
                      </label>
                    </div>
                  </div>

                  <div class="mb-3">
                    <select class="form-select" aria-label="Agama" name="agama" required>
                      <option selected disabled>Pilih Agama Anda</option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Konghuchu">Konghuchu</option>
                    </select>
                  </div>

                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Sekolah Asal"
                      aria-label="SekolahAsal"
                      name="sekolah_asal"
                      required
                    />
                  </div>
                  <input type="submit" value="Daftar" class="btn btn-primary btn-block" name="daftar"></input>
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