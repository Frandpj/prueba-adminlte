<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Empresa_model extends CI_Model
{

    //Instancia de la base de datos.
    private $db;

    /**
     * Constructor de la clase entidad.
     */
    public function __construct()
    {
        parent::__construct();

        // Llamada a la base de datos para trabajar sobre esta.
        $ci = &get_instance();
        $this->db = $ci->load->database('test', true);
    }

    /**
     *  Devuelve las empresas
     */
    public function getEmpresas() {

        return $this->db
        ->get('empresas')
        ->result_object();
    }

    /**
     *  Devuelve una empresa
     */
    public function getEmpresa($id) {

        return $this->db
        ->where('id', $id)
        ->get('empresas')
        ->result_object();
    }

    /**
     * Añade una nueva empresa
     */
    public function addEmpresa($datos_empresa) {

        return $this->db
        ->insert('empresas', $datos_empresa);
    }

    /**
     * Edita una empresa
     */
    public function editEmpresa($datos_empresa) {

        return $this->db
        ->where('id', $datos_empresa['id'])
        ->update('empresas', $datos_empresa);
    }

    /**
     * Borra una empresa
     */
    public function deleteEmpresa($id) {

        return $this->db
        ->where('id', $id)
        ->delete('empresas');
    }

}
