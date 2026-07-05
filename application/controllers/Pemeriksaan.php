<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('auth');
        }

        $this->load->model('Pemeriksaan_model');
    }

    public function index()
    {
        $data['title'] = 'Data Pemeriksaan';
        $data['menu'] = 'pemeriksaan';
        $data['pemeriksaan'] = $this->Pemeriksaan_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pemeriksaan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Pemeriksaan';
        $data['menu'] = 'pemeriksaan';

        $data['dokter'] = $this->Pemeriksaan_model->getDokter();
        $data['pasien'] = $this->Pemeriksaan_model->getPasien();

        if ($this->input->post()) {

            $insert = [
                'id_pasien' => $this->input->post('id_pasien', TRUE),
                'id_dokter' => $this->input->post('id_dokter', TRUE),
                'tanggal'   => $this->input->post('tanggal', TRUE),
                'keluhan'   => $this->input->post('keluhan', TRUE),
                'diagnosa'  => $this->input->post('diagnosa', TRUE),
                'tindakan'  => $this->input->post('tindakan', TRUE)
            ];

            $this->Pemeriksaan_model->insert($insert);

            $this->session->set_flashdata(
                'success',
                'Data pemeriksaan berhasil ditambahkan.'
            );

            redirect('pemeriksaan');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pemeriksaan/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Pemeriksaan';
        $data['menu'] = 'pemeriksaan';

        $data['dokter'] = $this->Pemeriksaan_model->getDokter();
        $data['pasien'] = $this->Pemeriksaan_model->getPasien();
        $data['pemeriksaan'] = $this->Pemeriksaan_model->getById($id);

        if (!$data['pemeriksaan']) {
            show_404();
        }

        if ($this->input->post()) {

            $update = [
                'id_pasien' => $this->input->post('id_pasien', TRUE),
                'id_dokter' => $this->input->post('id_dokter', TRUE),
                'tanggal'   => $this->input->post('tanggal', TRUE),
                'keluhan'   => $this->input->post('keluhan', TRUE),
                'diagnosa'  => $this->input->post('diagnosa', TRUE),
                'tindakan'  => $this->input->post('tindakan', TRUE)
            ];

            $this->Pemeriksaan_model->update($id, $update);

            $this->session->set_flashdata(
                'success',
                'Data pemeriksaan berhasil diubah.'
            );

            redirect('pemeriksaan');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pemeriksaan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Pemeriksaan_model->delete($id);

        $this->session->set_flashdata(
            'success',
            'Data pemeriksaan berhasil dihapus.'
        );

        redirect('pemeriksaan');
    }

}