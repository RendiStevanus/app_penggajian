<div class="container-fluid">
  <!-- Title -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
  </div>
  <!-- End Title -->

  <!-- Main Content -->
  <?= $this->session->flashdata('pesan') ?>
  <a class="btn btn-sm btn-success mb-2 mt-2" href="<?= base_url('admin/potonganGaji/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Data</a>

  <table class="table table-bordered table-striped">
    <tr class="text-center">
      <th>No</th>
      <th>Jenis Potongan</th>
      <th>Jumlah Potongan</th>
      <th>Aksi</th>
    </tr>
    <?php $no = 1;
    foreach ($pot_gaji as $p) : ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $p->potongan ?></td>
        <td>Rp. <?= number_format($p->jml_potongan, 0, ',', '.') ?></td>
        <td>
          <center>
            <a class="btn btn-sm btn-primary" href="<?= base_url('admin/potonganGaji/updateData/' . $p->id) ?>"><i class="fas fa-edit"></i></a>
            <a onclick="return confirm('Anda Yakin?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/potonganGaji/deleteData/' . $p->id) ?>"><i class="fas fa-trash"></i></a>
          </center>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
  <!-- End Main Content -->

</div>