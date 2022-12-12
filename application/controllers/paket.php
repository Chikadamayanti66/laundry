<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_paket');
    }

    public function index()
    {
        $isi['content'] = 'backend/paket/v_paket.php';
        $isi['judul'] = 'Daftar Data Paket';
        $this->load->view('backend/dashboard', $isi);
    }

    public function tambah()
    {
        $isi['content'] = 'backend/paket/t_paket.php';
        $isi['judul'] = 'Form Tambah Paket';
        $isi['kode_paket'] = $this->m_paket->generate_kode_paket();
        $this->load->view('backend/dashboard', $isi);
    }

    public function simpan()
    {
        $data = array(
            'kode_paket' => $this->input->post('kode_paket'),
            'nama_paket' => $this->input->post('nama_paket'),
            'harga_paket' => $this->input->post('harga_paket'),
        );
        $query = $this->db->insert('paket', $data);
        if ($query = TRUE) {
            $this->session->set_flashdata('info', 'Data Paket Berhasil di Simpan');
            redirect('paket');
        }
    }
}
