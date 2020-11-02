<?php
class App_model extends CI_Model{

   public function __construct()
   {
       parent::__construct();
       $this->load->library('pdf');
   }

   public function add()
   {
       $idpkl = $this->input->post('tempat', true);
       $hal = $this->input->post('hal', true);
       $tajaran = $this->input->post('tajaran', true);
       $tglmulai = $this->input->post('tglmulai', true);
       $tglselesai = $this->input->post('tglselesai', true);

       $this->db->set('id_tempatpkl', $idpkl);
       $this->db->set('hal', $hal);
       $this->db->set('tahun_ajaran', $tajaran);
       $this->db->set('tanggal_dilaksanakan', $tglmulai);
       $this->db->set('tanggal_selesai', $tglselesai);

       return $this->db->insert('tb_surat');
   }
  
}
?>