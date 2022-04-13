<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	public function __construct() {
        parent::__construct();

		if(empty($this->session->userdata('id'))) {
        	redirect('user/login');
		}

        //memanggil model
        $this->load->model(array('barang_model'));
    }

    public function index() {
		$this->pie();
	}

	public function pie() {
		//memanggil function read pada barang model
		//function read berfungsi mengambil/read data dari table barang di database
		$data_barang = $this->barang_model->read_export_rekap();
		$data_barang_masuk2 = $this->barang_masuk_model->read_export_rekap();
		$data_barang_keluar = $this->barang_keluar_model->read_export_rekap();
		
		//mengirim data ke view
		$output = array(
					'theme_page' => 'chart_pie',
					'judul' => 'Pie Chart',
					'data_barang2' => $data_barang
					'data_barang_keluar' => $data_barang_keluar
					'data_barang_masuk2' => $data_barang_masuk2
				);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function column() {
		//memanggil function read pada barang model
		//function read berfungsi mengambil/read data dari table barang di database
		$data_barang = $this->barang_model->read();

		//mengirim data ke view
		$output = array(
					'theme_page' => 'chart_column',
					'judul' => 'Column Chart',
					'data_barang' => $data_barang
				);

		//memanggil file view
		$this->load->view('theme/index', $output);


	}

    public function line() {
		//memanggil function read pada barang model
		//function read berfungsi mengambil/read data dari table barang di database
		$data_barang = $this->barang_model->read();

		//mengirim data ke view
		$output = array(
					'theme_page' => 'chart_line',
					'judul' => 'line Chart',
					'data_barang' => $data_barang
				);

		//memanggil file view
		$this->load->view('theme/index', $output);


	}

}