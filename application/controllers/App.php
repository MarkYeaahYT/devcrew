<?php
class App extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('app_model');
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
}
?>