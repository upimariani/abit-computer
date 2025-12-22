<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('vLogin');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($username == 'admin' && $password == 'admin') {
				$array = array(
					'id' => '1'
				);
				$this->session->set_userdata($array);
				redirect('Admin/cDashboard');
			} else if ($username == 'staff_manajer' && $password == 'staff_manajer') {
				$array = array(
					'id' => '2'
				);
				$this->session->set_userdata($array);
				redirect('Admin/cDashboard');
			} else if ($username == 'manajer' && $password == 'manajer') {
				$array = array(
					'id' => '3'
				);
				$this->session->set_userdata($array);
				redirect('Admin/cDashboard');
			} else {
				$this->session->set_flashdata('error', 'Username dan Password Anda Salah!');
				redirect('cLogin');
			}
		}
	}
	public function logout()
	{

		$this->session->unset_userdata('id');
		$this->session->set_flashdata('success', 'Anda Berhasil Logout!');
		redirect('cLogin');
	}
}

/* End of file cLogin.php */
