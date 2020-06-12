<?php
/**
 * Created by PhpStorm.
 * User: Nelson
 * Date: 29/05/2020
 * Time: 03:45 PM
 */

class RegistroAlumno extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view("layout/header");
        $this->load->view("layout/navbar");
        $this->load->view("registroalumno");
        $this->load->view("layout/footer");
    }
}