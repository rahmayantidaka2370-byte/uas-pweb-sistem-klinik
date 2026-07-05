<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model
{

    public function getLaporan($tgl_awal = null, $tgl_akhir = null)
    {
        $this->db->select('
            pemeriksaan.*,
            pasien.nama_pasien,
            dokter.nama_dokter
        ');

        $this->db->from('pemeriksaan');

        $this->db->join(
            'pasien',
            'pasien.id_pasien=pemeriksaan.id_pasien'
        );

        $this->db->join(
            'dokter',
            'dokter.id_dokter=pemeriksaan.id_dokter'
        );

        if($tgl_awal != '' && $tgl_akhir != '')
        {
            $this->db->where('tanggal >=',$tgl_awal);
            $this->db->where('tanggal <=',$tgl_akhir);
        }

        $this->db->order_by('tanggal','DESC');

        return $this->db->get()->result();
    }

}