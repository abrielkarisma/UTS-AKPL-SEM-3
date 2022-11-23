<?php
class Dashboard extends CI_Controller{
    public function index(){
        $data['tanah'] = $this->model_tanah->tampil_data()->result(); 
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');

    }
}