<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'dashboard';

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer');
    }



    public function pelapor()
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        // $this->load->model('tgl_model');
        // $data['menu'] = $this->tgl_model->gettgl()->result_array();
        $data['menu'] = $this->db->get_where('data_pelapor')->result_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/pelapor', $data);
        $this->load->view('templates/admin_footer');
    }

    public function informasi()
    {

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['menu'] = $this->db->get_where('informasi')->result_array();
        $data['nama'] = $this->db->get_where('data_pelapor')->result_array();


        $this->form_validation->set_rules('nama_pelapor', '"nama"', 'required');
        $this->form_validation->set_rules('laporan', '"Laporan"', 'required');
        $this->form_validation->set_rules('status', '"Status"', 'required');
        $this->form_validation->set_rules('tanggal', '"Tanggal"', 'required');
        if ($this->form_validation->run() == false) {


            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/data_informasi', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $data = [
                'nama_pelapor' => $this->input->post('nama_pelapor'),
                'laporan' => $this->input->post('laporan'),
                'status' => $this->input->post('status'),
                'tanggal' => $this->input->post('tanggal')

            ];
            $this->db->insert('informasi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			congratuation, your data was inputted! </div>');
            redirect('admin/informasi');
        }
    }


    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_pelapor');
        redirect('admin/pelapor');
    }
    function delete_informasi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('informasi');
        redirect('admin/informasi');
    }

    function print($id)
    {
        $this->load->model('tgl_model');
        $data['data_print'] = $this->tgl_model->gettgl($id)->row_array();

        // $data['print'] = $this->db->get_where('data_pelapor')->row_array();
        // $nama = $this->db->get_where('data_pelapor', ['nama']);
        // $this->db->where('nama', $nama);
        // $this->db->where('namas', 'nama_pelapor');
        // $data['tanggal'] = $this->db->where('informasi');


        $this->load->view('admin/print', $data);
    }
}
