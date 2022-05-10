<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['produk'] = $this->Produk_model->getAllProduk();
        $this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        $data['title'] = 'Tambah Data Produk';
        $this->form_validation->set_rules('namaProduk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('tambah', $data);
            $this->load->view('footer');
        } else {
            $this->Produk_model->addDataProduk();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('home');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Ubah Data Produk';
        $data['produk'] = $this->Produk_model->getProdukById($id);
        $this->form_validation->set_rules('namaProduk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('edit', $data);
            $this->load->view('footer');
        } else {
            $this->Produk_model->editDataProduk();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('home');
        }
    }

    public function delete($id)
    {
        $this->Produk_model->deleteDataProduk($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('home');
    }
}
