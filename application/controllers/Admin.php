<?php
class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_model");
    }

    public function index()
    {
        $this->load->view("admin/admin");
    }

    public function confirms()
    {
    }


}

?>