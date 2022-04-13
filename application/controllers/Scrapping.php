<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scrapping extends CI_Controller {

	public function __construct() {
        parent::__construct();

		if(empty($this->session->userdata('id'))) {
        	redirect('user/login');
		}
        //memanggil model
        
    }

	public function index() {
		//mengarahkan ke function read
		$this->read();
	}

	public function read() {
		//memanggil function read pada barang model
		//function read berfungsi mengambil/read data dari table barang di database
		

		//mengirim data ke view
		$output = array(
						'theme_page' => 'scrapping_read',
						'judul' => 'Scrapping',


					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}



}

