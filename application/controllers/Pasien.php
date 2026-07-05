<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Cek login
        if (!$this->session->userdata('login')) {
            redirect('auth');
        }

        $this->load->model('Pasien_model');
    }

    // Menampilkan data pasien
    public function index()
    {
        $data['title'] = 'Data Pasien';
        $data['menu'] = 'pasien';
        $data['pasien'] = $this->Pasien_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    // Tambah pasien
    public function tambah()
    {
        $data['title'] = 'Tambah Pasien';
        $data['menu'] = 'pasien';

        if ($this->input->post()) {

            $dataInsert = [
                'nama_pasien'   => $this->input->post('nama_pasien', TRUE),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
                'umur'          => $this->input->post('umur', TRUE),
                'no_hp'         => $this->input->post('no_hp', TRUE),
                'alamat'        => $this->input->post('alamat', TRUE)
            ];

            $this->Pasien_model->insert($dataInsert);

            $this->session->set_flashdata(
                'success',
                'Data pasien berhasil ditambahkan.'
            );

            redirect('pasien');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pasien/tambah', $data);
        $this->load->view('templates/footer');
    }

    // Edit pasien
    public function edit($id)
    {
        $data['title'] = 'Edit Pasien';
        $data['menu'] = 'pasien';
        $data['pasien'] = $this->Pasien_model->getById($id);

        if (!$data['pasien']) {
            show_404();
        }

        if ($this->input->post()) {

            $dataUpdate = [
                'nama_pasien'   => $this->input->post('nama_pasien', TRUE),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
                'umur'          => $this->input->post('umur', TRUE),
                'no_hp'         => $this->input->post('no_hp', TRUE),
                'alamat'        => $this->input->post('alamat', TRUE)
            ];

            $this->Pasien_model->update($id, $dataUpdate);

            $this->session->set_flashdata(
                'success',
                'Data pasien berhasil diubah.'
            );

            redirect('pasien');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pasien/edit', $data);
        $this->load->view('templates/footer');
    }

    // Hapus pasien
    public function hapus($id)
    {
        $this->Pasien_model->delete($id);

        $this->session->set_flashdata(
            'success',
            'Data pasien berhasil dihapus.'
        );

        redirect('pasien');
    }

    public function riwayat($id)
{
    $data['title'] = 'Riwayat Pemeriksaan';
    $data['menu']  = 'pasien';

    $data['pasien'] = $this->Pasien_model->getById($id);

    if (!$data['pasien']) {
        show_404();
    }

    $data['riwayat'] = $this->Pasien_model->getRiwayat($id);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('pasien/riwayat', $data);
    $this->load->view('templates/footer');
}
}