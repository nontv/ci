<?php
class User extends CI_Controller
{
    public function index()
    {
        $this->load->model('user_model');
        $users = $this->user_model->getUser();
        $data = array(
            'users' => $users
        );
        $this->load->view('layout/header');
        $this->load->view('user/user', $data);
        $this->load->view('layout/footer');
    }
} 