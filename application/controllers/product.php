<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }

	function index(){
		$produk = $this->admin_model->read();
		$data['produk'] = $produk;
		$this->load->view('product/product_view', $data);
		// $this->load->view('product/product_view');
	}

	function buyNow(){
		$read = $this->admin_model->readDataProduk(
			$this->uri->segment('3'));
		$data['produk'] = $read;
		$this->load->view('product/buyNow', $data);
	}
	
	function readBantal($kat){
		switch ($kat) {
			case 'btls':
				$kategori = 'Bantal Sofa';
				break;
			case 'btll':
				$kategori = 'Bantal Leher';
				break;
			case 'sly':
				$kategori = 'Slayer';
				break;
			case 'buff':
				$kategori = 'Buff';
				break;
			default:
				break;
		}
		$read = $this->admin_model->readDataAdmin('produk', $kategori, 'kategori_produk')->result_array();
		$data['produk'] = $read;
		$this->load->view('product/product_view', $data);
	}

}