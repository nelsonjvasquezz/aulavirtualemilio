<?php
/**
 * Created by PhpStorm.
 * User: Nelson
 * Date: 28/05/2020
 * Time: 02:32 PM
 */

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view("layout/header");
        $this->load->view("layout/navbar");
        $this->load->view("login");
        $this->load->view("layout/footer");
    }
}