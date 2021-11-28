<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_barang extends CI_Controller {

	public function __construct() {
        parent::__construct();

		if(empty($this->session->userdata('id'))) {
        	redirect('user/login');
		}
        //memanggil model
        $this->load->model('kategori_barang_model');
    }

	public function index() {
		//mengarahkan ke function read
		$this->read();
	}

	public function read() {
		//memanggil function read pada kategori_barang model
		//function read berfungsi mengambil/read data dari table kategori_barang di database
		$data_kategori_barang = $this->kategori_barang_model->read();

		//mengirim data ke view
		$output = array(
						//memanggil view
						'theme_page' => 'kategori_barang_read',
						'judul' => 'Daftar kategori_barang',

						//data kategori_barang dikirim ke view
						'data_kategori_barang' => $data_kategori_barang
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert() {
		//mengirim data ke view
		$output = array(
						//memanggil view
						'theme_page' => 'kategori_barang_insert',
						'judul' => 'Tambah kategori_barang',
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert_submit() {
		//menangkap data input dari view
		$kategori_barang = $this->input->post('kategori_barang');


		//mengirim data ke model
		$input = array(
						//format : kategori_barang field/kolom table => data input dari view
						'kategori_barang' => $kategori_barang,
						
					);

		//memanggil function insert pada kategori_barang model
		//function insert berfungsi menyimpan/create data ke table kategori_barang di database
		$data_kategori_barang = $this->kategori_barang_model->insert($input);

		//mengembalikan halaman ke function read
		redirect('kategori_barang/read');
	}

	public function update() {
		//menangkap id_kategori data yg dipilih dari view (parameter get)
		$id_kategori = $this->uri->segment(3);

		//function read berfungsi mengambil 1 data dari table kategori_barang sesuai id_kategori yg dipilih
		$data_kategori_barang_single = $this->kategori_barang_model->read_single($id_kategori);

		//mengirim data ke view
		$output = array(
						'theme_page' => 'kategori_barang_update',
						'judul' => 'Ubah kategori_barang',

						//mengirim data kategori_barang yang dipilih ke view
						'data_kategori_barang_single' => $data_kategori_barang_single,
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function update_submit() {
		//menangkap id_kategori data yg dipilih dari view
		$id_kategori = $this->uri->segment(3);

		//menangkap data input dari view
		$kategori_barang = $this->input->post('kategori_barang');


		//mengirim data ke model
		$input = array(
						//format : kategori_barang field/kolom table => data input dari view
						'kategori_barang' => $kategori_barang,

					);

		//memanggil function insert pada kategori_barang model
		//function insert berfungsi menyimpan/create data ke table kategori_barang di database
		$data_kategori_barang = $this->kategori_barang_model->update($input, $id_kategori);

		//mengembalikan halaman ke function read
		redirect('kategori_barang/read');
	}

	public function delete() {
		//menangkap id_kategori data yg dipilih dari view
		$id_kategori = $this->uri->segment(3);

		//memanggil function delete pada kategori_barang model
		$data_kategori_barang = $this->kategori_barang_model->delete($id_kategori);

		//mengembalikan halaman ke function read
		redirect('kategori_barang/read');
	}
}