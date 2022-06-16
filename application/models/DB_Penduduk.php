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
  public function tambahDataPenduduk()
  {
    $data = [
      'nik' => $this->input->post('nik', true),
      'nama' => $this->input->post('nama', true),
      'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
      'status' => $this->input->post('status', true),
      'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
      'alamat' => $this->input->post('alamat', true)
    ];
    $this->db->insert('data_penduduk', $data);
  }
  public function dataPenduduk()
  {
    return $this->db->get('data_penduduk')->result_array();
  }
  public function totalPenduduk()
  {
    return $this->db->get('data_penduduk')->num_rows();
  }
  public function totalUser(){
    return $this->db->get('user')->num_rows();
  }
}
