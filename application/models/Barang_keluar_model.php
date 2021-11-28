<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_keluar_model extends CI_Model {

	//function read berfungsi mengambil/read data dari table barang_keluar di database
	public function read($user_id='',$barang_id='') {

		//sql read user
        $this->db->select('barang_keluar.*');
        $this->db->select('user.username AS username_keluar');
        $this->db->select('barang.nama_barang AS nama_barang_keluar');

        $this->db->from('barang_keluar');
        $this->db->join('user', 'barang_keluar.user_id = user.id');
        $this->db->join('barang', 'barang_keluar.barang_id = barang.id_barang');




        //filter data sesuai id yang dikirim dari controller
		if($user_id != '') {
			$this->db->where('barang_keluar.user_id', $user_id);
		}

		if($barang_id != '') {
			$this->db->where('barang_keluar.barang_id', $barang_id);
		}

        $this->db->order_by('barang_keluar.user_id ASC, barang_keluar.id_barang_keluar ASC');
        $this->db->order_by('barang_keluar.barang_id ASC, barang_keluar.id_barang_keluar ASC');

		$query = $this->db->get();

		//$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
	}

	//function read berfungsi mengambil/read data dari table barang_keluar di database
	public function read_single($id_barang_keluar) {

		//sql read
		$this->db->select('*');
		$this->db->from('barang_keluar');

		//$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('id_barang_keluar', $id_barang_keluar);

		$query = $this->db->get();

		//query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
	}

	//function insert berfungsi menyimpan/create data ke table barang_keluar di database
	public function insert($input) {
		//$input = data yang dikirim dari controller
		return $this->db->insert('barang_keluar', $input);
	}

	//function update berfungsi merubah data ke table barang_keluar di database
	public function update($input, $id_barang_keluar) {
		//$id_barang_keluar = id_barang_keluar data yang dikirim dari controller (sebagai filter data yang diubah)
		//filter data sesuai id_barang_keluar yang dikirim dari controller
		$this->db->where('id_barang_keluar', $id_barang_keluar);

		//$input = data yang dikirim dari controller
		return $this->db->update('barang_keluar', $input);
	}

	//function delete berfungsi menghapus data dari table barang_keluar di database
	public function delete($id_barang_keluar) {
		//$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
		$this->db->where('id_barang_keluar', $id_barang_keluar);
		return $this->db->delete('barang_keluar');
	}
}