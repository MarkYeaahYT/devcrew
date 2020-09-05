<?php
class App extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('app_model');
    }

    public function index()
    {
        $this->load->view("app");
    }
}
?>