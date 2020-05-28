<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Tgl_Model extends CI_Model
{
    public function gettgl($id)
    {
        $query = "SELECT data_pelapor.*, informasi.tanggal
        FROM data_pelapor JOIN informasi
        ON data_pelapor.nama = informasi.nama_pelapor
        WHERE data_pelapor.id = $id
        ";

        // $query = "SELECT * FROM data_pelapor INNER JOIN informasi ON data_pelapor.nama = informasi.nama_pelapor";
        return $this->db->query($query);
    }
}
