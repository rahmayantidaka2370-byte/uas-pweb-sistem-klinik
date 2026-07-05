<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Auth_model');
        $this->load->library('session');
        $this->load->helper(array('url','form'));
    }

    public function index()
    {
        if($this->session->userdata('login')){
            redirect('dashboard');
        }

        $this->load->view('auth/login');
    }

    public function login()
    {
        $username = trim($this->input->post('username'));
        $password = trim($this->input->post('password'));

        if($username == '' || $password == '')
        {
            $this->session->set_flashdata('error','Username dan Password wajib diisi');
            redirect('auth');
        }

        $user = $this->Auth_model->cek_login($username);

        if(!$user)
        {
            $this->session->set_flashdata('error','Username tidak ditemukan');
            redirect('auth');
        }

        if(md5($password) != $user->password)
        {
            $this->session->set_flashdata('error','Password salah');
            redirect('auth');
        }

        $session = array(
            'id_user'  => $user->id_user,
            'nama'     => $user->nama,
            'username' => $user->username,
            'role'     => $user->role,
            'login'    => TRUE
        );

        $this->session->set_userdata($session);

        redirect('dashboard');
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('auth');
    }

}