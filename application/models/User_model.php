<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    private $table = 'user';

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_user_info($username){
        $this->db->where("username", $username);

        $result = $this->db->get($this->table)->result_array();

        return (count($result) > 0) ? $result[0]:null;
    }

    public function register($data){
        $attr = array(
            'username'  => $data['username'],
            'nama'      => $data['nama'],
            'password'  => $data['password'],
            'role'      => $data['role']
        );

        $cek = $this->db->insert($this->table, $attr);

        return ($cek) ? true:false;
    }
}

?>