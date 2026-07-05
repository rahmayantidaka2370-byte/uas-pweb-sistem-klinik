<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    private $table = 'users';

    public function cek_login($username)
    {
        return $this->db
                    ->where('username', $username)
                    ->get($this->table)
                    ->row();
    }

}