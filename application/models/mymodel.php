<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
	public function Getbanboo($where=""){
		$data = $this->db->query('select * from banboo '. $where);
		return $data->result_array(); 
		$this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	}
	
	function readData($table, $where, $id){
		return $this->db->get_where($table, array($id => $where));
	}

	public function insertData($tabelName, $data){
		$res = $this->db->insert($tabelName, $data);
		return $res;
	}
	public function updateData($data, $where){
		$res = $this->db->query('UPDATE banboo SET jumlah='.$data.' WHERE kode_banboo= '.$where);
		return $res;
		
	}
	public function deleteData($where){
		$res = $this->db->query('DELETE from banboo WHERE user_username= '.$where);
		return $res;
	}
	public function addData($data) {
		$this->db->insert('user', $data);
	} 
	public function get_data_id($data) {
		$query = $this->db->get_where('banboo', array('user_nama'=>$user_nama));
		return $query->row_array();
	}

	function login($password){
		$key = $this->config->item('encryption_key');
	    $salt1 = hash('sha512', $key . $password);
	    $salt2 = hash('sha512', $password . $key);
	    return hash('sha512', $salt1 . $password . $salt2);
	}
}

