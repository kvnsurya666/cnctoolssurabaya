<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function index()
	{
		$url = base_url();
		$img = base_url('assets/img/admin/logocbmbaru.png');
		$data['logo'] = '<div class="logo">
							<h1>
								<a href=' . $url . '>
									<img class="navbar-brand-beranda" src=' . $img . '>
								</a>
							</h1>
						</div>';

		$this->layout('home', 'home', $data);
	}
}
