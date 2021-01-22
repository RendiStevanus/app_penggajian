<div class="container-fluid">

  <!-- Title -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
  </div>
  <!-- End Title -->

  <!-- Main Content -->

  <a class="btn btn-sm btn-success mb-3" href="<?= base_url('admin/dataJabatan/tambahData') ?>">
    <i class="fas fa-plus"></i> Tambah Data</a>

  <table class="table table-bordered table-striped">
    <tr class="text-center">
      <th>No</th>
      <th>Nama Jabatan</th>
      <th>Gaji Pokok</th>
      <th>Tunjangan Transport</th>
      <th>Uang Makan</th>
      <th>Total</th>
      <th>Aksi</th>
    </tr>
    <?php $no = 1;
    foreach ($jabatan as $j) : ?>
      <tr class="text-center">
        <td><?= $no++; ?></td>
        <td><?= $j->nama_jabatan; ?></td>

        <!-- menambahkan format rupiah -->
        <td>Rp. <?= number_format($j->gaji_pokok, 0, ',', '.') ?></td>
        <td>Rp. <?= number_format($j->tj_transport, 0, ',', '.') ?></td>
        <td>Rp. <?= number_format($j->uang_makan, 0, ',', '.') ?></td>
        <td>Rp. <?= number_format($j->gaji_pokok + $j->tj_transport + $j->uang_makan, 0, ',', '.') ?></td>
        <!-- end -->

        <td>
          <center>
            <a class="btn btn-sm btn-primary" href="<?= base_url('admin/dataJabatan/updateData/' . $j->id_jabatan) ?>">
              <i class="fas fa-edit"></i></a>
            <a onclick="return confirm('Anda Yakin?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/dataJabatan/deleteData/' . $j->id_jabatan) ?>">
              <i class="fas fa-trash"></i></a>
          </center>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
  <!-- End Main Content -->
</div>