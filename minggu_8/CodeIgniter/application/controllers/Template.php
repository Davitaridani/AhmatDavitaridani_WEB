<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Template extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
    }
    public function index()
    {
        $this->load->view('view_template');
    }
}