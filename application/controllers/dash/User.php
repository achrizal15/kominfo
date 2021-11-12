<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checkRole("admin");
    }
    // DEFAULT METHOD
    public function index()
    {
        echo $this->session->userdata("role");
    }
    // METHOD INI UNTUK EDIT USER
    public function edit()
    {
    }
    // METHOD INI UNTUK UPDATE
    public function update()
    {
    }
    // METHOD INI UNTUK DETAIL/ATAU SHOW MENAMPILKAN DATA SATU
    public function show($id)
    {
    }
    // METHOD INI UNTUK HAPUS DATA
    public function destroy($id)
    {
    }
}
