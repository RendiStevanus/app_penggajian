<div class="container-fluid">
  <!-- Title -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
  </div>
  <!-- End Title -->

  <!-- Main Content -->
  <div class="card" style="width: 60%;">
    <div class="card-body">
      <form action="<?= base_url('admin/dataJabatan/tambahDataAksi') ?>" method="POST">
        <div class="form-group">

          <label for="">Nama Jabatan</label>
          <input type="text" name="nama_jabatan" class="form-control">
          <?= form_error('nama_jabatan', '<div class="text-small text-danger"></div>') ?>

          <label for="">Gaji Pokok</label>
          <input type="text" name="gaji_pokok" class="form-control">
          <?= form_error('gaji_pokok', '<div class="text-small text-danger"></div>') ?>

          <label for="">Tunjangan Transport</label>
          <input type="text" name="tj_transport" class="form-control">
          <?= form_error('tj_transport', '<div class="text-small text-danger"></div>') ?>

          <label for="">Uang Makan</label>
          <input type="text" name="uang_makan" class="form-control">
          <?= form_error('uang_makan', '<div class="text-small text-danger"></div>') ?>

          <button type="submit" class="btn btn-success mt-3">Simpan</button>
        </div>
      </form>
    </div>
  </div>
  <!-- End Main Content -->

</div>