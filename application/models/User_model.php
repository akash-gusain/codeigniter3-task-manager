<?php
class User_model extends CI_Model {

    public function login($email, $password) {
        return $this->db->where('email', $email)
                        ->where('password', $password)
                        ->get('users')
                        ->row();
    }
    public function register($data) {
    return $this->db->insert('users', $data);
}

public function email_exists($email) {
    return $this->db->where('email', $email)
                    ->get('users')
                    ->row();
}

}
