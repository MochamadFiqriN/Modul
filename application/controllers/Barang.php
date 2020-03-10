<?php
/**
 * 
 */
class Barang extends CI_Controller
{
	public $model = NULL;
	
	function __construct()
	{
		parent::__construct();
		//memuat model
		$this->load->model('Barang_model');
		$this->model = $this->Barang_model;
	}

	public function index()
	{
		/* TAMBAH BARANG
		if(isset($_POST['btnSubmit'])){
			$this->model->kode = $_POST['kode'];
			$this->model->nama = $_POST['nama'];
			$this->model->harga = $_POST['harga'];
			$this->model->stock = $_POST['stock'];

			//memanggil metode insert()
			$this->model->insert();

			$this->load->view('barang_respon_add_view',['model'=> $this->model]);
		}else{
			$this->load->view('barang_form_add_view',['model'=> $this->model]);
		}*/

		/* EDIT BARANG
		//menentukan kode yang akan diubah
		$this->model->kode = 'B004';

		//mengisi nilai pengganti
		$this->model->nama = 'Penggaris Plastik';
		$this->model->harga = '5000';
		$this->model->stock = '20';

		//memanggil metode update()
		$this->model->update();
		*/

		/*DELETE BARANG
		//menentukan kode dari baris data yang akan dihapus
		$this->model->kode = 'B004';

		//memanggil metode delete
		$this->model->delete();
		*/

		$query = $this->db->query('SELECT * FROM barang');
		$this->load->view('query_result_view',['query'=>$query]);
	}
}