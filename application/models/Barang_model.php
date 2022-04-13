<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	//function read berfungsi mengambil/read data dari table barang di database
	public function read($kategori_barang_id='') {

		//sql read
        $this->db->select('barang.*');
        $this->db->select('kategori_barang.kategori_barang AS kategori_barang_kategori_barang');
        $this->db->from('barang');
        $this->db->join('kategori_barang', 'barang.kategori_barang_id = kategori_barang.id_kategori');

        //filter data sesuai id_barang yang dikirim dari controller
		if($kategori_barang_id != '') {
			$this->db->where('barang.kategori_barang_id', $kategori_barang_id);
		}

        $this->db->order_by('barang.kategori_barang_id ASC, barang.kategori_barang_id ASC');

		$query = $this->db->get();

		//$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
	}

	//function read berfungsi mengambil/read data dari table barang di database
	public function read_single($id_barang) {

		//sql read
		$this->db->select('*');
		$this->db->from('barang');

		//$id_barang = id_barang data yang dikirim dari controller (sebagai filter data yang dipilih)
		//filter data sesuai id_barang yang dikirim dari controller
		$this->db->where('id_barang', $id_barang);

		$query = $this->db->get();

		//query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
	}


	//function insert berfungsi menyimpan/create data ke table barang di database
	public function insert($input) {
		//$input = data yang dikirim dari controller
		return $this->db->insert('barang', $input);
	}

	//function update berfungsi merubah data ke table barang di database
	public function update($input, $id_barang) {
		//$id_barang = id_barang data yang dikirim dari controller (sebagai filter data yang diubah)
		//filter data sesuai id_barang yang dikirim dari controller
		$this->db->where('id_barang', $id_barang);

		//$input = data yang dikirim dari controller
		return $this->db->update('barang', $input);
	}

	//function delete berfungsi menghapus data dari table barang di database
	public function delete($id_barang) {
		//$id_barang = id_barang data yang dikirim dari controller (sebagai filter data yang dihapus)
		$this->db->where('id_barang', $id_barang);
		return $this->db->delete('barang');
	}

	public function read_export_rekap($id = '')
    {
        //sql read
		$this->db->select('COUNT(barang.nama_barang) AS total_barang');
        $this->db->select('barang.stok AS stok');
        $this->db->select('kategori_barang.kategori_barang AS kategori_barang_kategori_barang');
        $this->db->from('barang');
        $this->db->join('kategori_barang', 'barang.kategori_barang_id = kategori_barang.id_kategori');
        $this->db->group_by('kategori_barang.kategori_barang');



        //filter data sesuai id yang dikirim dari controller
        if ($id != '') {
            $this->db->where('barang.id_barang', $id);
        }

        $this->db->order_by('barang.id_barang ASC');

        $query = $this->db->get();

        //$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
    }

	public function chart_pie_rekap($id = '')
    {
        //sql read
		$this->db->select('COUNT(barang.nama_barang) AS total_barang');
        $this->db->select('barang.stok AS stok');
        $this->db->select('kategori_barang.kategori_barang AS kategori_barang_kategori_barang');
        $this->db->from('barang');
        $this->db->join('kategori_barang', 'barang.kategori_barang_id = kategori_barang.id_kategori');
        $this->db->group_by('kategori_barang.kategori_barang');



        //filter data sesuai id yang dikirim dari controller
        if ($id != '') {
            $this->db->where('barang.id_barang', $id);
        }

        $this->db->order_by('barang.id_barang ASC');

        $query = $this->db->get();

        //$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
    }



}