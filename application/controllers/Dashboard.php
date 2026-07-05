<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login'))
        {
            redirect('auth');
        }

        $this->load->model('Dashboard_model');
    }

    public function index()
    {
    
        $data['title'] = 'Dashboard';
        $data['menu'] = 'dashboard';

        $data['total_dokter'] = $this->Dashboard_model->total_dokter();
        $data['total_pasien'] = $this->Dashboard_model->total_pasien();
        $data['total_pemeriksaan'] = $this->Dashboard_model->total_pemeriksaan();
        $data['pemeriksaan_hari_ini'] = $this->Dashboard_model->pemeriksaan_hari_ini();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/index',$data);
        $this->load->view('templates/footer');

    }

}