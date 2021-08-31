<?php defined('BASEPATH') or exit('No direct script access allowed');

class MAdmin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAdmin()
    {
        return $this->db->get('admin')->result_array();
    }

    public function getAdminBy($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('admin')->row();
    }
}