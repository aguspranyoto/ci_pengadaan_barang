<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_masuk_model extends CI_Model {

	//function read berfungsi mengambil/read data dari table barang_masuk di database
	public function read($user_id='',$barang_id='') {

		//sql read user
        $this->db->select('barang_masuk.*');
        $this->db->select('user.username AS username_masuk');
        $this->db->select('barang.nama_barang AS nama_barang_masuk');

        $this->db->from('barang_masuk');
        $this->db->join('user', 'barang_masuk.user_id = user.id');
        $this->db->join('barang', 'barang_masuk.barang_id = barang.id_barang');




        //filter data sesuai id yang dikirim dari controller
		if($user_id != '') {
			$this->db->where('barang_masuk.user_id', $user_id);
		}

		if($barang_id != '') {
			$this->db->where('barang_masuk.barang_id', $barang_id);
		}

        $this->db->order_by('barang_masuk.user_id ASC, barang_masuk.id_barang_masuk ASC');
        $this->db->order_by('barang_masuk.barang_id ASC, barang_masuk.id_barang_masuk ASC');

		$query = $this->db->get();

		//$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
	}

	//function read berfungsi mengambil/read data dari table barang_masuk di database
	public function read_single($id_barang_masuk) {

		//sql read
		$this->db->select('*');
		$this->db->from('barang_masuk');

		//$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('id_barang_masuk', $id_barang_masuk);

		$query = $this->db->get();

		//query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
	}

	//function insert berfungsi menyimpan/create data ke table barang_masuk di database
	public function insert($input) {
		//$input = data yang dikirim dari controller
		return $this->db->insert('barang_masuk', $input);
	}

	//function update berfungsi merubah data ke table barang_masuk di database
	public function update($input, $id_barang_masuk) {
		//$id_barang_masuk = id_barang_masuk data yang dikirim dari controller (sebagai filter data yang diubah)
		//filter data sesuai id_barang_masuk yang dikirim dari controller
		$this->db->where('id_barang_masuk', $id_barang_masuk);

		//$input = data yang dikirim dari controller
		return $this->db->update('barang_masuk', $input);
	}

	//function delete berfungsi menghapus data dari table barang_masuk di database
	public function delete($id_barang_masuk) {
		//$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
		$this->db->where('id_barang_masuk', $id_barang_masuk);
		return $this->db->delete('barang_masuk');
	}
}