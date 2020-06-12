<?php
/**
 * Created by PhpStorm.
 * User: Nelson
 * Date: 27/05/2020
 * Time: 05:39 PM
 */

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $data['title']="Home";
        $this->load->view("layout/header");
        $this->load->view("layout/navbar");
        $this->load->view("home",$data);
        $this->load->view("layout/footer");
    }
}