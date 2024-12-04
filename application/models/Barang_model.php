<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model{
    private $table = 'barang';

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insert($data){
        $attr = array(
            'id'        => $data['id'],
            'nama'      => $data['nama'],
            'deskripsi' => $data['deskripsi'],
            'kategori'  => $data['kategori'],
            'est_berat' => $data['est_berat'],
            'harga'     => $data['harga'],
            'diskon'    => $data['diskon'],
            'tgl_masuk' => $data['tgl_masuk'],
            'gambar'    => $data['gambar']
        );

        $cek = $this->db->insert($this->table, $attr);

        return ($cek) ? true:false;
    }

    public function update($data){
        if(!empty($data['nama'])) $this->db->set('nama', $data['nama']);
        if(!empty($data['deskripsi'])) $this->db->set('deskripsi', $data['deskripsi']);
        if(!empty($data['kategori'])) $this->db->set('kategori', $data['kategori']);
        if(!empty($data['est_berat'])) $this->db->set('est_berat', $data['est_berat']);
        if(!empty($data['harga'])) $this->db->set('harga', $data['harga']);
        if(!empty($data['diskon'])) $this->db->set('diskon', $data['diskon']);
        if(!empty($data['tgl_masuk'])) $this->db->set('tgl_masuk', $data['tgl_masuk']);
        if($data['gambar'] != null) $this->db->set('gambar', $data['gambar']);

        $this->db->where('id', $data['id']);

        $cek = $this->db->update($this->table);

        return ($cek) ? true:false;
    }

    public function delete($id){
        $cek = $this->db->delete($this->table, array('id' => $id));

        return ($cek) ? true:false;
    }

    public function search($text){
        $this->db->like('nama', $text);
        $this->db->or_like('deskripsi', $text);
        $this->db->or_like('harga', $text);
        $this->db->or_like('kategori', $text);
        $this->db->or_like('(nama - diskon)', $text);
        $result = $this->db->get($this->table)->result_array();

        return (count($result) > 0) ? $result:null;
    }

    public function selectAll(){
        $this->db->order_by('tgl_masuk', 'desc');
        $result = $this->db->get($this->table)->result_array();

        return (count($result) > 0) ? $result:null;
    }

    public function selectNew(){
        $this->db->where('DATEDIFF(curdate(), tgl_masuk) > 0');
        $this->db->where('DATEDIFF(curdate(), tgl_masuk) < 30');
        $result = $this->db->get($this->table)->result_array();

        return (count($result) > 0) ? $result:null;
    }

    public function selectById($id){
        $this->db->where('id', $id);
        $result = $this->db->get($this->table)->result_array();

        return (count($result) > 0) ? $result[0]:null;
    }

    public function selectByKategori($kategori){
        $this->db->where('kategori', $kategori);
        $result = $this->db->get($this->table)->result_array();

        return (count($result) > 0) ? $result:null;
    }

    public function selectByDiskon(){
        $this->db->where('diskon >', 0);
        $result = $this->db->get($this->table)->result_array();

        return (count($result) > 0) ? $result:null;
    }
}

?>