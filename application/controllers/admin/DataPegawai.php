<?php
class DataPegawai extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Data Pegawai';
    $data['pegawai'] = $this->penggajianModel->getData('data_pegawai')->result();
    //Load view
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/dataPegawai', $data);
    $this->load->view('templates_admin/footer');
  }
}
