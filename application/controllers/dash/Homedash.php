<?php
class Homedash extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checkLogin("isLogin");
    }

    public function index()
    {
        $this->load->view("dash/home");
    }
}
