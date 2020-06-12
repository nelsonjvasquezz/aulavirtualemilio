<?php
/**
 * Created by PhpStorm.
 * User: Nelson
 * Date: 12/06/2020
 * Time: 11:07 AM
 */

class DocumentosMatricula extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $data['title']="Documentos";
        $this->load->view("layout/header");
        $this->load->view("layout/navbar");
        $this->load->view("documentosmatricula",$data);
        $this->load->view("layout/footer");
    }
}