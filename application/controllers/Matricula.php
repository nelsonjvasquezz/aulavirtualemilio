<?php
/**
 * Created by PhpStorm.
 * User: Nelson
 * Date: 28/05/2020
 * Time: 03:14 PM
 */

class Matricula extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view("layout/header");
        $this->load->view("layout/navbar");
        $this->load->view("matricula");
        $this->load->view("layout/footer");
    }
}