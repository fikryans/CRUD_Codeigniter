<?php

Class Mod_barang extends CI_Model{
    
    function tampil_barang(){
        //ambil data barang
        $this->db->order_by("nama", "asc"); 
        $barang = $this->db->get('barang');       
        return $barang;
    }
    function get_barang($id){
        return $this->db->get_where('barang',array('id'=>$id));
    }

    
}
