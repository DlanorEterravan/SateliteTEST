<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class grd_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('grados_model');
    }

    public function index()/* Mostrar Formulario de grados */
    {
        $this->load->view('header');
		$this->load->view('nav/nav');
        $this->load->view('footer');
        $this->load->view('grados/set_grd');
    }

    public function validarGrd()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('grado', $_POST['grado'], 'required|alpha');
        if ($this->form_validation->run() !== FALSE) 
        {
            $data = array(
                        'grd_nombre' => ucfirst($_POST['grado'])
                    );

            $this->grados_model->setGrd($data);
            echo 'GOOD'; 

        }else{
            echo 'FAIL';
        }
    }

    public function getGrd()
    {
        $this->load->view('header');
		$this->load->view('nav/nav');
        $this->load->view('footer');
        $this->load->view('grados/get_grd');
    }
}