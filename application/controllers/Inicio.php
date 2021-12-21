<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// Carga de la página de carga de externos
		$this->load->view('general/cargas_generales');
			
		// Carga el menu y la página principal.
		$this->load->view('general/menu');
		$this->load->view('inicio');
		$this->load->view('general/footer');
		
	}

}