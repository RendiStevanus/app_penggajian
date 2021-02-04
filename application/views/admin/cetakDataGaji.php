<!DOCTYPE html>
<html>

<head>
  <title><?= $judul; ?></title>
  <style type="text/css">
    body {
      font-family: arial;
      color: black;
    }
  </style>
</head>

<body>
  <center>
    <h1>SEKOLAH TINGGI TEOLOGI</h1>
    <h2>Daftar Gaji Pegawai</h2>
  </center>


  <?php
  $bulan = $this->input->post('bulan');
  $tahun = $this->input->post('tahun');
  ?>

  <table>
    <tr>
      <td>Bulan</td>
      <td>:</td>
      <td><?= $bulan ?></td>
    </tr>
    <tr>
      <td>Tahun</td>
      <td>:</td>
      <td><?= $tahun ?></td>
    </tr>
  </table>
  <table class="table table-bordered table-striped">
    <tr class="text-center">
      <th>No</th>
      <th>NIK</th>
      <th>Nama Pegawai</th>
      <th>Jenis Kelamin</th>
      <th>Jabatan</th>
      <th>Gaji Pokok</th>
      <th>Tj.Transport</th>
      <th>Uang Makan</th>
      <th>Potongan</th>
      <th>Total Gaji</th>
    </tr>

    <?php foreach ($potongan as $p) {
      $alpha = $p->jml_potongan;
    } ?>

    <?php $no = 1;
    foreach ($cetakGaji as $g) : ?>
      <?php $potongan = $g->alpha * $alpha ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $g->nik; ?></td>
        <td><?= $g->nama_pegawai; ?></td>
        <td><?= $g->jenis_kelamin; ?></td>
        <td><?= $g->nama_jabatan; ?></td>
        <td>Rp.<?= number_format($g->gaji_pokok, 0, ',', '.'); ?></td>
        <td>Rp.<?= number_format($g->tj_transport, 0, ',', '.'); ?></td>
        <td>Rp.<?= number_format($g->uang_makan, 0, ',', '.'); ?></td>
        <td>Rp.<?= number_format($potongan, 0, ',', '.'); ?></td>
        <td>Rp.<?= number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $potongan, 0, ',', '.'); ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <table width="100%">
    <tr>
      <td></td>
      <td width="200px">
        <p>Cianjur, <?= date("d M Y") ?> <br> Bendahara</p>
        <br>
        <br>
        <p>______________________</p>
      </td>
    </tr>
  </table>
</body>

</html>

<script type="text/javascript">
  window.print();
</script>