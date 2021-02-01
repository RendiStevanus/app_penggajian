<?php

class potonganGaji extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Setting Potongan Gaji';
    $data['pot_gaji'] = $this->penggajianModel->getData('potongan_gaji')->result();

    //Load view
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/potonganGaji', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambahData()
  {
    $data['judul'] = 'Tambah Data Potongan Gaji';

    //Load view
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/formPotonganGaji', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambahDataAksi()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {

      $this->tambahData();
    } else {
      $potongan     = $this->input->post('potongan');
      $jmlpotongan  = $this->input->post('jml_potongan');

      $data = array(
        'potongan'      => $potongan,
        'jml_potongan'  => $jmlpotongan,
      );

      $this->penggajianModel->insert_data($data, 'potongan_gaji');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>'
      );

      redirect('admin/potonganGaji');
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('potongan', 'jenis potongan', 'required');
    $this->form_validation->set_rules('jml_potongan', 'jumlah potongan', 'required');
  }
}
