<?php
defined('BASEPATH') OR exit('Nodirectscriptaccessallowed');

class BMI_pasien extends CI_Controller {

    public function index() {

        $this->load->model('bmipasien_model'); //load model
        $data['bmipasien'] = $this->bmipasien_model->getAllbmi(); //mengambil data

        $this->load->view('header.php');
        $this->load->view('bmipasien/index.php', $data);
        $this->load->view('footer.php');
    }

    public function view($id) {
        $this->load->model('bmipasien_model'); //load model
        $data['bmipasien'] = $this->bmipasien_model->findByIDbmi($id);

        $this->load->view('header.php');
        $this->load->view('bmipasien/view.php', $data);
        $this->load->view('footer.php');
    }


}