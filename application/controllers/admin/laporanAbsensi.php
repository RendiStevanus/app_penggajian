<?php

class laporanAbsensi extends CI_Controller
{
  public function index()
  {
    $data['judul'] = "Laporan Absensi";

    //Load view
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/filterLaporanAbsensi');
    $this->load->view('templates_admin/footer');
  }

  public function cetakLaporanAbsensi()
  {
    $data['judul'] = "Cetak Laporan Kehadiran";

    if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
      $bulan = $_GET['bulan'];
      $tahun = $_GET['tahun'];
      $bulantahun = $bulan . $tahun;
    } else {
      $bulan = date('m');
      $tahun = date('Y');
      $bulantahun = $bulan . $tahun;
    }

    $data['lap_kehadiran'] = $this->db->query("SELECT * FROM data_kehadiran
    WHERE bulan='$bulantahun'
    ORDER BY nama_pegawai ASC")->result();

    //Load view
    $this->load->view('templates_admin/header', $data);
    $this->load->view('admin/cetakLaporanAbsensi');
  }
}
