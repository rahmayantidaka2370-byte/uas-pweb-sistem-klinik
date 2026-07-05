<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan_model extends CI_Model
{

    private $table = 'pemeriksaan';

    public function getAll()
    {
        $this->db->select('
            pemeriksaan.*,
            pasien.nama_pasien,
            dokter.nama_dokter
        ');

        $this->db->from('pemeriksaan');

        $this->db->join(
            'pasien',
            'pasien.id_pasien = pemeriksaan.id_pasien'
        );

        $this->db->join(
            'dokter',
            'dokter.id_dokter = pemeriksaan.id_dokter'
        );

        $this->db->order_by('tanggal','DESC');

        return $this->db->get()->result();
    }

    public function getById($id)
    {
        return $this->db
                    ->get_where($this->table,[
                        'id_pemeriksaan'=>$id
                    ])
                    ->row();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table,$data);
    }

    public function update($id,$data)
    {
        return $this->db
                    ->where('id_pemeriksaan',$id)
                    ->update($this->table,$data);
    }

    public function delete($id)
    {
        return $this->db
                    ->where('id_pemeriksaan',$id)
                    ->delete($this->table);
    }

    public function getDokter()
{
    return $this->db
                ->order_by('nama_dokter')
                ->get('dokter')
                ->result();
}

public function getPasien()
{
    return $this->db
                ->order_by('nama_pasien')
                ->get('pasien')
                ->result();
}

}