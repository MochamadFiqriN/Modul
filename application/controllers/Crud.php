<?php
/**
 * 
 */
class Crud extends CI_Controller
{
	public $model = NULL;
	
	public function __construct()
	{
		parent::__construct();
		//memuat model
		$this->load->model('Barang_model');
		$this->model = $this->Barang_model;
		//memuat library database
		$this->load->database();
		//memuat helper URL
		$this->load->helper('url'); //untuk redirect()
	}

	public function index()
	{
		$this->read();
	}

	public function create()
	{
		if (isset($_POST['btnSubmit'])) {
			$this->model->kode = $_POST['kode'];
			$this->model->nama = $_POST['nama'];
			$this->model->harga = $_POST['harga'];
			$this->model->stock = $_POST['stock'];
			$this->model->insert();
			redirect('crud/index');
		} else{
			$this->load->view('crud_create_view', ['model'=>$this->model]);
		}
	}

	public function read()
	{
		$rows = $this->model->read();
		$this->load->view('crud_read_view', ['rows'=>$rows]);
	}

	public function update($id)
	{
		if (isset($_POST['btnSubmit'])) {
			$this->model->kode = $_POST['kode'];
			$this->model->nama = $_POST['nama'];
			$this->model->harga = $_POST['harga'];
			$this->model->stock = $_POST['stock'];
			$this->model->update();
			redirect('crud/index');
		} else {
			$query = $this->db->query("SELECT * FROM barang WHERE kode = '$id'");
			// if ($query->num_rows() == 0) exit(1);
			$row = $query->row();
			$this->model->kode = $row->kode;
			$this->model->nama = $row->nama;
			$this->model->harga = $row->harga;
			$this->model->stock = $row->stock;
			$this->load->view('crud_update_view', ['model' => $this->model]);
		}	
	}

	public function delete($id)
	{
		//menentukan kode yang akan dihapus
		$this->model->kode = $id;
		//menghapus baris data di dalam tabel barang
		$this->model->delete();
		//mengarahkan kembali ke halaman utama
		redirect('crud/index');
	}
}