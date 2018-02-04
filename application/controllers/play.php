<?php
class Play extends CI_Controller
{
    public function index()
    {
        $db = $this->db->get('user_types');
        print_r($db ->result());
    }
    public function user()
    {
        $db = $this->db->get('users');
        print_r($db ->result());
    }
}