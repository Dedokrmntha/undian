<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Hasil extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_hasil');
	}

	public function index()
	{
		$data['hasil'] = $this->M_hasil->get_all_hasil();
		$this->load->view('undian', $data);
	}

	// public function detail($hasil_id)
	// {
	// 	$data['hasil'] = $this->M_hasil->get_hasil_by_id($hasil_id);
	// 	$this->load->view('hasil/detail', $data); // Sesuaikan dengan struktur folder dan file view Anda
	// }

	public function create()
	{
		// Logika untuk menambah data hasil
		if ($_POST) {
			$data = array(
				'id_user' => $this->input->post('id_user'),
				'keterangan' => $this->input->post('keterangan'),

			);

			$this->M_hasil->create_hasil($data);
			redirect('C_hasil');
		}

		// Load view create hasil
		$this->load->view('stop');
	}

	// public function update($hasil_id)
	// {
	// 	// Logika untuk mengupdate data hasil
	// 	if ($_POST) {
	// 		$data = array(
	// 			'id_user' => $this->input->post('id_user'),
	// 			'nama_hasil' => $this->input->post('nama_hasil'),
	// 			// Sesuaikan dengan kolom lainnya
	// 		);

	// 		$this->M_hasil->update_hasil($hasil_id, $data);
	// 		redirect('C_hasil');
	// 	}

	// 	// Load view update hasil
	// 	$data['hasil'] = $this->M_hasil->get_hasil_by_id($hasil_id);
	// 	$this->load->view('hasil/update', $data);
	// }

	// public function delete($hasil_id)
	// {
	// 	// Logika untuk menghapus data hasil
	// 	$this->M_hasil->delete_hasil($hasil_id);
	// 	redirect('C_hasil');
	// }
}

/* End of file Hasil.php and path \application\controllers\Hasil.php */