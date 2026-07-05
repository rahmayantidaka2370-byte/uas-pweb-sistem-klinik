<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends CI_Model
{

    private $table = 'dokter';

    // Menampilkan semua data dokter
    public function getAll()
    {
        return $this->db
                    ->order_by('id_dokter', 'DESC')
                    ->get($this->table)
                    ->result();
    }

    // Menampilkan satu data dokter berdasarkan ID
    public function getById($id)
    {
        return $this->db
                    ->get_where($this->table, [
                        'id_dokter' => $id
                    ])
                    ->row();
    }

    // Menambahkan data dokter
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Mengubah data dokter
    public function update($id, $data)
    {
        return $this->db
                    ->where('id_dokter', $id)
                    ->update($this->table, $data);
    }

    // Menghapus data dokter
    public function delete($id)
    {
        return $this->db
                    ->where('id_dokter', $id)
                    ->delete($this->table);
    }

    // Menghitung jumlah dokter
    public function count()
    {
        return $this->db->count_all($this->table);
    }

}