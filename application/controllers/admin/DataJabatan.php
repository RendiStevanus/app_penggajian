<?php

class DataJabatan extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Data Jabatan';
    $data['jabatan'] = $this->penggajianModel->getData('data_jabatan')->result();
    //Load view
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/dataJabatan', $data);
    $this->load->view('templates_admin/footer');
  }


  public function tambahData()
  {

    $data['judul'] = 'Tambah Data Jabatan';

    //Load view
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/tambahDataJabatan', $data);
    $this->load->view('templates_admin/footer');
  }
  public function tambah_data_aksi()
  {
  }
}
