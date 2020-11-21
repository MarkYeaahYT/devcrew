<?php
class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('session');
        $this->load->model("admin_model");
    }

    public function index()
    {
        # View
        if($this->session->has_userdata('username')){
            $this->load->view("admin/admin");
        }else{
            $this->load->view('errors/forbidden');
        }
    }
    
    public function login()
    {
        # View
        $this->load->view('admin/login');
    }

    public function login_backend()
    {
        if($this->admin_model->login() == null){
            $message = array(
                "status" => "0"
            );
            echo json_encode($message);
        }else{
            $ss = array(
                "username" => $this->admin_model->login()[0]->username,
            );
            $this->session->set_userdata($ss);
            
            $cookie = array(
                "name" => "nama",
                "value" => $this->admin_model->login()[0]->nama,
                "path" => "/",
                "expire" => "43200"
            );

            $this->input->set_cookie($cookie);
            
            $message = array(
                "status" => "1"
            );
            echo json_encode($message);
            
        }
    }

    public function logout()
    {
        unset(
            $_SESSION['username']
        );
        delete_cookie('nama');
        echo json_encode(
            array(
                'status' => "brrr"
            )
        );
    }
   
    public function addtempatpkl()
    {
        echo json_encode($this->admin_model->addtempatpkl());
    }
    
    public function showdata_xhr()
    {
        echo json_encode($this->admin_model->showdata_xhr());
    }
    
    public function confirms()
    {
        echo json_encode($this->admin_model->confirms());
    }
    
    /**
     * Tempat PKL page
     */
    public function tempatpkl()
    {
        # View
        $this->load->view("admin/tempatpkl");
    }
    
    public function showdata_xhr_pkl()
    {
        echo json_encode($this->admin_model->showdata_xhr_pkl());
    }
    
    /**
     * Siswa page
     */
    public function siswa()
    {
        # View
        $this->load->view("admin/siswa");
    }
    
    public function showdata_xhr_siswa()
    {
        echo json_encode($this->admin_model->showdata_xhr_siswa());
    }
    
    /**
     * template page
     */
    public function templatesurat()
    {
        # View
        $this->load->view("admin/templatesurat");
    }
    
    public function manipulate_template()
    {
        echo json_encode($this->admin_model->manipulate_template());
    }
    
    public function show_data_template()
    {
        echo json_encode($this->admin_model->show_data_template());
    }
    
    public function generate_surat_xhr()
    {
        echo json_encode($this->admin_model->generate_surat_xhr());
    }

    public function generatesurat()
    {
        # view
        $this->load->view('admin/generatesurat');
        
    }
}

?>