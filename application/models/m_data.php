<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_data extends CI_Model {

    function data() {
        $hasil = $this->db->query("SELECT * FROM db_user order by RAND() limit 1");
        return $hasil;
    }

    function data1() {
        $hasil = $this->db->query("SELECT * FROM db_user ");
        return $hasil;
    }
    function datapemenang() {
        $hasil = $this->db->query("SELECT * FROM db_hasil ");
        return $hasil;
    }
    function hapuspm($id) {
        $hasil = $this->db->query("DELETE from db_hasil where id='$id'");
        return $hasil;
    }

    function inputdata($data) {
        $this->db->insert('db_user', $data);
    }

    function hapus($id) {
        $hasil = $this->db->query("DELETE from db_user where id='$id'");
        return $hasil;
    }

    function edit($id) {
        $hasil = $this->db->query("SELECT * from db_user where id='$id'");
        return $hasil;
    }

    function update($id, $nomor, $nama, $unit) {
      $hasil = $this->db->query("UPDATE db_user SET nama='$nama', nomor='$nomor' , unit='$unit' WHERE id='$id'");
      return $hasil;
  }
  
  function update2($id, $nomor, $nama,$unit) {
      $hasil = $this->db->query("UPDATE db_user SET nama='$nama', nomor='$nomor' , unit='$unit' WHERE id='$id'");
      return $hasil;
  }
}
