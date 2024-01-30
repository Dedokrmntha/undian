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

        $data = array(
            'id' => $id,
			'nomor'=> $nomor,
            'nama' => $nama,
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

        $this->m_data->update($id,$nomor, $nama);

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
        $other_data = $other_db->get('other_table')->row(); // Replace 'other_table' with the table name from the other database

    // Combine data from both databases
    $data = array(
        'id' => $id,
        'nomor' => $nomor,
        'nama' => $nama,
        'other_field' => $other_data->field_name, // Replace 'field_name' with the actual field name from the other database
    );

    // Save data to the default database
    $this->db->insert('default_table', $data); // Replace 'default_table' with the table name in the default database

    $this->session->set_flashdata('sukses', 'Anda berhasil menginput data');
    redirect('admin/index');
    }
	
}
