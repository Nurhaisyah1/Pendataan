<div class="row g-0 app-auth-wrapper justify-content-center">
  <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
    <div class="d-flex flex-column align-content-end">
      <div class="app-auth-body mx-auto">
        <div class="app-auth-branding mb-4"><a class="app-logo" href="#"><img class="logo-icon me-2" src="<?= base_url('assets/images/logo.png'); ?>" alt="logo"></a></div>
        <h2 class="auth-heading text-center mb-5">Log in to Desa Bulu Apo</h2>
        <div class="auth-form-container text-start">
          <?php if ($this->session->flashdata('Message')) : ?>
            <?= $this->session->flashdata('Message'); ?>
          <?php endif; ?>
          <form class="auth-form login-form" action="" method="POST">
            <div class="email mb-3">
              <label class="sr-only" for="email">Email</label>
              <input id="email" name="email" type="email" class="form-control signin-email" placeholder="Email address">
              <small class="text-danger"><?= form_error('email'); ?></small>
            </div>
            <div class="password mb-3">
              <label class="sr-only" for="password">Password</label>
              <input id="password" name="password" type="password" class="form-control signin-password" placeholder="Password">
              <small class="text-danger"><?= form_error('password'); ?></small>
            </div>
            <div class="text-center">
              <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
            </div>
          </form>
          <div class="auth-option text-center pt-5">Belum Punya Akun? <a class="text-link" href="<?= site_url('Login/registrasi'); ?>">Daftar Disini</a>.</div>
        </div>
      </div>