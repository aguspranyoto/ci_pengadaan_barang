<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_keluar extends CI_Controller {

	public function __construct() {
        parent::__construct();

		if(empty($this->session->userdata('id'))) {
        	redirect('user/login');
		}
        //memanggil model
        $this->load->model(array('barang_keluar_model', 'user_model', 'barang_model'));
    }

	public function index() {
		//mengarahkan ke function read
		$this->read();
	}

	public function read() {
		//memanggil function read pada barang_keluar model
		//function read berfungsi mengambil/read data dari table barang_keluar di database
		$data_barang_keluar = $this->barang_keluar_model->read();

		//mengirim data ke view
		$output = array(
						'theme_page' => 'barang_keluar_read',
						'judul' => 'Daftar Barang Keluar',

						//data barang_keluar dikirim ke view
						'data_barang_keluar' => $data_barang_keluar
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
						'theme_page' => 'barang_keluar_insert',
						'judul' => 'Tambah Barang Keluar',

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
		$id_barang_keluar = $this->input->post('id_barang_keluar');
		$jumlah_keluar = $this->input->post('jumlah_keluar');
		$tanggal_keluar = $this->input->post('tanggal_keluar');
		$user_id = $this->input->post('user_id');
		$barang_id = $this->input->post('barang_id');

		//mengirim data ke model
		$input = array(
						//format : barang_id field/kolom table => data input dari view
						
						'jumlah_keluar' => $jumlah_keluar,
						'tanggal_keluar' => $tanggal_keluar,
						'user_id' => $user_id,
						'barang_id' => $barang_id,
					);

		//memanggil function insert pada barang_keluar model
		//function insert berfungsi menyimpan/create data ke table barang_keluar di database
		$data_barang_keluar = $this->barang_keluar_model->insert($input);

		//mengembalikan halaman ke function read
		redirect('barang_keluar/read');
	}

	public function update() {
		//menangkap id data yg dipilih dari view (parameter get)
		$id_barang_keluar = $this->uri->segment(3);
		
		//function read berfungsi mengambil 1 data dari table barang_keluar sesuai id yg dipilih
		$data_barang_keluar_single = $this->barang_keluar_model->read_single($id_barang_keluar);

		//mengambil daftar peminjaman dari table peminjaman
		$data_user = $this->user_model->read();
		$data_barang = $this->barang_model->read();

		//mengirim data ke view
		$output = array(
						'theme_page' => 'barang_keluar_update',
						'judul' => 'Ubah Barang Keluar',

						//mengirim data barang_keluar yang dipilih ke view
						'data_barang_keluar_single' => $data_barang_keluar_single,

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
		$id_barang_keluar = $this->uri->segment(3);
		$jumlah_keluar = $this->input->post('jumlah_keluar');
		$tanggal_keluar = $this->input->post('tanggal_keluar');
		//menangkap data input dari view
		$user_id = $this->input->post('user_id');
		$barang_id = $this->input->post('barang_id');

		//mengirim data ke model
		$input = array(
						//format : barang_id field/kolom table => data input dari view
						'jumlah_keluar' => $jumlah_keluar,
						'tanggal_keluar' => $tanggal_keluar,
						'user_id' => $user_id,
						'barang_id' => $barang_id,
					);

		//memanggil function update pada barang_keluar model
		//function update berfungsi merubah data ke table barang_keluar di database
		$data_barang_keluar = $this->barang_keluar_model->update($input, $id_barang_keluar);

		//mengembalikan halaman ke function read
		redirect('barang_keluar/read');
	}

	public function delete() {
		//menangkap id data yg dipilih dari view
		$id_barang_keluar = $this->uri->segment(3);

		//memanggil function delete pada barang_keluar model
		$data_barang_keluar = $this->barang_keluar_model->delete($id_barang_keluar);

		//mengembalikan halaman ke function read
		redirect('barang_keluar/read');
	}


	public function read_export() {
		//memanggil function read pada barang_keluar model
		//function read berfungsi mengambil/read data dari table barang_keluar di database
		$data_barang_keluar = $this->barang_keluar_model->read();
	
		//mengirim data ke view
		$output = array(
						//memanggil view
						'judul' => 'Daftar Barang Keluar',

						//data barang_keluar dikirim ke view
						'data_barang_keluar' => $data_barang_keluar
					);

		//memanggil file view
		$this->load->view('barang_keluar_read', $output);
	}

	public function data_export() {
		//memanggil function read pada barang_keluar model
		//function read berfungsi mengambil/read data dari table barang_keluar di database
		$data_barang_keluar = $this->barang_keluar_model->read();
	
		//mengirim data ke view
		$output = array(
						//memanggil view
						'judul' => 'Daftar Barang Keluar',

						//data barang_keluar dikirim ke view
						'data_barang_keluar' => $data_barang_keluar
					);

		//memanggil file view
		$this->load->view('barang_keluar_data_export', $output);
	}

}