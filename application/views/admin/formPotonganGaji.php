<div class="container-fluid">
  <!-- Title -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
  </div>
  <!-- End Title -->

  <!-- Main Content -->
  <div class="card" style="width: 45%;">
    <div class="card-body">
      <form method="POST" action="<?= base_url('admin/potonganGaji/tambahDataAksi') ?>">
        <div class="form-group">
          <label>Jenis Potongan</label>
          <input type="text" name="potongan" class="form-control">
          <?= form_error('potongan') ?>

          <label>Jumlah Potongan</label>
          <input type="text" name="jml_potongan" class="form-control">
          <?= form_error('jml_potongan') ?>

          <button type="submit" class="btn btn-primary mb-2 mt-3">Simpan</button>
        </div>
      </form>
    </div>
  </div>
  <!-- End Main Content -->

</div>