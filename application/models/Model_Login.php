<?php
class Model_Login extends CI_Model{

    function cekadmin($username,$password){
        $hasil=$this->db->query("SELECT * FROM tbl_user where username='$username' AND password='$password'");
        return $hasil;

        }
    }
