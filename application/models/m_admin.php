<?php

class m_admin extends CI_Model {

    function cek($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        return $this->db->get("db_admin");
    }

    function dataadmin() {
        $siapa = $_SESSION['username'];

        if ($siapa == 'superadmin') {
            $hasil = $this->db->query("SELECT * FROM tbl_user");
            return $hasil;
        } else {
            $hasil = $this->db->query("SELECT * FROM tbl_user WHERE username='$siapa'");
            return $hasil;
        }
    }

    function detailadmin($id) {
        $hasil = $this->db->query("SELECT * FROM tbl_user where username='$id'");
        return $hasil;
    }

    function hapus($id) {
        $hasil = $this->db->query("DELETE from tbl_user where username='$id'");
        return $hasil;
    }

    function upload($data) {
        $this->db->insert('tbl_user', $data);
    }

    function editadmin($id) {
        $hasil = $this->db->query("SELECT * from tbl_user where username='$id'");
        return $hasil;
    }

    function updateadmin($id, $nama) {
        $hasil = $this->db->query("UPDATE tbl_user SET nama='$nama' WHERE username='$id'");
        return $hasil;
    }

    function updateadmin2($id, $nama) {
        $hasil = $this->db->query("UPDATE tbl_user SET nama='$nama' WHERE username='$id'");
        return $hasil;
    }
}
