<?php

class Barang_model extends CI_Model
{
	public $kode;
	public $nama;
	public $harga;
	public $stock;

	public $labels = [];

	function __construct()
	{
		parent::__construct();
		$this->labels = $this->_attributeLabels();

		//memuat librrary database
		$this->load->database();
	}

	//metode untuk menambahkan baris data ke dalam tabel
	public function insert(){
		$sql = sprintf("INSERT INTO  barang VALUES('%s','%s',%f,%d)",
				$this->kode,
				$this->nama,
				$this->harga,
				$this->stock
			);
		$this->db->query($sql);
	}

	//metode untik mengubah baris data di dalam tabel
	public function update()
	{
		$sql = sprintf("UPDATE barang SET nama = '%s', harga = %f, stock= %d". 
						" WHERE kode ='%s'",
					$this->nama,
					$this->harga,
					$this->stock,
					$this->kode
				);
		$this->db->query($sql);
	}

	//metode untik menghapus baris data di dalam tabel
	public function delete()
	{
		$sql = sprintf("DELETE FROM barang ". 
						" WHERE kode ='%s'",
					$this->kode
				);
		$this->db->query($sql);
	}

	private function _attributeLabels(){
		return[
			'kode'=>'Kode:',
			'nama'=>'Nama Produk:',
			'harga'=>'Harga Produk:',
			'stock'=>'Stock:'
		];
	}
}