<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Empleado extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Empleado_model', 'empleado');
		$this->load->model('Empresa_model', 'empresa');
	}

	/**
	 * Página principal de empleados
	 */
	public function index()
	{
		
		// Contiene los empleados
		$data['empleados'] = $this->empleado->getEmpleados();

		// Carga el menu, la página principal y las cargas generales.
		$this->load->view('general/cargas_generales');
		$this->load->view('general/menu');
		$this->load->view('empleado/mainEmpleados', $data);
		$this->load->view('general/footer');
		
	}

	/**
	 * Vista para añadir empleado
	 */
	public function viewAddEmpleado()
	{

		// Contiene las empresas
		$data['empresas'] = $this->empresa->getEmpresas();
		
		// Carga el menu, la página principal y las cargas generales.
		$this->load->view('general/cargas_generales');
		$this->load->view('general/menu');
		$this->load->view('empleado/viewAddEmpleado', $data);
		$this->load->view('general/footer');
		
	}
	
	/**
	 * Función para añadir empleado
	 */
	public function addEmpleado()
	{
		
		$data = $this->input->post();

		if($this->empleado->addEmpleado($data)) {

			$this->index();			

		}
		
	}

	/**
	 * Vista para editar empleado
	 */
	public function viewEditEmpleado($id)
	{

		// Contiene las empleados
		$data['datos_empleado'] = $this->empleado->getEmpleado($id);

		// Contiene las empresas
		$data['empresas'] = $this->empresa->getEmpresas();
		
		// Carga el menu, la página principal y las cargas generales.
		$this->load->view('general/cargas_generales');
		$this->load->view('general/menu');
		$this->load->view('empleado/viewEditEmpleado', $data);
		$this->load->view('general/footer');
		
	}

	/**
	 * Función para editar empleado
	 */
	public function editEmpleado()
	{
		
		$data = $this->input->post();

		if($this->empleado->editEmpleado($data)) {

			$this->index();			

		}
		
	}

	/**
	 * Función para eliminar empleado
	 */
	public function deleteEmpleado($id)
	{

		echo json_encode($this->empleado->deleteEmpleado($id));
		
	}

}