<?php

class DataAbsensi extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Data Kehadiran Pegawai';



    if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
      $bulan = $_GET['bulan'];
      $tahun = $_GET['tahun'];

      $bulantahun = $bulan . $tahun;
    } else {
      $bulan = date('m');
      $tahun = date('Y');

      $bulantahun = $bulan . $tahun;
    }


    $data['absensi'] = $this->db->query("SELECT data_kehadiran.*, data_pegawai.nama_pegawai, data_pegawai.jenis_kelamin, data_pegawai.jabatan 
    FROM data_kehadiran 
    INNER JOIN data_pegawai ON data_kehadiran.nik = data_pegawai.nik 
    INNER JOIN data_jabatan ON data_pegawai.jabatan = data_jabatan.nama_jabatan 
    ORDER BY data_pegawai.nama_pegawai ASC")->result();


    // WHERE data_kehadiran.bulan='$bulantahun'

    //Load view
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/dataAbsensi', $data);
    $this->load->view('templates_admin/footer');
  }
}
