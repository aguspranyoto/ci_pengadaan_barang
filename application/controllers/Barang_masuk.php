<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_masuk extends CI_Controller {

	public function __construct() {
        parent::__construct();

		if(empty($this->session->userdata('id'))) {
        	redirect('user/login');
		}
        //memanggil model
        $this->load->model(array('barang_masuk_model', 'user_model', 'barang_model'));
    }

	public function index() {
		//mengarahkan ke function read
		$this->read();
	}

	public function read() {
		//memanggil function read pada barang_masuk model
		//function read berfungsi mengambil/read data dari table barang_masuk di database
		$data_barang_masuk = $this->barang_masuk_model->read();

		//mengirim data ke view
		$output = array(
						'theme_page' => 'barang_masuk_read',
						'judul' => 'Daftar Barang Masuk',

						//data barang_masuk dikirim ke view
						'data_barang_masuk' => $data_barang_masuk
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert() {
		//mengambil daftar peminjaman dari table peminjaman
		$data_user = $this->user_model->read();
		$data_barang = $this->barang_model->read();


		//mengirim data ke view
		$output = array(
						'theme_page' => 'barang_masuk_insert',
						'judul' => 'Tambah Barang Masuk',

						//mengirim daftar peminjaman ke view
						'data_user' => $data_user,
						//mengirim daftar peminjaman ke view
						'data_barang' => $data_barang,
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert_submit() {
		//menangkap data input dari view
		$id_barang_masuk = $this->input->post('id_barang_masuk');
		$jumlah_masuk = $this->input->post('jumlah_masuk');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$user_id = $this->input->post('user_id');
		$barang_id = $this->input->post('barang_id');

		//mengirim data ke model
		$input = array(
						//format : barang_id field/kolom table => data input dari view
						
						'jumlah_masuk' => $jumlah_masuk,
						'tanggal_masuk' => $tanggal_masuk,
						'user_id' => $user_id,
						'barang_id' => $barang_id,
					);

		//memanggil function insert pada barang_masuk model
		//function insert berfungsi menyimpan/create data ke table barang_masuk di database
		$data_barang_masuk = $this->barang_masuk_model->insert($input);

		//mengembalikan halaman ke function read
		redirect('barang_masuk/read');
	}

	public function update() {
		//menangkap id data yg dipilih dari view (parameter get)
		$id_barang_masuk = $this->uri->segment(3);
		
		//function read berfungsi mengambil 1 data dari table barang_masuk sesuai id yg dipilih
		$data_barang_masuk_single = $this->barang_masuk_model->read_single($id_barang_masuk);

		//mengambil daftar peminjaman dari table peminjaman
		$data_user = $this->user_model->read();
		$data_barang = $this->barang_model->read();

		//mengirim data ke view
		$output = array(
						'theme_page' => 'barang_masuk_update',
						'judul' => 'Ubah Barang Masuk',

						//mengirim data barang_masuk yang dipilih ke view
						'data_barang_masuk_single' => $data_barang_masuk_single,

						//mengirim daftar peminjaman ke view
						'data_user' => $data_user,
						//mengirim daftar buku ke view
						'data_barang' => $data_barang,
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function update_submit() {
		//menangkap id data yg dipilih dari view
		$id_barang_masuk = $this->uri->segment(3);
		$jumlah_masuk = $this->input->post('jumlah_masuk');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		//menangkap data input dari view
		$user_id = $this->input->post('user_id');
		$barang_id = $this->input->post('barang_id');

		//mengirim data ke model
		$input = array(
						//format : barang_id field/kolom table => data input dari view
						'jumlah_masuk' => $jumlah_masuk,
						'tanggal_masuk' => $tanggal_masuk,
						'user_id' => $user_id,
						'barang_id' => $barang_id,
					);

		//memanggil function update pada barang_masuk model
		//function update berfungsi merubah data ke table barang_masuk di database
		$data_barang_masuk = $this->barang_masuk_model->update($input, $id_barang_masuk);

		//mengembalikan halaman ke function read
		redirect('barang_masuk/read');
	}

	public function delete() {
		//menangkap id data yg dipilih dari view
		$id_barang_masuk = $this->uri->segment(3);

		//memanggil function delete pada barang_masuk model
		$data_barang_masuk = $this->barang_masuk_model->delete($id_barang_masuk);

		//mengembalikan halaman ke function read
		redirect('barang_masuk/read');
	}


	public function read_export() {
		//memanggil function read pada barang_masuk model
		//function read berfungsi mengambil/read data dari table barang_masuk di database
		$data_barang_masuk = $this->barang_masuk_model->read();
	
		//mengirim data ke view
		$output = array(
						//memanggil view
						'judul' => 'Daftar Barang Masuk',

						//data barang_masuk dikirim ke view
						'data_barang_masuk' => $data_barang_masuk
					);

		//memanggil file view
		$this->load->view('barang_masuk_read', $output);
	}

	public function data_export() {
		//memanggil function read pada barang_masuk model
		//function read berfungsi mengambil/read data dari table barang_masuk di database
		$data_barang_masuk = $this->barang_masuk_model->read();
	
		//mengirim data ke view
		$output = array(
						//memanggil view
						'judul' => 'Daftar barang_masuk',

						//data barang_masuk dikirim ke view
						'data_barang_masuk' => $data_barang_masuk
					);

		//memanggil file view
		$this->load->view('barang_masuk_data_export', $output);
	}

}