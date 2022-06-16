<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('DB_Penduduk');
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
      'subTitle' => ' - Dashboard',
      'user' => $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array(),
      'totalPenduduk' => $this->DB_Penduduk->totalPenduduk(),
      'totalUser' => $this->DB_Penduduk->totalUser()
    ];
    $this->load->view('template/header', $data);
    $this->load->view('Home/dashboard');
    $this->load->view('template/footer');
  }
}
