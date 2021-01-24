<div class="container-fluid">
  <!-- Title -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
  </div>
  <!-- End Title -->

  <!-- Main Content -->
  <div class="card" style="width: 60%;">
    <div class="card-body">
      <?php foreach ($jabatan as $j) : ?>
        <form action="<?= base_url('admin/dataJabatan/updateDataAksi') ?>" method="POST">
          <div class="form-group">

            <label for="">Nama Jabatan</label>
            <input type="hidden" name="id_jabatan" class="form-control" value="<?= $j->id_jabatan; ?>">
            <input type="text" name="nama_jabatan" class="form-control" value="<?= $j->nama_jabatan; ?>">
            <?= form_error('nama_jabatan', '<div class="text-small text-danger"></div>') ?>

            <label for="">Gaji Pokok</label>
            <input type="number" name="gaji_pokok" class="form-control" value="<?= $j->gaji_pokok; ?>">
            <?= form_error('gaji_pokok', '<div class="text-small text-danger"></div>') ?>

            <label for="">Tunjangan Transport</label>
            <input type="number" name="tj_transport" class="form-control" value="<?= $j->tj_transport; ?>">
            <?= form_error('tj_transport', '<div class="text-small text-danger"></div>') ?>

            <label for="">Uang Makan</label>
            <input type="number" name="uang_makan" class="form-control" value="<?= $j->uang_makan; ?>">
            <?= form_error('uang_makan', '<div class="text-small text-danger"></div>') ?>

            <button href="<?= base_url('admin/dataJabatan') ?>" class="btn btn-primary float-right mt-3" style="margin-left: 3px;">Batal</button>
            <button type="submit" class="btn btn-success float-right mt-3">Ubah Data</button>
          </div>
        </form>
      <?php endforeach; ?>
    </div>
  </div>
  <!-- End Main Content -->

</div>