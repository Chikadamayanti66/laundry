<?php

class Login extends CI_Controller
{
    public function index()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->M_login->proses_login($username, $password);
    }
}
