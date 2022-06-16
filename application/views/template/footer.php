<footer class="app-footer">
  <div class="container text-center py-3">
    <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by Nurhaisyah</small>
  </div>
</footer>
</div>
<script src="<?= base_url('assets/plugins/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?= base_url('assets/js/app.js'); ?>"></script>
<script>
  const alert = document.getElementById('berhasil');
  if (alert) {
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Data berhasil ditambahkan',
      showConfirmButton: false,
      timer: 1500
    })
  }
</script>
</body>

</html>