<?php
class Admin_model extends CI_Model{

    public function confirms()
    {
        $id = $this->input->post("id", true);
        
        $this->db->set("status", "1");
        $this->db->where("id", $id);
        return $this->db->update("tb_surat");
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
    
    public function addtempatpkl()
    {
        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $no_tlp = $this->input->post('no_tlp', true);
 
        $this->db->set('nama', $nama);
        $this->db->set('alamat', $alamat);
        $this->db->set('no$no_tlp',$no_tlp);
 
        return $this->db->insert('tb_tempatpkl');
    }


    public function showdata_xhr()
    {
        return $this->db->get("tb_surat")->result();
    }
}
?>