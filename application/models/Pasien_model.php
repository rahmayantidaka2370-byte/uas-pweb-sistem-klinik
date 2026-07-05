<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model
{

    private $table = 'pasien';

    public function getAll()
    {
        return $this->db
                    ->order_by('id_pasien','DESC')
                    ->get($this->table)
                    ->result();
    }

    public function getById($id)
    {
        return $this->db
                    ->get_where($this->table,[
                        'id_pasien'=>$id
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
                    ->where('id_pasien',$id)
                    ->update($this->table,$data);
    }

    public function delete($id)
    {
        return $this->db
                    ->where('id_pasien',$id)
                    ->delete($this->table);
    }

    public function count()
    {
        return $this->db->count_all($this->table);
    }

    public function getRiwayat($id)
{
    $this->db->select('
        pemeriksaan.*,
        dokter.nama_dokter
    ');

    $this->db->from('pemeriksaan');

    $this->db->join(
        'dokter',
        'dokter.id_dokter = pemeriksaan.id_dokter'
    );

    $this->db->where('pemeriksaan.id_pasien', $id);

    $this->db->order_by('tanggal', 'DESC');

    return $this->db->get()->result();
}

}