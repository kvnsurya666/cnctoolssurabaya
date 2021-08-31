<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller
{

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->layout('admin/home', null);
	}

	public function signout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }

}