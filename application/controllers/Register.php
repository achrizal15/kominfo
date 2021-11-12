<?php
class Register extends CI_Controller
{
    public function index()
    {
        $this->load->view("templates/auth_header");
        $this->load->view("register_view");
        $this->load->view("templates/auth_footer");
    }
    public function store()
    {
        $name =  $this->input->post("name");
        $email =  $this->input->post("email");
        $password =  $this->input->post("password");
        $error="";
        $data = [
            "name" => $name,
            "password" => password_hash($password, PASSWORD_DEFAULT),
            "email" => $email
        ];
        if (dublicate_data("users", ["email" => $email]) == 0) {
            $this->db->insert("users", $data);
        } else {
            $error = "Email has been exist!";
        }
        echo $error;
    }
}
