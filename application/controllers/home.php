<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') != true) {
			$this->session->set_flashdata('penyusup', 'penyusup');
			redirect('auth');
		}
		$this->load->model('M_home');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->M_home->tampilMahasiswa();
		$judul['page_title'] = 'Home';
		$this->load->view('templates/header', $judul);
		$this->load->view('V_home', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id_mhs)
	{
		$data['detail'] = $this->M_home->detailMahasiswa($id_mhs);
		$judul['page_title'] = 'Detail Mahasiswa';
		$this->load->view('templates/header', $judul);
		$this->load->view('V_detail', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id_mhs)
	{
		$this->M_home->hapusmhs($id_mhs);

		$this->session->set_flashdata('message_hapus', '<div class="alert alert-success" role="alert">
                </div>');
		redirect('home');
	}

	public function tambah()
	{
		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'trim|required|is_unique[mahasiswa.nama]',
			array(
				'is_unique' => 'Mahasiswa sudah terdaftar'
			)
		);

		if ($this->form_validation->run() == false) {
			$judul['page_title'] = 'Tambah Data Mahasiswa';
			$this->load->view('templates/header', $judul);
			$this->load->view('V_tambah');
			$this->load->view('templates/footer');
		} else {
			$this->M_home->tambahmhs();

			//pindah ke halaman landingpage
			$this->session->set_flashdata('message_berhasil', '<div class="alert alert-success" role="alert">
                </div>');
			redirect('home');
		}
	}

	public function edit($id_mhs)
	{
		$data['mahasiswa'] = $this->M_home->ambilDataMahasiswa($id_mhs);

		$this->form_validation->set_rules(
			'proker1',
			'proker2',
			'trim|required'
		);

		if ($this->form_validation->run() == false) {
			//load tampilannya
			$judul['page_title'] = 'Perbarui Data Mahasiswa';
			$this->load->view('templates/header', $judul);
			$this->load->view('V_edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->M_home->editmhs();

			$this->session->set_flashdata('message_edit', '<div class="alert alert-success" role="alert">
                </div>');
			redirect('home');
		}
	}
}
