<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login'))
        {
            redirect('auth');
        }

        $this->load->model('Laporan_model');
    }

    public function index()
    {

        $data['title']='Laporan Pemeriksaan';
        $data['menu']='laporan';

        $tgl_awal=$this->input->get('tgl_awal');
        $tgl_akhir=$this->input->get('tgl_akhir');

        $data['tgl_awal']=$tgl_awal;
        $data['tgl_akhir']=$tgl_akhir;

        $data['laporan']=$this->Laporan_model->getLaporan(
            $tgl_awal,
            $tgl_akhir
        );

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('laporan/index',$data);
        $this->load->view('templates/footer');

    }

    public function cetak()
{

    $tgl_awal=$this->input->get('tgl_awal');
    $tgl_akhir=$this->input->get('tgl_akhir');

    $data['laporan']=$this->Laporan_model->getLaporan(
        $tgl_awal,
        $tgl_akhir
    );

    $data['tgl_awal']=$tgl_awal;
    $data['tgl_akhir']=$tgl_akhir;

    $this->load->view('laporan/cetak',$data);

}

}