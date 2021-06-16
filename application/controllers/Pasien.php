<?php
defined('BASEPATH') OR exit('Nodirectscriptaccessallowed');

class Pasien extends CI_Controller {

    public function index() {

        $this->load->model('pasien_model'); //load model
        $data['pasien'] = $this->pasien_model->getAll(); //mengambil data

        $this->load->view('header.php');
        $this->load->view('pasien/index.php', $data);
        $this->load->view('footer.php');
    }

    public function view($id) {
        $this->load->model('pasien_model'); //load model
        $data['pasien'] = $this->pasien_model->findByID($id);

        $this->load->view('header.php');
        $this->load->view('pasien/view.php', $data);
        $this->load->view('footer.php');
    }


}