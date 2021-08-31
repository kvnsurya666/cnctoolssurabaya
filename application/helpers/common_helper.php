<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

function pagination($url, $rowcount, $per_page)
{
    $ci = & get_instance();
    $ci->load->library('pagination');

    //konfigurasi pagination
    $config = array();
    $config["base_url"] = base_url("produk/$url");
    $config["total_rows"] = $rowcount;
    $config["per_page"] = $per_page;
    $config['use_page_numbers'] = TRUE;
    // $config['page_query_string'] = TRUE;
    // $config['query_string_segment'] = 'halaman';

    //membuat style pagination
    $config['first_link']     = 'First';
    $config['last_link']      = 'Last';
    $config['next_link']      = 'Next';
    $config['prev_link']      = 'Prev';
    $config['full_tag_open']  = '<ul class="pagination"><ul class="setPaginate">';
    $config['full_tag_close'] = '</ul></ul>';
    $config['num_tag_open']   = '<li>';
    $config['num_tag_close']  = '</li>';
    $config['cur_tag_open']   = '<li><a class="current_page">';
    $config['cur_tag_close']  = '</a></li>';
    $config['next_tag_open']  = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_tag_open']  = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close']= '</li>';
    $config['last_tag_open']  = '<li>';
    $config['last_tag_close'] = '</li>';
    $ci->pagination->initialize($config);
    return $ci->pagination->create_links();
}

function kategori_help($kategori)
{
    if ($kategori == "industrial") {
        return "industrial-machinery";
    }
    else if ($kategori == "perbaikan") {
        return "jasa-perbaikan";
    }
    else {
        return "aksesoris";
    }
}