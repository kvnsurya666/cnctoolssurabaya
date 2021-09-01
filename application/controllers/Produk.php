<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends MY_Controller
{
	private $per_page = 20;

	function start()
	{
		if ($this->uri->segment(3) == null) {
			return $start = 0;
		} else {
			return $start = (($this->uri->segment(3) - 1) * $this->per_page);
		}
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['MProduk']);
	}

	public function index()
	{
	}

	public function industrialmachinery()
	{
		$data['countProduk'] = $this->MProduk->count(0);
		$data['pagination'] = pagination('industrialmachinery', $data['countProduk'], $this->per_page);

		$url = base_url();
		$img = base_url('assets/img/logocbmbaru.png');
		$data['kategori'] = 'industrialmachinery';
		$data['katalog'] = $this->MProduk->getProduk(0, $this->per_page, $this->start());
		$data['logo'] = '<div class="logo">
							<h1>
								<a href=' . $url . '>
									<img class="navbar-brand-produk" src=' . $img . '>
								</a>
							</h1>
						</div>';
		$this->layout('produk', 'produk', $data);
	}

	public function aksesoris()
	{
		$data['countProduk'] = $this->MProduk->count(1);
		$data['pagination'] = pagination('aksesoris', $data['countProduk'], $this->per_page);

		$url = base_url();
		$img = base_url('assets/img/logocbmbaru.png');
		$data['kategori'] = 'aksesoris';
		$data['katalog'] = $this->MProduk->getProduk(1, $this->per_page, $this->start());
		$data['logo'] = '<div class="logo">
							<h1>
								<a href=' . $url . '>
									<img class="navbar-brand-produk" src=' . $img . '>
								</a>
							</h1>
						</div>';
		$this->layout('produk', 'produk', $data);
	}

	public function jasaperbaikan()
	{
		$data['countProduk'] = $this->MProduk->count(2);
		$data['pagination'] = pagination('jasaperbaikan', $data['countProduk'], $this->per_page);

		$url = base_url();
		$img = base_url('assets/img/logocbmbaru.png');
		$data['kategori'] = 'jasaperbaikan';
		$data['katalog'] = $this->MProduk->getProduk(2, $this->per_page, $this->start());
		$data['logo'] = '<div class="logo">
							<h1>
								<a href=' . $url . '>
									<img class="navbar-brand-produk" src=' . $img . '>
								</a>
							</h1>
						</div>';
		$this->layout('produk', 'produk', $data);
	}

	public function detail($id_sepatu)
	{
		$url = base_url();
		$img = base_url('assets/img/logocbmbaru.png');
		$data['kategori'] = 'detail';
		$data['logo'] = '<div class="logo">
							<h1>
								<a href=' . $url . '>
									<img class="navbar-brand" src=' . $img . '>
								</a>
							</h1>
						</div>';
		$data['detail'] = $this->MProduk->detailProduk($id_sepatu);
		$this->layout('produk', 'detail', $data);
	}

	public function requestColorName()
	{
		$kode = $_POST['warna'];

		$this->db->join('sepatu', 'sepatu.id_sepatu = gambar.id_sepatu');
		$this->db->where('gambar.id_gambar', $kode);
		$sql = $this->db->get('gambar')->row();
		$nama_warna = strtoupper($sql->nama_warna);
		$nama_sepatu = $sql->nama_sepatu;

		$href = 'https://wa.me/6285655131099?text=Apakah+stok+dengan+nama+produk+%2A' . $nama_sepatu . '%2A+warna+%2A' . $nama_warna . '%2A+tersedia+%3F';
		echo $href;
	}
}
