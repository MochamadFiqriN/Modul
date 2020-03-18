<?php
/**
 * 
 */
class Barang extends CI_Controller
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

		/*metode result()
		$query = $this->db->query('SELECT * FROM barang');
		$this->load->view('query_result_view',['query'=>$query]);
		*/

		/*metode result_array()
		$query = $this->db->query('SELECT * FROM barang');
		$this->load->view('query_result_array_view',['query'=>$query]);
		*/

		/*metode row() dan row_array()
		$query = $this->db->query('SELECT * FROM barang');
		$this->load->view('query_row_view',['query'=>$query]);
		*/

		/*metode affected rows()
		$this->model->kode = 'B004';
		$this->model->nama = 'Penggaris Plastik';
		$this->model->harga = '5000';
		$this->model->stock = '20';

		//menambah satu baris data ke dalam tabel barang
		$this->model->insert();
		$n = $this->db->affected_rows();

		$query = $this->db->query('SELECT * FROM barang');
		$this->load->view('affected_rows_view',['query'=> $query, 'n'=> $n]);
		*/

		/*metode last_query()
		echo '<h2>Demo Metode last_query()</h2>';
		
		$query1 = $this->db->query("SELECT * FROM barang");
		$query2	= $this->db->query("SHOW DATABASES");

		$str = $this->db->last_query();
		echo 'Statemen SQL terakhir: ' . $str;
		*/

		/* Metode platform() dan version()
		echo '<h2>Demo Metode platform() dan version()</h2>';
		echo 'Jenis database: ' . $this->db->platform() . '<br/>';
		echo 'Versi: ' . $this->db->version();
		*/

		echo '<h2>Demo Metode insert_string()</h2>';
		$data = [
			'nama' => 'Buku Tulis',
			'harga' => '10000',
			'stock' => '36'];
		$where = "kode = 'B005'";

		$sql = $this->db->update_string('barang', $data, $where);

		echo 'SQL:' . $sql . '<br /><br />';
		//mengeksekusi SQL
		$this->db->query($sql);
		echo $this->db->affected_rows() . ' baris di dalam tabel barang telah diubah.';
	}
}