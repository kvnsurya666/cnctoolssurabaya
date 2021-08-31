<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MProduk extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function count($count)
  {
    $this->db->from('barang');
    $this->db->where('kode_kategori', $count);
    return $this->db->count_all_results();
  }

  public function getSemuaProduk($limit, $start)
  {
    $sql = $this->db->query("SELECT * FROM barang JOIN kategori on kategori.kode_kategori = barang.kode_kategori\n"
      . "JOIN merk on merk.kode_merk = barang.kode_merk\n"
      . "GROUP BY barang.id_barang\n"
      . "LIMIT $limit\n"
      . "OFFSET $start\n");
    return $sql->result_array();
  }

  public function getProduk($kode_kategori, $per_page, $start)
  {
    $this->db->select('barang.*, kategori.*, merk.*');
    $this->db->join('kategori', 'kategori.kode_kategori = barang.kode_kategori');
    $this->db->join('merk', 'merk.kode_merk = barang.kode_merk');
    $this->db->where('barang.kode_kategori', $kode_kategori);
    $this->db->group_by('barang.id_barang');
    return $this->db->get('barang', $per_page, $start)->result_array();
  }

  public function getKategori()
  {
    return $this->db->get('kategori')->result();
  }

  public function getModel()
  {
    return $this->db->get('model')->result();
  }

  public function getMerk()
  {
    return $this->db->get('merk')->result();
  }

  public function addbarang()
  {
    $kategori = $this->input->post('kategori');

    $this->db->join('kategori', 'kategori.kode_kategori = barang.kode_kategori');
    $this->db->where('barang.kode_kategori', $kategori);
    $this->db->limit(1);
    $this->db->order_by('id_barang', 'desc');
    $query = $this->db->get('barang')->row();

    if ($query != null) {
      $id = $query->id_barang + 1;
      $group = kategori_help($query->nama_kategori);
    } else {
      if ($kategori == 0) {
        $id = 1000;
        $group = 'industrial-machinery';
      }
      if ($kategori == 1) {
        $id = 2000;
        $group = 'aksesoris';
      }
      if ($kategori == 2) {
        $id = 3000;
        $group = 'jasa-perbaikan';
      }
    }

    //Upload Gambar
    if (is_dir("assets/img/barang/$group") == false) {
      mkdir("assets/img/barang/$group");
    }
    $config['upload_path']          = 'assets/img/barang/' . $group . '/';
    $config['allowed_types']        = '*';
    $config['encrypt_name']        = TRUE;
    $this->load->library('upload', $config);
    $this->upload->do_upload('gambar');

    //Save to Database
    $data = [
      "id_barang" => $id,
      "nama_barang" => $this->input->post('nama_barang'),
      "kode_kategori" => $kategori,
      "kode_model" => $this->input->post('model'),
      "kode_merk" => $this->input->post('merk'),
      "gambar" => $this->upload->data('file_name')
    ];
    $this->db->insert('barang', $data);
  }

  public function detailProduk($id_barang)
  {
    $this->db->join('kategori', 'kategori.kode_kategori = barang.kode_kategori');
    $this->db->where('barang.id_barang', $id_barang);
    return $this->db->get('barang')->row_array();
  }
}
