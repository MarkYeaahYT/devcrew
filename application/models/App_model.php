<?php
class App_model extends CI_Model{

   public function __construct()
   {
       parent::__construct();
       $this->load->library('pdf');
   }

   public function genid()
    {
        $lenght = 10;
        $character = "0123456789";
        $characterLenght = strlen($character);
        $generate = true;
        while ($generate) {
            $result = "";
            for ($i=0; $i < $lenght; $i++) { 
                $result .= $character[rand(0, $characterLenght -1 )];
            }
            $this->db->where("id", intval($result));;
            $query = $this->db->get("tb_surat")->num_rows();
            if ($query == 0){
                $generate = false;
            }
        }
        
        return intval($result);
	}

   public function add()
   {
       $idpkl = $this->input->post('tempat', true);
       $hal = $this->input->post('hal', true);
       $tajaran = $this->input->post('tajaran', true);
       $tglmulai = $this->input->post('tglmulai', true);
       $tglselesai = $this->input->post('tglselesai', true);

       $nis = $this->input->post("nis");
       $suratid = $this->genid();

       $this->db->set('id', $suratid);
       $this->db->set('id_tempatpkl', $idpkl);
       $this->db->set('hal', $hal);
       $this->db->set('tahun_ajaran', $tajaran);
       $this->db->set('tgl_dilaksanakan', $tglmulai);
       $this->db->set('tgl_sampai', $tglselesai);
        $q = "";
        $q .= $this->db->insert('tb_surat');
        $q .= "-";
        for ($i=0; $i < count($nis) - 1; $i++) { 
            $this->db->set("surat_id", $suratid);
            $this->db->where("nis", $nis[$i]);
            $q .= $this->db->update("tb_siswa");
        }
        return $q;
   }

   public function get_tempat_pkl()
   {
       $jurusan = $this->input->post("jurusan");
       return $this->db->query("select id, nama from tb_tempatpkl where jurusan like '%$jurusan%'")->result();
   }
  
}
?>