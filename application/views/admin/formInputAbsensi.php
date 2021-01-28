<div class="container-fluid">
  <!-- Title -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
  </div>
  <!-- End Title -->

  <!-- Main Content -->
  <div class="card mb-3">
    <div class="card-header bg-primary text-white">
      Input Data Kehadiran Pegawai
    </div>
    <div class="card-body">
      <form class="form-inline">
        <div class="form-group mb-2">
          <label>Bulan: </label>
          <select class="form-control ml-3" name="bulan">
            <option value="">--Pilih Bulan--</option>
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

        <div class="form-group mb-2 ml-5">
          <label>Tahun: </label>
          <select class="form-control ml-3" name="tahun">
            <option value="">--Pilih Tahun--</option>

            <?php $tahun = date('Y');
            for ($i = 2020; $i < $tahun + 5; $i++) {
            ?>
              <option value="<?= $i; ?>"><?= $i; ?></option>
            <?php } ?>

          </select>
        </div>

        <button type="submit" class="btn btn-sm btn-primary mb-2 ml-auto"><i class="fas fa-eye"></i> Generate</button>
      </form>
    </div>
  </div>

  <?php
  if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
    $bulan = $_GET['bulan'];
    $tahun = $_GET['tahun'];
    $bulantahun = $bulan . $tahun;
  } else {
    $bulan = date('m');
    $tahun = date('Y');

    $bulantahun = $bulan . $tahun;
  }
  ?>

  <div class="alert alert-info">
    Menampilkan Data Kehadiran Pegawai Bulan: <span class="font-weight-bold"><?= $bulan; ?></span> Tahun: <span class="font-weight-bold"><?= $tahun; ?></span>
  </div>
  <form action="" method="POST">
    <button class="btn btn-success mb-3" type="submit" name="submit">Simpan</button>
    <table class="table table-bordered table-striped">
      <tr class="text-center">
        <th>No</th>
        <th>NIK</th>
        <th>Nama Pegawai</th>
        <th>Jenis Kelamin</th>
        <th>Jabatan</th>
        <th width="8%">Hadir</th>
        <th width="8%">Sakit</th>
        <th width="8%">Alpha</th>
      </tr>

      <?php $no = 1;
      foreach ($input_absensi as $a) : ?>

        <tr>
          <input type="hidden" class="form-control" name="bulan[]" value="<?= $bulantahun; ?>">
          <input type="hidden" class="form-control" name="nik[]" value="<?= $a->nik; ?>">
          <input type="hidden" class="form-control" name="nama_pegawai[]" value="<?= $a->nama_pegawai; ?>">
          <input type="hidden" class="form-control" name="jenis_kelamin[]" value="<?= $a->jenis_kelamin; ?>">
          <input type="hidden" class="form-control" name="nama_jabatan[]" value="<?= $a->nama_jabatan; ?>">
          <td><?= $no++; ?></td>
          <td><?= $a->nik ?></td>
          <td><?= $a->nama_pegawai ?></td>
          <td><?= $a->jenis_kelamin ?></td>
          <td><?= $a->nama_jabatan; ?></td>
          <td><input type="number" name="hadir[]" class="form-control" value="0"></td>
          <td><input type="number" name="sakit[]" class="form-control" value="0"></td>
          <td><input type="number" name="alpha[]" class="form-control" value="0"></td>
        </tr>

      <?php endforeach; ?>
    </table>
  </form>
  <!-- End Main Content -->

</div>