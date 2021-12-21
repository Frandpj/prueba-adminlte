<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Empresa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Empresa_model', 'empresa');
	}

	/**
	 * Página principal de empresas
	 */
	public function index()
	{
		// Contiene las empresas
		$data['empresas'] = $this->empresa->getEmpresas();

		// Carga el menu, la página principal y las cargas generales.
		$this->load->view('general/cargas_generales');
		$this->load->view('general/menu');
		$this->load->view('empresa/mainEmpresas', $data);
		$this->load->view('general/footer');
		
	}

	/**
	 * Vista para añadir empresa
	 */
	public function viewAddEmpresa()
	{
		
		// Carga el menu, la página principal y las cargas generales.
		$this->load->view('general/cargas_generales');
		$this->load->view('general/menu');
		$this->load->view('empresa/viewAddEmpresa');
		$this->load->view('general/footer');
		
	}
	
	/**
	 * Función para añadir empresa
	 */
	public function addEmpresa()
	{
		
		$data = $this->input->post();

		if($this->empresa->addEmpresa($data)) {

			$this->index();			

		}
		
	}

	/**
	 * Vista para editar empresa
	 */
	public function viewEditEmpresa($id)
	{

		// Contiene las empresas
		$data['datos_empresa'] = $this->empresa->getEmpresa($id);
		
		// Carga el menu, la página principal y las cargas generales.
		$this->load->view('general/cargas_generales');
		$this->load->view('general/menu');
		$this->load->view('empresa/viewEditEmpresa', $data);
		$this->load->view('general/footer');
		
	}

	/**
	 * Función para editar empresa
	 */
	public function editEmpresa()
	{
		
		$data = $this->input->post();

		if($this->empresa->editEmpresa($data)) {

			$this->index();			

		}
		
	}

	/**
	 * Función para eliminar empresa
	 */
	public function deleteEmpresa($id)
	{

		echo json_encode($this->empresa->deleteEmpresa($id));
		
	}

}