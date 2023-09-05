<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_model extends CI_Model {

    public function insert_data($data)
    {
        // Insert data ke tabel tesarkatama
        return $this->db->insert('tesarkatama', $data);
    }

    public function getalldata()
    {
        // Ambil semua data dari tabel tesarkatama
        return $this->db->get('tesarkatama')->result_array();
    }
}
