<?php

class Produk_model extends CI_Model
{
    public function getAllProduk()
    {
        return $this->db->get('produk')->result_array();
    }

    public function addDataProduk()
    {
        $data = [
            "nama_produk" => $this->input->post('namaProduk', true),
            "keterangan" => $this->input->post('keterangan', true),
            "harga" => $this->input->post('harga', true),
            "jumlah"  => $this->input->post('jumlah', true)
        ];

        $this->db->insert('produk', $data);
    }

    public function editDataProduk()
    {
        $data = [
            "nama_produk" => $this->input->post('namaProduk', true),
            "keterangan" => $this->input->post('keterangan', true),
            "harga" => $this->input->post('harga', true),
            "jumlah"  => $this->input->post('jumlah', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('produk', $data);
    }

    public function getProdukById($id)
    {
        return $this->db->get_where('produk', ['id' => $id])->row_array();
    }

    public function deleteDataProduk($id)
    {
        $this->db->delete('produk', ['id' => $id]);
    }
}
