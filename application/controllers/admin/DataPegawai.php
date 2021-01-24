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

  public function tambahData()
  {
    $data['judul'] = 'Tambah Data Pegawai';

    // mengambil data dari table data_jabatan
    $data['jabatan'] = $this->penggajianModel->getData('data_jabatan')->result();

    //Load view
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/tambahDataPegawai', $data);
    $this->load->view('templates_admin/footer');
  }
  public function tambahDataAksi()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->tambahData();
    } else {
      $nik            = $this->input->post('nik');
      $nama_pegawai   = $this->input->post('nama_pegawai');
      $jenis_kelamin  = $this->input->post('jenis_kelamin');
      $tanggal_masuk  = $this->input->post('tanggal_masuk');
      $jabatan        = $this->input->post('jabatan');
      $status         = $this->input->post('status');
      $photo          = $_FILES['photo']['name'];
      if ($photo = '') {
      } else {
        $config['upload_path']   = '.assets/photo';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('photo')) {
          echo "Photo Gagal Diupload!";
        } else {
          $photo = $this->upload->data('file_name');
        }
      }

      $data = array(
        'nik'           => $nik,
        'nama_pegawai'  => $nama_pegawai,
        'jenis_kelamin' => $jenis_kelamin,
        'jabatan'       => $jabatan,
        'tanggal_masuk' => $tanggal_masuk,
        'status'        => $status,
        'photo'         => $photo
      );

      $this->penggajianModel->insert_data($data, 'data_pegawai');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>'
      );

      redirect('admin/DataPegawai');
    }
  }
  public function _rules()
  {
    $this->form_validation->set_rules('nik', 'NIK', 'required');
    $this->form_validation->set_rules('nama_pegawai', 'nama pegawai', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required');
    $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
    $this->form_validation->set_rules('tanggal_masuk', 'tanggal masuk', 'required');
    $this->form_validation->set_rules('status', 'status', 'required');
  }
}
