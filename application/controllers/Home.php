<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $var = ["os", "hsao"];
        redirect("/login");
    }
}
