<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        checkLogin("notLogin");
        $this->load->view("templates/auth_header");
        $this->load->view("login_view");
        $this->load->view("templates/auth_footer");
    }
    public function auth()
    {
        checkLogin("notLogin");
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $user = $this->db->get_where("users", ["email" => $email])->row();
        $error = "";
        if ($user != null) {
            if (password_verify($password, $user->password)) {
                $user_data = [
                    "email" => $user->email,
                    "name" => $user->name,
                    "role" => $user->role,
                ];
                $this->session->set_userdata($user_data);
            } else {
                $error = "Email or password invalid!";
            }
        } else {
            $error = "The account you entered does not exist!";
        }
        echo $error;
    }

    public function logout()
    {
        session_destroy();
        redirect("/login");
    }
}
