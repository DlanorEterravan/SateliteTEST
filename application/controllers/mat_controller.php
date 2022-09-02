<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class mat_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('materias_model');
    }

    public function index()
    {
        $resultGrd= $this->grados_model->showGrd();
		for($i=0; $i < count($resultGrd); $i++){
			$grado[] = is_object($resultGrd[$i])? get_object_vars($resultGrd[$i]) : "" ;
		};
        $resultMat= $this->materias_model->showMat();
        for($i=0; $i < count($resultMat); $i++){
			$materia[] = is_object($resultMat[$i])? get_object_vars($resultMat[$i]) : "" ;
		};

		$this->load->view('header');
		$this->load->view('nav/nav');
		$this->load->view('footer');
        $this->load->view('materia/registrar_mat', array('grado' => $grado, 'materia' => $materia));
    }

    public function validarMxg(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('grado', $_POST['grado'], 'required|numeric');
        $this->form_validation->set_rules('materia', $_POST['materia'], 'required|numeric');

        if ($this->form_validation->run() !== FALSE)
        {
            $data = array(
                'mxg_id_grd' => $this->input->post('grado'),
                'mxg_id_mat' => $this->input->post('materia'),
            );
            
            $this->materias_model->setMatxGrd($data);
            echo "GOOD";
        }else
        {
            echo "FAIL";
        }
        

    }
}