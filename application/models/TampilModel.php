<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TampilModel extends CI_Model
{
    public function ambil($kode)
    {
        $this->db->from('surat_keluar');
        $this->db->where('kode', $kode);
        return $this->db->get();
    }
}