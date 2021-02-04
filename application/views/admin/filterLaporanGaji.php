<div class="container-fluid">

  <!-- Main Content -->
  <div class="card mx-auto" style="width: 35%;">
    <div class="card-header bg-primary text-white text-center">
      Filter Laporan Gaji Pegawai
    </div>

    <form action="<?= base_url('admin/laporanGaji/cetakLaporanGaji') ?>" target="_blank" method="POST">
      <div class="card-body">
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-5 col-form-label">Bulan</label>
          <div class="col-sm-7">
            <select class="form-control" name="bulan">
              <option value="">-- Pilih Bulan --</option>
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-5 col-form-label">Tahun</label>
          <div class="col-sm-7">
            <select class="form-control" name="tahun">
              <option value="">-- Pilih Tahun --</option>

              <?php $tahun = date('Y');
              for ($i = 2020; $i < $tahun + 5; $i++) {
              ?>
                <option value="<?= $i; ?>"><?= $i; ?></option>
              <?php } ?>

            </select>
          </div>
        </div>

        <button style="width: 100%;" type="submit" class="btn btn-primary"><i class="fas fa-print"></i> Cetak Laporan Gaji</button>

      </div>
    </form>
  </div>
  <!-- End Main Content -->

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data Gaji Kosong! Silahkan input data kehadiran pada bulan dan tahun yang dipilih!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>