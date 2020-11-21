<?php
class App extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('app_model');
        $this->load->library('session');

    }

    public function index()
    {
        # View
        $this->load->view("app");
    }

    public function buatsurat()
    {
        # View
        $this->load->view("buatsurat");
    }

    public function add()
    {
        echo json_encode($this->app_model->add());
    }

    public function gettempatpkl()
    {
        echo json_encode($this->app_model->get_tempat_pkl());
    }

    public function login()
    {
        # view
        $this->load->view('siswa/login');
        
    }

    public function logout()
    {
        unset(
            $_SESSION['nis'],
            $_SESSION['nama'],
            $_SESSION['surat_id'],
        );
        
        redirect('/app/login','refresh');
        
    }

    public function login_backend()
    {
        // echo json_encode($this->app_model->login());
        if($this->app_model->login() == null){
            $message = array(
                "status" => "0"
            );
            echo json_encode($message);
        }else{
            $ss = array(
                "nis" => $this->app_model->login()[0]->nis,
                "nama" => $this->app_model->login()[0]->nama,
                "surat_id" => $this->app_model->login()[0]->surat_id,
            );
            $this->session->set_userdata($ss);
            
            
            
            $message = array(
                "status" => "1"
            );
            echo json_encode($message);
            
        }
    }

    public function siswa()
    {
        # view
        if($this->session->has_userdata('nis')){
            $this->load->view('siswa/siswa');
        }else{
            $this->load->view('errors/forbidden_siswa');
        }
    }

    public function siswa_get_info_surat()
    {
        echo json_encode($this->app_model->siswa_get_info_surat());
    }
}
?>