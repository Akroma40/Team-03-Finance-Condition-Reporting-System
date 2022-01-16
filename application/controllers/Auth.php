<?php

class Auth extends CI_Controller
{
    public function login()
    {
        echo 'log in page';
    }
    public function register()
    {
        $this->load->view('register');
    }
}