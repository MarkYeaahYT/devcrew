<?php
class Admin_model extends CI_Model{

    public function confirms()
    {
        # code...
    }

    public function login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $password = md5($password);

        $this->db->where('username', $username);
        $this->db->where('password', $password);

        return $this->db->get('tb_admin')->result();
    }
}
?>