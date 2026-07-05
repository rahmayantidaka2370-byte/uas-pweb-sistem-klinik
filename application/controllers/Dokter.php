<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Cek login
        if (!$this->session->userdata('login')) {
            redirect('auth');
        }

        $this->load->model('Dokter_model');
    }

    public function index()
    {
        $data['title'] = 'Data Dokter';
        $data['menu'] = 'dokter';
        $data['dokter'] = $this->Dokter_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dokter/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Dokter';
        $data['menu'] = 'dokter';

        if ($this->input->post()) {

            $dataInsert = [
                'nama_dokter' => $this->input->post('nama_dokter', TRUE),
                'spesialis'   => $this->input->post('spesialis', TRUE),
                'no_hp'       => $this->input->post('no_hp', TRUE),
                'alamat'      => $this->input->post('alamat', TRUE)
            ];

            $this->Dokter_model->insert($dataInsert);

            $this->session->set_flashdata('success', 'Data dokter berhasil ditambahkan.');

            redirect('dokter');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dokter/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Dokter';
        $data['menu'] = 'dokter';
        $data['dokter'] = $this->Dokter_model->getById($id);

        if (!$data['dokter']) {
            show_404();
        }

        if ($this->input->post()) {

            $dataUpdate = [
                'nama_dokter' => $this->input->post('nama_dokter', TRUE),
                'spesialis'   => $this->input->post('spesialis', TRUE),
                'no_hp'       => $this->input->post('no_hp', TRUE),
                'alamat'      => $this->input->post('alamat', TRUE)
            ];

            $this->Dokter_model->update($id, $dataUpdate);

            $this->session->set_flashdata('success', 'Data dokter berhasil diubah.');

            redirect('dokter');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dokter/edit', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Dokter_model->delete($id);

        $this->session->set_flashdata('success', 'Data dokter berhasil dihapus.');

        redirect('dokter');
    }
}