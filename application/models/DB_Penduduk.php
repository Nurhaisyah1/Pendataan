<?php
defined('BASEPATH') or exit('No direct script allowed access');
class DB_Penduduk extends CI_Model
{
  public function Registrasi()
  {
    $data = [
      'nama_lengkap' => $this->input->post('nama_lengkap', true),
      'email' => $this->input->post('email', true),
      'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
      'konfirmasipassword' => password_hash($this->input->post('konfirmasipassword', true), PASSWORD_BCRYPT)
    ];
    $this->db->insert('user', $data);
  }
}
