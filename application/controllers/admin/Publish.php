<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publish extends Admin_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model(['MProduk']);
        $this->load->helper(['form', 'url']);
    }

	public function index()
	{
        $data['kategori'] = $this->MProduk->getKategori();
        $data['model'] = $this->MProduk->getModel();
        $data['merk'] = $this->MProduk->getMerk();

        if (isset($_POST['submit']))
        {
            $this->MProduk->addBarang();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('admin/publish', 'refresh');
           
        }
		$this->layout('admin/publish', $data);
	}


	public function signout()
    {
        $this->session->sess_destroy();
        redirect('form');
    }

}