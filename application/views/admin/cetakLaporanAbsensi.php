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
    <h2>Daftar Kehadiran Pegawai</h2>
  </center>
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
      <th>Hadir</th>
      <th>Sakit</th>
      <th>Alpha</th>
    </tr>

    <?php $no = 1;
    foreach ($lap_kehadiran as $lap) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $lap->nik; ?></td>
        <td><?= $lap->nama_pegawai; ?></td>
        <td><?= $lap->jenis_kelamin; ?></td>
        <td><?= $lap->nama_jabatan; ?></td>
        <td><?= $lap->hadir; ?></td>
        <td><?= $lap->sakit; ?></td>
        <td><?= $lap->alpha; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>


  <table width="100%">
    <tr>
      <td></td>
      <td width="200px">
        <p>Cianjur, <?= date("d M Y") ?> <br> Bid. II Kepegawaian</p>
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