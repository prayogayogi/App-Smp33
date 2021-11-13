<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FrontDetailController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['AssetSekolahModel', 'FrontModel', 'DataUserSekolahModel']);
	}

	// Get View Detail Data Informasi
	public function getDetaiInformasi($slug)
	{
		$data['title'] = "Detail Informasi";
		$data['start'] = $this->uri->segment(3);
		$data['getDetailInformasi'] = $this->AssetSekolahModel->getDetailInformasi($slug)->row_array();
		$data['getInformasi'] = $this->AssetSekolahModel->getNewInformasi()->result_array();
		$data['getNewFooterInformasi'] = $this->AssetSekolahModel->getNewFooterInformasi()->result_array();
		$data['fotoOunerPost'] = $this->FrontModel->fotoOunerPost($slug)->row_array();
		$data['getSosialMedia'] = $this->FrontModel->getSosialMedia();

		$this->load->view('includes/Front/header', $data);
		$this->load->view('pages/Front/Front-detail/informasiDetail', $data);
		$this->load->view('includes/Front/footer', $data);
	}

	// Get View Detail Data Guru
	public function getDetailGuru($slug)
	{
		$data['title'] = "Detail Guru";
		$data['start'] = $this->uri->segment(3);
		$data['getNewFooterInformasi'] = $this->AssetSekolahModel->getNewFooterInformasi()->result_array();
		$data['getDetailGuru'] = $this->DataUserSekolahModel->getDetailGuru($slug)->row_array();
		$data['getSosialMedia'] = $this->FrontModel->getSosialMedia();
		$this->load->view('includes/Front/header', $data);
		$this->load->view('pages/Front/Front-detail/guruDetail', $data);
		$this->load->view('includes/Front/footer', $data);
	}
}
