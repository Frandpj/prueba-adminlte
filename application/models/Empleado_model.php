<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Empleado_model extends CI_Model
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
     *  Devuelve los empleados
     */
    public function getEmpleados() {

        return $this->db
        ->get('empleados')
        ->result_object();
    }

    /**
     *  Devuelve un empleado
     */
    public function getEmpleado($id) {

        return $this->db
        ->where('id', $id)
        ->get('empleados')
        ->result_object();
    }

    /**
     * Añade un nuevo empleado
     */
    public function addEmpleado($datos_empleado) {

        return $this->db
        ->insert('empleados', $datos_empleado);
    }

    /**
     * Edita un empleado
     */
    public function editEmpleado($datos_empleado) {

        return $this->db
        ->where('id', $datos_empleado['id'])
        ->update('empleados', $datos_empleado);
    }

    /**
     * Borra un empleado
     */
    public function deleteEmpleado($id) {

        return $this->db
        ->where('id', $id)
        ->delete('empleados');
    }
}
