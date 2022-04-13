<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct() {
        parent::__construct();

		if(empty($this->session->userdata('id'))) {
        	redirect('user/login');
		}
        //memanggil model
        $this->load->model(array('barang_model', 'kategori_barang_model'));
    }

	public function index() {
		//mengarahkan ke function read
		$this->read();
	}

	public function read() {
		//memanggil function read pada barang model
		//function read berfungsi mengambil/read data dari table barang di database
		$data_barang = $this->barang_model->read();

		//mengirim data ke view
		$output = array(
						'theme_page' => 'barang_read',
						'judul' => 'Daftar Barang',

						//data barang dikirim ke view
						'data_barang' => $data_barang
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function upload() {
    	$id = $this->uri->segment(3);
		
		$data_barang_single = $this->barang_model->read_single($id);

		$data_kategori_barang = $this->kategori_barang_model->read();

		$output = array(
						'theme_page' => 'barang_upload',
						'judul' => 'Upload barang',

						'data_barang_single' => $data_barang_single,

						'data_kategori_barang' => $data_kategori_barang,
					);

		$this->load->view('theme/index', $output);
	}
	public function upload_submit() {

		$config['upload_path']          = './upload_folder/';
		$config['allowed_types']        = 'gif|jpg|png';
	    $config['max_size']             = 10000;
	    $config['encrypt_name']         = TRUE;
	    $this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('cover')) {

			$id = $this->uri->segment(3);

			$data_barang_single = $this->barang_model->read_single($id);

			$response = $this->upload->display_errors();

			$output = array(
							'judul' => 'Upload File',
							'response' => $response,

							'data_barang_single' => $data_barang_single,

						);
			$this->load->view('barang_upload', $output);

		} else {
			

			$id = $this->uri->segment(3);

			$upload_data = $this->upload->data();
			$file_name = $upload_data['file_name'];

			$input = array(
							'cover' => $file_name,
						);
			$data_barang = $this->barang_model->update($input, $id);
			
			redirect('barang/read');	        }
	}




	public function dashboard() {
		//memanggil function read pada barang model
		//function read berfungsi mengambil/read data dari table barang di database
		$data_barang2 = $this->barang_model->read_export_rekap();
		$data_barang = $this->barang_model->read();

		//mengirim data ke view
		$output = array(
						'theme_page' => 'barang_dashboard',
						'judul' => 'Daftar Barang',

						//data barang dikirim ke view
						'data_barang' => $data_barang,
						'data_barang2' => $data_barang2
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert() {
		//mengambil daftar kategori_barang dari table kategori_barang
		$data_kategori_barang = $this->kategori_barang_model->read();

		//mengirim data ke view
		$output = array(
						'theme_page' => 'barang_insert',
						'judul' => 'Tambah Barang',

						//mengirim daftar kategori_barang ke view
						'data_kategori_barang' => $data_kategori_barang,
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}


	public function insert_submit() {
		//menangkap data input dari view
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$stok = $this->input->post('stok');
		$kategori_barang_id = $this->input->post('kategori_barang_id');

		//mengirim data ke model
		$input = array(
						//format : nama_barang field/kolom table => data input dari view
						
						'nama_barang' => $nama_barang,
						'stok' => $stok,
						'kategori_barang_id' => $kategori_barang_id,
					);

		//memanggil function insert pada barang model
		//function insert berfungsi menyimpan/create data ke table barang di database
		$data_barang = $this->barang_model->insert($input);

		//mengembalikan halaman ke function read
		redirect('barang/read');
	}

	public function update() {
		//menangkap id_barang data yg dipilih dari view (parameter get)
		$id_barang = $this->uri->segment(3);
		
		//function read berfungsi mengambil 1 data dari table barang sesuai id_barang yg dipilih
		$data_barang_single = $this->barang_model->read_single($id_barang);

		//mengambil daftar kategori_barang dari table kategori_barang
		$data_kategori_barang = $this->kategori_barang_model->read();

		//mengirim data ke view
		$output = array(
						'theme_page' => 'barang_update',
						'judul' => 'Ubah Barang',

						//mengirim data barang yang dipilih ke view
						'data_barang_single' => $data_barang_single,

						//mengirim daftar kategori_barang ke view
						'data_kategori_barang' => $data_kategori_barang,
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function update_submit() {
		//menangkap id_barang data yg dipilih dari view
		$id_barang = $this->uri->segment(3);

		//menangkap data input dari view
		$nama_barang = $this->input->post('nama_barang');
		$stok = $this->input->post('stok');
		$kategori_barang_id = $this->input->post('kategori_barang_id');

		//mengirim data ke model
		$input = array(
						//format : nama_barang field/kolom table => data input dari view
						
						'nama_barang' => $nama_barang,
						'stok' => $stok,
						'kategori_barang_id' => $kategori_barang_id,
					);

		//memanggil function update pada barang model
		//function update berfungsi merubah data ke table barang di database
		$data_barang = $this->barang_model->update($input, $id_barang);

		//mengembalikan halaman ke function read
		redirect('barang/read');
	}

	public function delete() {
		//menangkap id_barang data yg dipilih dari view
		$id_barang = $this->uri->segment(3);

		//memanggil function delete pada barang model
		$data_barang = $this->barang_model->delete($id_barang);

		//mengembalikan halaman ke function read
		redirect('barang/read');
	}


	public function export_rekap1() {
		//memanggil function read pada barang_masuk model
		//function read berfungsi mengambil/read data dari table barang_masuk di database
		$data_barang2 = $this->barang_model->read_export_rekap();
	
		//mengirim data ke view
		$output = array(
						//memanggil view
						'judul' => 'Barang Rekap',

						//data barang dikirim ke view
						'data_barang2' => $data_barang2
					);

		//memanggil file view
		$this->load->view('barang_export_rekap1', $output);
	}

	public function export_rekap2() {
		//memanggil function read pada barang_masuk model
		//function read berfungsi mengambil/read data dari table barang_masuk di database
		$data_barang2 = $this->barang_model->read_export_rekap();
	
		//mengirim data ke view
		$output = array(
						//memanggil view
						'judul' => 'Barang Rekap',

						//data barang dikirim ke view
						'data_barang2' => $data_barang2
					);

		//memanggil file view
		$this->load->view('barang_export_rekap2', $output);
	}

	public function export_detail() {
		//memanggil function read pada barang_masuk model
		//function read berfungsi mengambil/read data dari table barang_masuk di database
		$data_barang = $this->barang_model->read();
	
		//mengirim data ke view
		$output = array(
						//memanggil view
						'judul' => 'Barang Detail',

						//data barang dikirim ke view
						'data_barang' => $data_barang
					);

		//memanggil file view
		$this->load->view('barang_export_detail', $output);
	}


}

