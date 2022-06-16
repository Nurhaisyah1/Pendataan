<div class="row g-0 app-auth-wrapper">
  <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
    <div class="d-flex flex-column align-content-end">
      <div class="app-auth-body mx-auto">
        <div class="app-auth-branding mb-4">
          <a class="app-logo" href="<?= site_url('Login/registrasi'); ?>">
            <img class="logo-icon me-2" src="<?= base_url('assets/images/logo.png'); ?>" alt="logo">
          </a>
        </div>
        <h2 class="auth-heading text-center mb-4">Daftar ke Desa Bulu Apo</h2>

        <div class="auth-form-container text-start mx-auto">
          <form class="auth-form auth-signup-form" action="" method="POST">
            <div class="email mb-3">
              <label class="sr-only" for="nama_lengkap">Nama Lengkap</label>
              <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control signup-name" placeholder="Nama Lengkap">
              <small class="text-danger"><?= form_error('nama_lengkap'); ?></small>
            </div>
            <div class="email mb-3">
              <label class="sr-only" for="email">Email Address</label>
              <input id="email" name="email" type="email" class="form-control signup-email" placeholder="Email">
              <small class="text-danger"><?= form_error('email'); ?></small>
            </div>
            <div class="password mb-3">
              <label class="sr-only" for="password">Password</label>
              <input id="password" name="password" type="password" class="form-control signup-password" placeholder="Password">
              <small class="text-danger"><?= form_error('password'); ?></small>
            </div>
            <div class="password mb-3">
              <label class="sr-only" for="konfirmasipassword">Password</label>
              <input id="konfirmasipassword" name="konfirmasipassword" type="password" class="form-control signup-password" placeholder="Konfirmasi Password">
              <small class="text-danger"><?= form_error('konfirmasipassword'); ?></small>
            </div>
            <div class="text-center">
              <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Register</button>
            </div>
          </form>
          <div class="auth-option text-center pt-5">Sudah punya akun? <a class="text-link" href="<?= site_url('Login'); ?>">Log in</a></div>
        </div>
      </div>