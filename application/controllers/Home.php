<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/home');
        $this->load->view('frontend/footer');
    }
}
