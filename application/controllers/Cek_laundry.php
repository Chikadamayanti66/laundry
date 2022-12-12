<?php

class Cek_laundry extends CI_Controller
{
    public function index()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/cek_laundry');
        $this->load->view('frontend/footer');
    }
}
