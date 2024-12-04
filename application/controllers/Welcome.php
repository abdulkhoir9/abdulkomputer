<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index(){
		$this->show_home();
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('User_model', 'User');

		$result = $this->User->get_user_info($username);

		$password = md5($password);

		if($result != null && $password == $result['password']){
			$this->session->set_userdata(array(
				'nama' => $result['nama'],
				'role' => $result['role']
			));
			echo "
				<script>
					alert('login berhasil!');
				</script>
			";
			$this->show_home();
		} else {
			echo "
				<script>
					alert('login gagal!');
				</script>
			";
			$this->show_login();
		}
	}

	public function logout(){
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('role');
		$this->session->sess_destroy();

		$this->show_home();
	}

	public function show_login(){
		if($this->session->userdata() != null){
			if($this->session->userdata('role') == 'admin'){
				$header  = 'admin/header/header_admin';
			} else if($this->session->userdata('role') == 'user'){
				$header  = 'user/header/header_user';
			} else {
				$header  = 'guest/header/header_guest';
			}
		} else {
			$header  = 'guest/header/header_guest';
		}

		$data = array(
			'header' 	=> $header,
			'content' 	=> 'admin/content/login_content'
		);

		$this->load->view('admin/layout', $data);
	}

	public function register(){
		$username = $this->input->post('username');
		$nama     = $this->input->post('nama');
		$password = $this->input->post('password');
		$role     = 'user';

		$password = md5($password);

		$data = array(
			'username' => $username,
			'nama'     => $nama,
			'password' => $password,
			'role'     => $role
		);

		$this->load->model('User_model', 'User');

		$result = $this->User->get_user_info($username);

		if($result != null){
			echo "
				<script>
					alert('registrasi gagal!');
				</script>
			";
			$this->show_registrasi();
		} else {
			$this->User->register($data);
			echo "
				<script>
					alert('registrasi berhasil!');
				</script>
			";
			$this->show_login();
		}
	}

	public function show_register(){
		$data = array(
			'header' 	=> 'guest/header/header_guest',
			'content' 	=> 'admin/content/register_content'
		);

		$this->load->view('admin/layout', $data);
	}

	public function show_home(){
		$this->load->model('Barang_model', 'brg');

		$new  = $this->brg->selectNew();
		$disc = $this->brg->selectByDiskon();

		if($new != null && count($new) > 6){
			$new = array_slice($new, 0, 6);
		}
		
		if($disc != null && count($disc) > 6){
			$disc = array_slice($disc, 0, 6);
		}
		
		if($this->session->userdata() != null){
			if($this->session->userdata('role') == 'admin'){
				$header  = 'admin/header/header_admin';
				$content = 'admin/content/home_admin';
			} else if($this->session->userdata('role') == 'user'){
				$header  = 'user/header/header_user';
				$content = 'user/content/home_user';
			} else {
				$header  = 'guest/header/header_guest';
				$content = 'user/content/home_user';
			}
		} else {
			$header  = 'guest/header/header_guest';
			$content = 'user/content/home_user';
		}

		$data = array(
			'new'       => $new,
			'disc'      => $disc,
			'header' 	=> $header,
			'content' 	=> $content
		);

		$this->load->view('admin/layout', $data);
	}

	public function show_kategori(){
		$kategori = $this->input->get('kategori');

		$this->load->model('Barang_model', 'brg');

		if($kategori == 'all'){
			$b = $this->brg->selectAll();
		} else if($kategori == 'new'){
			$b = $this->brg->selectNew();
		} else if($kategori == 'diskon'){
			$b = $this->brg->selectByDiskon();
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

	public function show_produk(){
		$id = $this->input->get('id');

		$this->load->model('Barang_model', 'brg');

		$b = $this->brg->selectById($id);

		if($this->session->userdata() != null){
			if($this->session->userdata('role') == 'admin'){
				$header  = 'admin/header/header_admin';
			} else if($this->session->userdata('role') == 'user'){
				$header  = 'user/header/header_user';
			} else {
				$header  = 'guest/header/header_guest';
			}
		} else {
			$header  = 'guest/header/header_guest';
		}

		$data = array(
			'brg'       => $b,
			'header' 	=> $header,
			'content' 	=> 'admin/content/detail_produk_admin'
		);

		$this->load->view('admin/layout', $data);
	}


	public function show_insert(){
		$kategori = $this->input->get('kategori');

		$data = array(
			'kategori'  => $kategori,
			'header' 	=> 'admin/header/header_admin',
			'content' 	=> 'admin/content/insert'
		);

		$this->load->view('admin/layout', $data);
	}

	public function show_edit(){
		$id = $this->input->get('id');

        $this->load->model('Barang_model', 'brg');

        $b = $this->brg->selectById($id);

        $data = array(
            'brg'		=> $b,
			'header' 	=> 'admin/header/header_admin',
			'content' 	=> 'admin/content/edit'
		);

        $this->load->view('admin/layout', $data);
	}
}
