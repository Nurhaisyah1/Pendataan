<?php if ($this->session->flashdata('Message')) : ?>
  <?= $this->session->flashdata('Message'); ?>
  <?php $this->session->unset_userdata('Message'); ?>
<?php endif; ?>
<div class="app-wrapper">
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
          <h1 class="app-page-title mb-0">Data Penduduk Desa Bulu Apo</h1>
        </div>
        <div class="col-auto">
          <a class="btn app-btn-primary" href="<?= site_url('warga/tambahData'); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
            </svg>
            Tambah Data
          </a>
        </div>
      </div>


      <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
        <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
        <a class="flex-sm-fill text-sm-center nav-link" id="single" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Single</a>
        <a class="flex-sm-fill text-sm-center nav-link" id="menikah" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Sudah Menikah</a>
        <a class="flex-sm-fill text-sm-center nav-link" id="cerai" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Sudah Cerai</a>
      </nav>


      <div class="tab-content" id="orders-table-tab-content">
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
          <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
              <div class="table-responsive">
                <table class="table app-table-hover mb-0 text-left">
                  <thead>
                    <tr>
                      <th class="cell">No</th>
                      <th class="cell">NIK</th>
                      <th class="cell">Nama</th>
                      <th class="cell">Jenis Kelamin</th>
                      <th class="cell">Status</th>
                      <th class="cell">Tanggal Lahir</th>
                      <th class="cell">Alamat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dataPenduduk as $dp) : ?>
                      <tr>
                        <td class="cell"><?= $i++; ?></td>
                        <td class="cell"><?= $dp['nik']; ?></td>
                        <td class="cell"><?= $dp['nama']; ?></td>
                        <td class="cell"><?= $dp['jenis_kelamin']; ?></td>
                        <td class="cell"><?= $dp['status']; ?></td>
                        <td class="cell"><?= $dp['tanggal_lahir']; ?></td>
                        <td class="cell"><?= $dp['alamat']; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <nav class="app-pagination">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="single">
          <div class="app-card app-card-orders-table mb-5">
            <div class="app-card-body">
              <div class="table-responsive">

                <table class="table mb-0 text-left">
                  <thead>
                    <tr>
                      <th class="cell">No</th>
                      <th class="cell">NIK</th>
                      <th class="cell">Nama</th>
                      <th class="cell">Jenis Kelamin</th>
                      <th class="cell">Status</th>
                      <th class="cell">Tanggal Lahir</th>
                      <th class="cell">Alamat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dataPendudukSingle as $s) : ?>
                      <tr>
                        <td class="cell"><?= $i++; ?></td>
                        <td class="cell"><?= $s['nik']; ?></td>
                        <td class="cell"><?= $s['nama']; ?></td>
                        <td class="cell"><?= $s['jenis_kelamin']; ?></td>
                        <td class="cell"><?= $s['status']; ?></td>
                        <td class="cell"><?= $s['tanggal_lahir']; ?></td>
                        <td class="cell"><?= $s['alamat']; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="menikah">
          <div class="app-card app-card-orders-table mb-5">
            <div class="app-card-body">
              <div class="table-responsive">
                <table class="table mb-0 text-left">
                  <thead>
                    <tr>
                      <th class="cell">No</th>
                      <th class="cell">NIK</th>
                      <th class="cell">Nama</th>
                      <th class="cell">Jenis Kelamin</th>
                      <th class="cell">Status</th>
                      <th class="cell">Tanggal Lahir</th>
                      <th class="cell">Alamat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dataPendudukMenikah as $m) : ?>
                      <tr>
                        <td class="cell"><?= $i++; ?></td>
                        <td class="cell"><?= $m['nik']; ?></td>
                        <td class="cell"><?= $m['nama']; ?></td>
                        <td class="cell"><?= $m['jenis_kelamin']; ?></td>
                        <td class="cell"><?= $m['status']; ?></td>
                        <td class="cell"><?= $m['tanggal_lahir']; ?></td>
                        <td class="cell"><?= $m['alamat']; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="cerai">
          <div class="app-card app-card-orders-table mb-5">
            <div class="app-card-body">
              <div class="table-responsive">
                <table class="table mb-0 text-left">
                  <thead>
                    <tr>
                      <th class="cell">No</th>
                      <th class="cell">NIK</th>
                      <th class="cell">Nama</th>
                      <th class="cell">Jenis Kelamin</th>
                      <th class="cell">Status</th>
                      <th class="cell">Tanggal Lahir</th>
                      <th class="cell">Alamat</th>
                    </tr>
                  </thead>


                  <tbody>
                    <?php if (empty($dataPendudukCerai)) : ?>
                      <div class="alert alert-info" role="alert">
                        Data warga tidak ada.
                        <?php foreach ($dataPendudukCerai as $c) : ?>
                          <tr>
                            <td class="cell"><?= $i++; ?></td>
                            <td class="cell"><?= $c['nik']; ?></td>
                            <td class="cell"><?= $c['nama']; ?></td>
                            <td class="cell"><?= $c['jenis_kelamin']; ?></td>
                            <td class="cell"><?= $c['status']; ?></td>
                            <td class="cell"><?= $c['tanggal_lahir']; ?></td>
                            <td class="cell"><?= $c['alamat']; ?></td>
                          </tr>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>