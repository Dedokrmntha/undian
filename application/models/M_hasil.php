<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_hasil extends CI_Model
{
	public function get_all_hasil()
	{
		$this->db->select('db_hasil.*, db_user.*');
		$this->db->from('db_hasil');
		$this->db->join('db_user', 'db_hasil.id_user = db_user.id', 'left');
		$this->db->order_by('db_hasil.id', 'desc');
		return $this->db->get();
	}

	// public function get_hasil_by_id($hasil_id)
	// {
	// 	$this->db->select('db_hasil.*, db_user.nama as nama_user');
	// 	$this->db->from('db_hasil');
	// 	$this->db->join('db_user', 'db_hasil.id_user = db_user.id', 'left');
	// 	$this->db->where('db_hasil.id', $hasil_id);
	// 	return $this->db->get()->row();
	// }

	public function create_hasil($data)
	{
		return $this->db->insert('db_hasil', $data);
	}

	// public function update_hasil($hasil_id, $data)
	// {
	// 	$this->db->where('id', $hasil_id);
	// 	return $this->db->update('tb_hasil', $data);
	// }

	// public function delete_hasil($hasil_id)
	// {
	// 	$this->db->where('id', $hasil_id);
	// 	return $this->db->delete('tb_hasil');
	// }
}


/* End of file M_hasil_model.php and path \application\models\M_hasil_model.php */