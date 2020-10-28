<?php
class App_model extends CI_Model{

   public function __construct()
   {
       parent::__construct();
       $this->load->library('pdf');
   }

   public function add()
   {
       $idpkl = $this->input->post('idpkl', true);
       $nama = $this->input->post('nama', true);
       $date = $this->input->post('date', true);

       $this->db->set('id_tempatpkl', $idpkl);
       $this->db->set('nama', $nama);
       $this->db->set('date', $date);

       return $this->db->insert('tb_surat');
   }
  
}
?>