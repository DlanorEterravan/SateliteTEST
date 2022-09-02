<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class alm_controller extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('grados_model');
		$this->load->model('alumnos_model');
		$this->load->model('sexo_model');
	}

	public function index() /* Muestra el formulario de Alumnos */
	{
		$result= $this->grados_model->showGrd();
		for($i=0; $i < count($result); $i++){
			$query[] = is_object($result[$i])? get_object_vars($result[$i]) : "" ;
		};
		
		$resultS = $this->sexo_model->showSexo();
		for($i=0; $i < count($resultS); $i++){
			$dataS[] = is_object($resultS[$i])? get_object_vars($resultS[$i]) : "" ;
		};

		$this->load->view('header');
		$this->load->view('nav/nav');
		$this->load->view('footer');
		$this->load->view('alumnos/alumno_registro', array('query' => $query,'dataS' => $dataS));
	}	

	public function ValidarForm() /* valida el Formulario */
    {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('codigo', 	 $_POST['codigo'], 'required|integer');
		$this->form_validation->set_rules('nombre', 	 $_POST['nombre'], 'required');
		$this->form_validation->set_rules('edad',   	 $_POST['edad'], 'required|integer');
		$this->form_validation->set_rules('sexo', 		 $_POST['sexo'], 'required');
		$this->form_validation->set_rules('grado', 		 $_POST['grado'], 'required');
		$this->form_validation->set_rules('descripcion', $_POST['descripcion'], 'required');

		if ($this->form_validation->run() != FALSE)
		{  
			$data = array(
				'alm_codigo' => $this->input->post('codigo'),
				'alm_nombre' => $this->input->post('nombre'),
				'alm_edad' => $this->input->post('edad'),
				'alm_sexo_fk' => $this->input->post('sexo'),
				'alm_id_grd' => $this->input->post('grado'),
				'alm_observacion' => $this->input->post('descripcion'),
			);
			$this->alumnos_model->setAlm($data);
			echo "GOOD";
        }
		else
		{
			echo "FAIL";
		}
    }

	public function getAlm() /* Muestra el listado de alumnos */
	{
		$this->load->view('header');
		$this->load->view('nav/nav');
		$this->load->view('footer');
		$this->load->view('/alumnos/mostrar_alumnos');
	}

	public function getAlmJS() /* Pasar Datos dinamicos */
	{ 
		$result= $this->alumnos_model->getAllAlm();
		echo json_encode($result);
	}
}
?>