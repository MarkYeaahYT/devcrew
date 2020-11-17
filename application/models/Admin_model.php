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
        $this->db->set('no_tlp',$no_tlp);
 
        return $this->db->insert('tb_tempatpkl');
    }


    public function showdata_xhr()
    {
        // must be join
        $surat = $this->db->get("tb_surat")->result();
        if($surat != null){
            $res = array();
            for ($i=0; $i < count($surat); $i++) {
                $this->db->where("id", $surat[$i]->id_tempatpkl);
                $temp = $this->db->get("tb_tempatpkl")->result()[0]->nama;
                $nama = array();
                $this->db->where("surat_id", $surat[$i]->id);
                $nm = $this->db->get("tb_siswa")->result();
                for ($j=0; $j < count($nm); $j++) {
                    array_push($nama, array("nama" => $nm[$j]->nama)); 
                }
            array_push($res, array(
                "id" => $surat[$i]->id,
                "nama" => $nama,
                "tempat" => $temp,
                "status" => $surat[$i]->status,
                "tanggal_pe" => $surat[$i]->tanggal_pengajuan));
            }
        }else{
            return "0";
        }
        return $res;
    }
    
    /**
     * for Siswa page
     */
    public function showdata_xhr_siswa()
    {
        $this->db->select("id");
        $this->db->select("surat_id");
        $this->db->select("nama");
        $this->db->select("nis");
        $this->db->select("kelas");
        $this->db->select("jurusan");
        return $this->db->get("tb_siswa")->result();
    }
    
    /**
     * for TempatPkl page
     */
    
    public function showdata_xhr_pkl()
    {
        return $this->db->get("tb_tempatpkl")->result();
    }
}
?>