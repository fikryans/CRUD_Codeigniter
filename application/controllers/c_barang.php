<?php

Class C_barang extends CI_Controller {

    function index() {
        $this->load->model('mod_barang');

        $data['barang'] = $this->mod_barang->tampil_barang()->result();
        
        $this->load->view('view_barang', $data);
    }

    function tambah() {
        $this->load->view('tambah_barang');
    }

    function tambah_barang() {
        $databarang = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'));
        $this->db->insert('barang', $databarang);
        redirect('c_barang');
    }

    function edit() {
        $this->load->model('mod_barang');
        $id = $this->uri->segment(3);
        $data ['get_barang'] = $this->mod_barang->get_barang($id)->row_array();
        $this->load->view('edit_barang', $data);
    }

    function edit_barang() {
        $id         = $this->input->post('id');
        $databarang = array(
            'kode'  => $this->input->post('kode'),
            'nama'  => $this->input->post('nama'),
            'harga' => $this->input->post('harga'));
        $this->db->where('id',$id);
        $this->db->update('barang', $databarang);
        redirect('c_barang');
    }
    function hapus(){
        $id = $this->uri->segment(3);
        $this->db->where('id',$id);
        $this->db->delete('barang');
        redirect('c_barang');
    }

}
