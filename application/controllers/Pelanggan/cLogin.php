<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{


	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Pelanggan/vLogin');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = $this->db->query("SELECT * FROM `pelanggan` WHERE username='" . $username . "' AND password='" . $password . "'")->row();
			if ($data) {
				$array = array(
					'id_pelanggan' => $data->id_pelanggan
				);
				$this->session->set_userdata($array);

				redirect('Pelanggan/cKatalog');
			} else {
				$this->session->set_flashdata('error', 'Username dan Password Anda Salah!');
				redirect('Pelanggan/cLogin');
			}
		}
	}
	public function logout()
	{
		$this->cart->destroy();
		$this->session->unset_userdata('id_pelanggan');
		$this->session->set_flashdata('success', 'Anda Berhasil Logout!');
		redirect('Pelanggan/cLogin');
	}
	public function registrasi()
	{
		$this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[12]|max_length[13]');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Pelanggan/vRegistrasi');
		} else {
			$data = array(
				'nama_pelanggan' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'jk' => $this->input->post('jk'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_member' => '3'
			);
			$this->db->insert('pelanggan', $data);
			$this->session->set_flashdata('success', 'Anda Berhasil Melakukan Registrasi, Silahkan Login!');
			redirect('Pelanggan/cLogin');
		}
	}

	public function lupapassword()
	{

		// $phone = '6285731639595'; 
		// $otp = rand(100000, 999999);
		// $token = '991MFCf2EMoyKDwjEyv5';

		// $curl = curl_init();
		// curl_setopt_array($curl, array(
		// 	CURLOPT_URL => 'https://api.fonnte.com/send',
		// 	CURLOPT_RETURNTRANSFER => true,
		// 	CURLOPT_POSTFIELDS => array(
		// 		'target' => $phone,
		// 		'message' => 'Kode OTP Anda adalah: ' . $otp,
		// 	),
		// 	CURLOPT_HTTPHEADER => array(
		// 		"Authorization: $token",
		// 	),
		// ));

		// $response = curl_exec($curl);
		// curl_close($curl);

		// // Simpan $otp ke session/database untuk verifikasi
		// echo $response;

		$this->load->view('Pelanggan/vLupasPassword');
	}

	public function kirimotp()
	{
		$username = $this->input->post('username');
		$no_hp = $this->input->post('no_hp');

		$user = $this->db->query("select * from pelanggan where username = '" . $username . "'")->row();
		// var_dump($user);
		// die();
		if (!$user) return;

		// enerate OTP
		$otp = rand(100000, 999999);

		$this->db->where('username', $username);
		$this->db->update('pelanggan', ['otp' => $otp]);

		$this->session->set_userdata('username', $username);

		$target = $no_hp; // format nomor pake 628....
		$message = "Kode OTP Anda adalah: *$otp* \n JANGAN berikan kode ini ke siapa pun okok.";

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.fonnte.com/send',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => array(
				'target' => $target,
				'message' => $message,
			),
			CURLOPT_HTTPHEADER => array(
				// 'Authorization: 991MFCf2EMoyKDwjEyv5', // Ganti dengan token Anda aku
				'Authorization: DwP5mo7XABTuh4nWeHex', // Ganti dengan token Anda dimas
			),
		));
		$response = curl_exec($curl);
		curl_close($curl);
		// $this->load->view('Pelanggan/vCekOtp');
		redirect('Pelanggan/cLogin/cekotp');
		// echo "OTP berhasil dikirim.";
	}

	public function cekotp()
	{
		$this->form_validation->set_rules('otp', 'Otp', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Pelanggan/vCekOtp');
		} else {
			$otp = $this->input->post('otp');
			$username = $this->session->userdata('username');

			$query = $this->db->query("select * from pelanggan where username='" . $username . "' and otp='" . $otp . "'")->row();

			if ($query) {
				redirect('Pelanggan/cLogin/reset');
			} else {
				$this->session->set_flashdata('error', 'OTP tidak valid');
				// $this->load->view('Pelanggan/vCekOtp');
				redirect('Pelanggan/cLogin/cekotp');
			}
		}
	}

	public function reset()
	{
		$this->form_validation->set_rules('password', 'Password', 'required');
		// $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('konfpassword', 'Password Confirmation', 'trim|required|matches[password]');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Pelanggan/vResetPassword');
		} else {
			$password = $this->input->post('password');
			$username = $this->session->userdata('username');
			$update = $this->db->query("update pelanggan set password='" . $password . "' where username='" . $username . "'");
			if ($update) {
				redirect('Pelanggan/cLogin');
			} else {
				$this->session->set_flashdata('error', 'Password Confirm Tidak Sesuai');
				redirect('Pelanggan/cLogin/reset');
			}
		}
	}
}

/* End of file cLogin.php */
