<div class="container-fluid">
  <!-- Title -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
  </div>
  <!-- End Title -->

  <!-- Main Content -->
  <a class="btn btn-sm btn-success mb-3" href="<?= base_url('admin/dataPegawai/tambahData') ?>">
    <i class="fas fa-plus"></i> Tambah Data</a>

  <?= $this->session->flashdata('pesan') ?>

  <table class="table table-bordered table-striped mt-2">
    <thead>
      <tr class="text-center">
        <th>No</th>
        <th>NIK</th>
        <th>Nama Pegawai</th>
        <th>Jenis Kelamin</th>
        <th>Jabatan</th>
        <th>Tanggal Masuk</th>
        <th>Status</th>
        <th>Photo</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($pegawai as $p) : ?>
        <tr>
          <th><?= $no++; ?></th>
          <td><?= $p->nik; ?></td>
          <td><?= $p->nama_pegawai; ?></td>
          <td><?= $p->jenis_kelamin; ?></td>
          <td><?= $p->jabatan; ?></td>
          <td><?= $p->tanggal_masuk; ?></td>
          <td><?= $p->status; ?></td>
          <td><img src="<?= base_url() . 'assets/photo/' . $p->photo ?>" width="60px"></td>

          <td>
            <center>
              <a class="btn btn-sm btn-primary" href="<?= base_url('admin/dataPegawai/updateData/' . $p->id_pegawai) ?>">
                <i class="fas fa-edit"></i></a>
              <a onclick="return confirm('Anda Yakin?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/dataPegawai/deleteData/' . $p->id_pegawai) ?>">
                <i class="fas fa-trash"></i></a>
            </center>
          </td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <!-- End Main Content -->

</div>