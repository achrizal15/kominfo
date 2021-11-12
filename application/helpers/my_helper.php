<?php
if (!function_exists("checkLogin")) {
    function checkLogin($param)
    {
        $ci = &get_instance();
        if (!$ci->session->has_userdata("email") && $param == "isLogin") {
            redirect("login");
        }
        if ($ci->session->has_userdata("email") && $param == "notLogin") {
            redirect("dash/homedash");
        }
    }
}
if (!function_exists("checkRole")) {
    function checkRole($param)
    {
        $ci = &get_instance();
        $role = $ci->session->userdata("role");
        if ($param != $role) {
            redirect("dash/homedash");
        }
    }
}
if (!function_exists("duplicate_data")) {
    function dublicate_data($table, $data)
    {
        $ci = &get_instance();
        $data = $ci->db->get_where($table, $data, 1)->row();
        if ($data) return $data->id;
        return 0;
    }
}
