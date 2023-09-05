<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Input_model');
        $this->load->helper('form');
    }

    public function index()
    {
        // Get all data from the model
        $data['all_data'] = $this->Input_model->getalldata();

        // Load the view and pass the data
        $this->load->view('input', $data);
    }

    public function process_input()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $input_data = $this->input->post('input_data');

            // Memisahkan data berdasarkan underscore (_)
            $data_parts = explode('_', $input_data);

            // Jika ada setidaknya 3 bagian (NAMA, USIA, dan KOTA)
            if (count($data_parts) >= 3) {
                $nama = $data_parts[0];
                $usia = $data_parts[1];
                $kota = $data_parts[2]; // Menggabungkan bagian kota yang dipisah dengan spasi

                // Simpan data ke dalam array
                $data = array(
                    'NAME' => $nama,
                    'AGE' => $usia,
                    'CITY' => $kota,
                    'CREATED_AT' => date('Y-m-d H:i:s') // Current timestamp
                );

                // Panggil fungsi insert_data pada model Input_model
                if ($this->Input_model->insert_data($data)) {
                    // Data berhasil disimpan ke database
                    $data['success'] = 'Data berhasil disimpan ke database.';
                } else {
                    // Terjadi kesalahan saat menyimpan data
                    $data['error'] = 'Terjadi kesalahan saat menyimpan data.';
                }
            } else {
                // Jika format input tidak sesuai
                $data['error'] = 'Format input tidak sesuai.';
            }

            // Get all data from the model again to update the table
            $data['all_data'] = $this->Input_model->getalldata();

            // Load the view and pass the data
            $this->load->view('input', $data);
        }
    }
}
