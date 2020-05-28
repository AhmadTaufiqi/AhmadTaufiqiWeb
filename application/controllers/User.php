<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/index');
        $this->load->view('templates/user_footer');
    }
    public function informasi()
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['menu'] = $this->db->get_where('informasi')->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/data_informasi', $data);
        $this->load->view('templates/user_footer');
    }

    public function lapor()
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->form_validation->set_rules('nama_lengkap', '"Nama"', 'required');
        $this->form_validation->set_rules('bagian', '"Bagian"', 'required');
        $this->form_validation->set_rules('perihal', '"Perihal"', 'required');
        $this->form_validation->set_rules('masalah', '"Masalah"', 'required');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/user_header', $data);
            $this->load->view('user/lapor');
            $this->load->view('templates/user_footer');
        } else {

            $data = [
                'nama' => $this->input->post('nama_lengkap'),
                'bagian' => $this->input->post('bagian'),
                'perihal' => $this->input->post('perihal'),
                'deskripsi_masalah' => $this->input->post('masalah')
            ];

            $this->db->insert('data_pelapor', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        terimakasih,  data sudah masuk! </div>');
            redirect('user/lapor');
        }
    }
}
