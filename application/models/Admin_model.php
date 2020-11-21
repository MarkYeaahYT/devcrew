<?php
class Admin_model extends CI_Model{

    public function confirms()
    {
        $id = $this->input->post("id", true);
        $this->db->where("id", $id);
        if($this->db->get("tb_surat")->result()[0]->status == 0){
            $this->db->set("status", "1");
            $this->db->where("id", $id);
        }else{
            $this->db->set("status", "0");
            $this->db->where("id", $id);
        }
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
            return "";
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

    /**
     * for template
     */
    public function manipulate_template()
    {
        $nomor = $this->input->post("nomor", true);
        $hal = $this->input->post("hal", true);
        $tajaran = $this->input->post("tajaran", true);
        $tahab = $this->input->post("tahab", true);
        $kelas = $this->input->post("kelas", true);
        $tglmulai = $this->input->post("tglmulai", true);
        $tglselesai = $this->input->post("tglselesai", true);
        $kepsek = $this->input->post("kepsek", true);
        $nip = $this->input->post("nip", true);

        if($this->db->get("tb_templatesurat")->result() == null){
            $this->db->set("nomor", $nomor);
            $this->db->set("hal", $hal);
            $this->db->set("tahun_ajaran", $tajaran);
            $this->db->set("tahab", $tahab);
            $this->db->set("kelas", $kelas);
            $this->db->set("tgl_mulai", $tglmulai);
            $this->db->set("tgl_selesai", $tglselesai);
            $this->db->set("kepsek", $kepsek);
            $this->db->set("nip", $nip);
            return $this->db->insert("tb_templatesurat");
        }else{
            $this->db->set("nomor", $nomor);
            $this->db->set("hal", $hal);
            $this->db->set("tahun_ajaran", $tajaran);
            $this->db->set("tahab", $tahab);
            $this->db->set("kelas", $kelas);
            $this->db->set("tgl_mulai", $tglmulai);
            $this->db->set("tgl_selesai", $tglselesai);
            $this->db->set("kepsek", $kepsek);
            $this->db->set("nip", $nip);
            return $this->db->update("tb_templatesurat");
        }
    }

    public function show_data_template()
    {
        return $this->db->get("tb_templatesurat")->result();
    }

    public function generate_surat_xhr()
    {
        $id = $this->input->post("id", true);
        $this->db->where("id", $id);
        $surat = $this->db->get("tb_surat")->result();
        if($surat != null){
            $res = array();
            for ($i=0; $i < count($surat); $i++) {
                $this->db->where("id", $surat[$i]->id_tempatpkl);
                $tempkl = $this->db->get("tb_tempatpkl")->result();
                $nama = array();
                $this->db->where("surat_id", $surat[$i]->id);
                $nm = $this->db->get("tb_siswa")->result();
                for ($j=0; $j < count($nm); $j++) {
                    array_push($nama, array("nama" => $nm[$j]->nama, "nis" => $nm[$j]->nis, "kelas" => $nm[$j]->kelas)); 
                }
            array_push($res, array(
                "id" => $surat[$i]->id,
                "nama" => $nama,
                "tempat" => $tempkl[0]->nama,
                "alamat" => $tempkl[0]->alamat,
                "jurusan" => $nm[0]->jurusan,
                "status" => $surat[$i]->status,
                "tanggal_pe" => $surat[$i]->tanggal_pengajuan));
            }
        }else{
            return "";
        }
        return $res;
    }
}
?>