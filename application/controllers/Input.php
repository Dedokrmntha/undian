<?php

class Input extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->model('m_data');
    }

    public function index() {
        $this->load->view('admin/inputdata', array('error' => ' '));
    }

    public function input_data() {
        $id = $this->input->post('id');
		$nomor = $this->input->post('nomor');
        $nama = $this->input->post('nama');
        $unit = $this->input->post('unit');

        $data = array(
            'id' => $id,
			'nomor'=> $nomor,
            'nama' => $nama,
            'unit'=>$unit,
        );

        // Simpan data
        $this->m_data->inputdata($data);

        $this->session->set_flashdata('sukses', 'Anda berhasil menginput data');
        redirect('admin/index');
    }

    public function hapus($id) {
        $this->m_data->hapus($id);
        $this->session->set_flashdata('sukses', 'Anda berhasil menghapus data');
        redirect('admin/index');
    }

    public function edit($id) {
        $x['data'] = $this->m_data->edit($id);
        $this->load->view('admin/editdata', $x);
    }

    public function update() {
        $id = $this->input->post('id');
		$nomor = $this->input->post('nomor');
        $nama = $this->input->post('nama');
        $unit = $this->input->post('unit');
        
        $this->m_data->update($id,$nomor, $nama, $unit);

        $this->session->set_flashdata('sukses', 'Anda berhasil mengupdate data');
        redirect('admin/index');
    }

    function showdata() {
        $x['data'] = $this->m_data->data();
        $this->load->view('showdata', $x);
    }

    function stop() {
        $x['data'] = $this->m_data->data();
        $this->load->view('stop', $x);
    }

	public function input_hadiah() {
		$id = $this->input->post('id');
		$nomor = $this->input->post('nomor');
		$nama = $this->input->post('nama');
	
	
		// Mengambil data dari tabel di database lain
		$other_data = $other_db->get('db_user')->row();
	
		// Menambahkan keterangan pada data
		$keterangan = 'Data ini berasal dari tabel lain.';
	
		// Menggabungkan data dari kedua database beserta keterangan
		$data = array(
			'id' => $id,
			'nomor' => $nomor,
			'nama' => $nama,
			'keterangan' => $keterangan,
			
		);
	
		// Menyimpan data ke tabel di database default
		$this->db->insert('db_hasil', $data);
	
		$this->session->set_flashdata('sukses', 'Anda berhasil menginput data');
		redirect('admin/index');
	}
	
	
}
