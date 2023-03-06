<?php
class M_auth extends CI_Model
{
    public function login($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('tbl_user')->row_array();
    }

    public function created($data)
    {
        $this->db->insert('tbl_user', $data);
    }
}
