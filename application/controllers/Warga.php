<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Warga extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('DB_Penduduk');
    $this->load->library('form_validation');
    $Akses = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
    if (!$Akses) {
      $this->session->set_flashdata('Message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Login terlebih <b>dahulu</b>.
        </div>');
      redirect('Login');
    }
  }
  public function index()
  {
    $data = [
      'Title' => 'Desa Bulu Apo',
      'subTitle' => ' - Data Warga',
      'user' => $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array(),
      'dataPenduduk' => $this->DB_Penduduk->dataPenduduk(),
      'dataPendudukSingle' => $this->db->query('SELECT * from data_penduduk where status = "Single"')->result_array(),
      'dataPendudukMenikah' => $this->db->query('SELECT * from data_penduduk where status = "Menikah"')->result_array(),
      'dataPendudukCerai' => $this->db->query('SELECT * from data_penduduk where status = "Cerai"')->result_array()
    ];
    $this->load->view('template/header', $data);
    $this->load->view('dataWarga/dataPenduduk', $data);
    $this->load->view('template/footer');
  }
  public function tambahData()
  {
    $data = [
      'Title' => 'Desa Bulu Apo',
      'subTitle' => ' - Data Warga',
      'user' => $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array()
    ];
    $this->form_validation->set_rules('nik', 'NIK', 'required|is_unique[data_penduduk.nik]');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    if ($this->form_validation->run() == false) {

      $this->load->view('template/header', $data);
      $this->load->view('dataWarga/tambahDataPenduduk');
      $this->load->view('template/footer');
    } else {
      $this->DB_Penduduk->tambahDataPenduduk();
      $this->session->set_flashdata('Message', '<div id="berhasil"></div>');
      redirect('Warga');
    }
  }
}
