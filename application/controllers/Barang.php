<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{
    public function __construct(){
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');
	}

    public function index(){
        echo "It works!";
    }

    public function add_barang(){
        $dst        = $this->input->post('dst');
        $nama       = $this->input->post('nama');
        $deskripsi  = $this->input->post('deskripsi');
        $kategori   = $this->input->post('kategori');
        $est_berat  = $this->input->post('est_berat');
        $harga      = $this->input->post('harga');
        $diskon     = $this->input->post('diskon');
        $tgl_masuk  = $this->input->post('tgl_masuk');

        if(isset($_FILES["gambar"]["name"])){
            $gambar = $_FILES["gambar"]["name"];
            $gambar_tmp = $_FILES['gambar']['tmp_name'];
    
            if(!empty($gambar)){
                $location = "img/";
                move_uploaded_file($gambar_tmp, $location.$gambar);
            }
        } 

        $tgl_time = strtotime($tgl_masuk);
        $new_format = date('Y-m-d', $tgl_time);

        $tgl_masuk = $new_format;

        $data = array(
            'id'        => NULL,
            'nama'      => $nama,
            'deskripsi' => $deskripsi,
            'kategori'  => $kategori,
            'est_berat' => $est_berat,
            'harga'     => $harga,
            'diskon'    => $diskon,
            'tgl_masuk' => $tgl_masuk,
            'gambar'    => $gambar 
        );

        $this->load->model('Barang_model', 'brg');

        $this->brg->insert($data);

		$this->show_kategori($dst);
    }

    public function edit(){
        $id         = $this->input->post('id');
        $nama       = $this->input->post('nama');
        $deskripsi  = $this->input->post('deskripsi');
        $kategori   = $this->input->post('kategori');
        $est_berat  = $this->input->post('est_berat');
        $harga      = $this->input->post('harga');
        $diskon     = $this->input->post('diskon');
        $tgl_masuk  = $this->input->post('tgl_masuk');

        if(isset($_FILES["gambar"]["name"])){
            $gambar = $_FILES["gambar"]["name"];
            $gambar_tmp = $_FILES['gambar']['tmp_name'];
    
            if(!empty($gambar)){
                $location = "img/";
                move_uploaded_file($gambar_tmp, $location.$gambar);
            }
        } 

        $tgl_time = strtotime($tgl_masuk);
        $new_format = date('Y-m-d', $tgl_time);

        $tgl_masuk = $new_format;

        $data = array(
            'id'        => $id,
            'nama'      => $nama,
            'deskripsi' => $deskripsi,
            'kategori'  => $kategori,
            'est_berat' => $est_berat,
            'harga'     => $harga,
            'diskon'    => $diskon,
            'tgl_masuk' => $tgl_masuk,
            'gambar'    => $gambar 
        );

        $this->load->model('Barang_model', 'brg');

        $this->brg->update($data);

		$this->show_kategori('all');
    }

    public function hapus(){
        $id = $this->input->get('id');

        $this->load->model('Barang_model', 'brg');

        $this->brg->delete($id);

		$this->show_kategori('all');
    }

    public function search(){
        $search = $this->input->post('search');

        $this->load->model('Barang_model', 'brg');

        $b = $this->brg->search($search);

        if($this->session->userdata() != null){
			if($this->session->userdata('role') == 'admin'){
				$header  = 'admin/header/header_admin';
				$content = 'admin/content/cari_admin';
			} else if($this->session->userdata('role') == 'user'){
				$header  = 'user/header/header_user';
				$content = 'user/content/cari_user';
			} else {
				$header  = 'guest/header/header_guest';
				$content = 'user/content/cari_user';
			}
		} else {
			$header  = 'guest/header/header_guest';
			$content = 'user/content/cari_user';
		}

		$data = array(
			'kategori'  => 'search',
			'brg'       => $b,
			'header' 	=> $header,
			'content' 	=> $content
		);

		$this->load->view('admin/layout', $data);
    }

    public function show_kategori($kategori){
        $this->load->model('Barang_model', 'brg');

		if($kategori == 'all'){
			$b = $this->brg->selectAll();
		} else if($kategori == 'new'){
			$b = $this->brg->selectNew();
		} else {
			$b = $this->brg->selectByKategori($kategori);
		}
        
        if($this->session->userdata() != null){
			if($this->session->userdata('role') == 'admin'){
				$header  = 'admin/header/header_admin';
				$content = 'admin/content/produk_admin';
			} else if($this->session->userdata('role') == 'user'){
				$header  = 'user/header/header_user';
				$content = 'user/content/produk_user';
			} else {
				$header  = 'guest/header/header_guest';
				$content = 'user/content/produk_user';
			}
		} else {
			$header  = 'guest/header/header_guest';
			$content = 'user/content/produk_user';
		}

		$data = array(
			'kategori'  => $kategori,
			'brg'       => $b,
			'header' 	=> $header,
			'content' 	=> $content
		);

		$this->load->view('admin/layout', $data);
	}
}

?>