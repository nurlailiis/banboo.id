<?php 

class admin_model extends CI_Model
{
	function getData() {
		$query = $this->db->get('admin');
		return $query->result_array();
	}

	function getDataProduk($where="") {
		$query = $this->db->query('select * from produk ' .$where);
		return $query->result_array();
	}

	function readDataAdmin($table, $where, $id){
		return $this->db->get_where($table, array($id => $where));
		
	}

	function readDataProduk($where){
		$query = $this->db->query('select * from produk where id_produk =' .$where);
		return $query->result_array();
	}

	function read(){
		$query = $this->db->get('produk');
		return $query->result_array();
	}
	
	function insertData($table, $data){
		return $this->db->insert($table, $data);
	}

	function login($password){
		$key = $this->config->item('encryption_key');
	    $salt1 = hash('sha512', $key . $password);
	    $salt2 = hash('sha512', $password . $key);
	    return hash('sha512', $salt1 . $password . $salt2);
	}

	function updateData($table, $data, $where){
		$res=$this->db->update($table, $data, $where);
		return $res;
	}

	// function deleteData($table, $where){
	// 	$res=$this->db->update($table, $where);
	// 	return $res;
	// }

	function deleteData($item){  
		$this->db->where_in('id_produk', $item);  
		$res = $this->db->delete('produk'); 
		return $res;
	}

}
 ?>