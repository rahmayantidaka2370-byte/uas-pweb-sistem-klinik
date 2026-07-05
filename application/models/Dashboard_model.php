<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{

    public function total_dokter()
    {
        return $this->db->count_all('dokter');
    }

    public function total_pasien()
    {
        return $this->db->count_all('pasien');
    }

    public function total_pemeriksaan()
    {
        return $this->db->count_all('pemeriksaan');
    }

    public function pemeriksaan_hari_ini()
    {
        return $this->db
                    ->where('tanggal', date('Y-m-d'))
                    ->count_all_results('pemeriksaan');
    }

}