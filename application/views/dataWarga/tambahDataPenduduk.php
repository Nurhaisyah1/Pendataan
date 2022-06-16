<div class="app-wrapper">
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
          <h1 class="app-page-title mb-0">Form Tambah Data Penduduk Desa Bulu Apo</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              Desa Bulu Apo
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                  <label for="nik">NIK</label>
                  <small class="text-danger"><?= form_error('nik'); ?></small>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="name@example.com">
                  <label for="nama">Nama Lengkap</label>
                  <small class="text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-floating mb-3">
                  <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Floating label select example">
                    <option disabled selected>Gender</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                  </select>
                  <small class="text-danger"><?= form_error('jenis_kelamin'); ?></small>
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                </div>
                <div class="form-floating mb-2">
                  <select class="form-select" id="status" name="status" aria-label="Floating label select example">
                    <option disabled selected>Status</option>
                    <option value="Single">Single</option>
                    <option value="Menikah">Sudah Menikah</option>
                    <option value="Cerai">Sudah Cerai</option>
                  </select>
                  <small class="text-danger"><?= form_error('status'); ?></small>
                  <label for="status">Status</label>
                </div>
                <div class="input-group mb-2">
                  <div class="input-group mb-1 text-black">
                    <label for="tanggal_lahir">Tanggal lahir :</label>
                  </div>
                  <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" aria-label="Radio button for following text input">
                  </div>
                  <input type="date" class="form-control" aria-label="Text input with radio button" name="tanggal_lahir" id="tanggal_lahir">
                </div>
                <small class="text-danger"><?= form_error('tanggal_lahir'); ?></small>

                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="alamat" name="alamat" style="height: 100px"></textarea>
                  <label for="alamat">Alamat</label>
                  <small class="text-danger"><?= form_error('alamat'); ?></small>
                </div>
                <div class="col-auto mt-3 float-end">
                  <button class="btn app-btn-primary" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                    Tambah Data
                  </button>
                </div>
                <?php form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--//container-fluid-->
  </div>
  <!--//app-content-->