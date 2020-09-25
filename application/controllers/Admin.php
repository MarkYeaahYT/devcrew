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
        
        if($this->session->has_userdata('username')){
            $this->load->view("admin/admin");
        }else{
            $this->load->view('errors/forbidden');
        }
    }
    
    public function showdata_xhr()
    {
        
    }
    
    public function confirms()
    {
        
    }
    
    public function login()
    {
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
}

?>