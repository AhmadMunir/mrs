<?php
  class Register extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('m_register');
    }

    public function index()
    {
      $this->load->view('register');
    }
    public function add()
    {
        $register = array(
            'nama_user' => $this->input->post("nama"),
            'email'		=> $this->input->post("email"),
            'username'	=> $this->input->post("username"),
            'password'	=> $this->input->post("password"),
			'no_telp'	=> $this->input->post("no_telp"));
        $this->m_register->save($register);
        redirect(base_url("register"));
    }

    public function setCode()
    {
        $data = $this->m_register->kode();
        echo json_encode($data);
    }
  }
 ?>