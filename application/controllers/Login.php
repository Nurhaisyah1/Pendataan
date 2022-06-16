<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DB_Penduduk');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = [
            'Title' => 'Desa Bulu Apo ',
            'SubTitle' => '- Login'
        ];
        $Akses = $this->session->userdata('email');
        if ($Akses) {
            redirect('Home');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templateLogin/header', $data);
            $this->load->view('viewLogin/login');
            $this->load->view('templateLogin/footer');
        } else {
            $this->VerifikasiLogin();
        }
    }
    protected function VerifikasiLogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', array('email' => $email))->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data['email'] = $user['email'];
                $this->session->set_userdata($data);
                redirect('Home');
            } else {
                $this->session->set_flashdata('Message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Password anda <b>salah</b>.
            </div>');
                redirect('Login');
            }
        } else {
            $this->session->set_flashdata('Message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Akun anda belum <b>terdaftar</b>.
            </div>');
            redirect('Login');
        }
    }
    public function registrasi()
    {
        $data = [
            'Title' => 'Desa Bulu Apo ',
            'SubTitle' => '- Registrasi'
        ];
        $Akses = $this->session->userdata('email');
        if ($Akses) {
            redirect('Home');
        }
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[konfirmasipassword]|min_length[3]');
        $this->form_validation->set_rules('konfirmasipassword', 'Konfirmasi Password', 'required|trim|matches[password]');
        if ($this->form_validation->run() == true) {
            $this->DB_Penduduk->Registrasi();
            $this->session->set_flashdata('Message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Akun anda berhasil <b>terdaftar</b>.
            </div>');
            redirect('Login');
        } else {
            $this->load->view('templateLogin/header', $data);
            $this->load->view('viewLogin/register');
            $this->load->view('templateLogin/footer');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('Message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Anda berhasil <b>logout</b>.
        </div>');
        redirect('Login');
    }
}
