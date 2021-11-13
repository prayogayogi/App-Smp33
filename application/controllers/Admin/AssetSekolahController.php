<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AssetSekolahController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['AssetSekolahModel', 'AuthModel', 'FrontModel']);
		if (!$this->session->userdata('email')) {
			redirect('AuthController');
		}
	}
	// UNTUK STRUKTUR ORGANISASI
	// get & View Struktur Organisasi
	public function struktur()
	{
		$data['title'] = "Struktur Organisasi";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getOrganisasi'] = $this->AssetSekolahModel->getData()->result_array();
		$data['cekgetOrganisasi'] = $this->AssetSekolahModel->getData()->row_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/strukturOrganisasi', $data);
		$this->load->view('includes/Admin/footer');
	}

	// Store Data Organisasi Sekolah
	public function storeOrganisasi()
	{
		$this->AssetSekolahModel->store();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Struktur Organisasi</strong> Berhasil Di Tambah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/struktur');
	}

	// Update Struktur Organisasi
	public function update()
	{
		$this->AssetSekolahModel->update();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Struktur Organisasi</strong> Berhasil Di Ubah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/struktur');
	}

	// Destroy Organisasi
	public function destroyOrganisasi($id)
	{
		$this->AssetSekolahModel->destroyOrganisasi($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Struktur Organisasi</strong> Berhasil Di Hapus..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/struktur');
	}

	// UNTUK VISI & MISI
	// Untuk Visi & Misi
	public function visiMisi()
	{
		$data['title'] = "Visi Misi | Profile";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getVisiMisi'] = $this->AssetSekolahModel->getVisiMisi()->result_array();
		$data['getProfile'] = $this->AssetSekolahModel->getProfile()->row_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/visiMisi', $data);
		$this->load->view('includes/Admin/footer');
	}

	// Store Visi Dan Misi
	public function storeVisiMisi()
	{
		$this->AssetSekolahModel->storeVisiMisi();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Visi Misi</strong> Berhasil Di Tambah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/visiMisi');
	}

	// Update Data Visi Misi
	public function updateVisiMisi($id)
	{
		$this->AssetSekolahModel->updateVisiMisi($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Visi Misi</strong> Berhasil Di Ubah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/visiMisi');
	}

	// Destroy Data Visi Misi
	public function destroyVisiMisi($id)
	{
		$this->AssetSekolahModel->destroyVisiMisi($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Visi Misi</strong> Berhasil Di Hapus..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/visiMisi');
	}


	// PROFILE
	// Destroy Profile
	public function storeProfile()
	{
		$this->AssetSekolahModel->storeProfile();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Profile</strong> Berhasil Di Tambah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/visiMisi');
	}

	// Destroy Profile
	public function updateProfile($id)
	{
		$this->AssetSekolahModel->updateProfile($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Profile</strong> Berhasil Di Ubah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/visiMisi');
	}
	// Destroy Profile
	public function destroyProfile($id)
	{
		$this->AssetSekolahModel->destroyProfile($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Profile</strong> Berhasil Di Hapus..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/visiMisi');
	}

	// UNTUK DATA INFORMASI
	// Untuk Data Informasi
	public function dataInformasi()
	{
		$data['title'] = "Data Informasi";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getInformasi'] = $this->AssetSekolahModel->getDataInformasi()->result_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/informasi/dataInformasi', $data);
		$this->load->view('includes/Admin/footer');
	}
	// Untuk Data Informasi
	public function dataMoreInformasi($slug)
	{
		$data['title'] = "Detail Informasi";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['dataMoreInformasi'] = $this->FrontModel->fotoOunerPost($slug)->row_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/informasi/MoreInformasi', $data);
		$this->load->view('includes/Admin/footer');
	}

	// Store Data Informasi
	public function storeInformasi()
	{
		$this->AssetSekolahModel->storeInformasi();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Informasi</strong> Berhasil Di Tambah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/dataInformasi');
	}

	// Update Data Informasi
	public function updateInformasi()
	{
		$this->AssetSekolahModel->updateInformasi();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Informasi</strong> Berhasil Di Update..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/dataInformasi');
	}

	// Destroy Data Informasi
	public function destroyInformasi($slug)
	{
		$this->AssetSekolahModel->destroyInformasi($slug);
		$this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Informasi</strong> Berhasil Di Hapus..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/dataInformasi');
	}

	// SOSIAL MEIDA
	// Get Sosial Media
	public function sosialMedia()
	{
		$data['title'] = "Sosial Media";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getSosialMedia'] = $this->AssetSekolahModel->getSosialMedia()->result_array();
		$data['cekgetSosialMedia'] = $this->AssetSekolahModel->getSosialMedia()->row_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/sosialMedia', $data);
		$this->load->view('includes/Admin/footer');
	}

	// Sotore Sosial Media
	public function storeSosialMedia()
	{
		$this->AssetSekolahModel->storeSosialMedia();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Sosial Media</strong> Berhasil Di Tambah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/sosialMedia');
	}

	// Updata Sosial Media
	public function updateSosialMedia($id)
	{
		$this->AssetSekolahModel->updateSosialMedia($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Sosial Media</strong> Berhasil Di Ubah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/sosialMedia');
	}


	// PENDAFTARAN SISWA BARU
	// Get pendaftaran siswa baru
	public function pendaftaranSiswa()
	{
		$data['title'] = "Data Pendaftran";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getSiswaBaru'] = $this->AssetSekolahModel->getSiswaBaru()->result_array();
		$data['open'] = $this->db->get('open_pendaftaran')->row_array();
		$data['pengumuman'] = $this->db->get('db_pengumuman')->row_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/pendaftaran/pendaftaranSiswa', $data);
		$this->load->view('includes/Admin/footer');
	}

	// Sotore data pendaftran siswa baru
	public function storePendaftaranSiswa()
	{
		$this->AssetSekolahModel->storePendaftaranSiswa();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Siswa baru</strong> Berhasil Di Tambah..
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
		redirect('Admin/AssetSekolahController/pendaftaranSiswa');
	}

	// Update data pendaftran siswa baru
	public function updatePendaftaranSiswa($id)
	{
		$this->AssetSekolahModel->updatePendaftaranSiswa($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Siswa baru</strong> Berhasil Di Ubah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/pendaftaranSiswa');
	}

	// Destroy data pendaftran siswa baru
	public function destroyPendaftaranSiswa($id)
	{
		$this->AssetSekolahModel->destroyPendaftaranSiswa($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Siswa baru</strong> Berhasil Di Hapus..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/pendaftaranSiswa');
	}

	// Show atau sunting pendaftran siswa baru
	public function showPendaftaranSiswa($id)
	{
		$data['title'] = "View Pendaftran";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getShowSiswaBaru'] = $this->AssetSekolahModel->getShowSiswaBaru($id)->row_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/pendaftaran/sunting', $data);
		$this->load->view('includes/Admin/footer');
	}



	// Pendaftaran siswa baru
	public function kegiatan()
	{
		$data['title'] = "Data Kegiatan";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getKegiatan'] = $this->AssetSekolahModel->getDataKegiatan()->result_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/kegiatan/index', $data);
		$this->load->view('includes/Admin/footer');
	}

	// create kegaitan
	public function createKegiatan($slug)
	{
		$data['title'] = "Edit Data kegiatan";
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['createKegiatan'] = $this->AssetSekolahModel->createKegiatan($slug)->row_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/kegiatan/edit', $data);
		$this->load->view('includes/Admin/footer');
	}

	// Store kegiatan
	public function updateKegiatan($slug)
	{
		$this->AssetSekolahModel->updateKegiatan($slug);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Kegiatan</strong> Berhasil Di Update..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/kegiatan');
	}

	// Store kegiatan
	public function storeKegiatan()
	{
		$this->AssetSekolahModel->storeKegiatan();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Kegiatan</strong> Berhasil Di Tambah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/kegiatan');
	}

	// Store kegiatan
	public function destroyKegiatan($slug)
	{
		$this->AssetSekolahModel->destroyKegiatan($slug);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Kegiatan</strong> Berhasil Di Hapus..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/kegiatan');
	}


	//Open pendaftran siswa
	public function open($par)
	{
		$data = [
			'status' => 'open'
		];
		$this->db->set($data);
		$this->db->where(['status' => $par]);
		$this->db->update('open_pendaftaran');
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Pendaftran</strong> Berhasil Di Buka..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/pendaftaranSiswa');
	}

	//Open pendaftran siswa
	public function tutup($par)
	{
		$data = [
			'status' => 'close'
		];
		$this->db->set($data);
		$this->db->where(['status' => $par]);
		$this->db->update('open_pendaftaran');
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Pendaftran</strong> Berhasil Di Tutup..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/pendaftaranSiswa');
	}

	//Open buka_pengumuman
	public function buka_pengumuman($par)
	{
		$data = [
			'status' => 'publish'
		];
		$this->db->set($data);
		$this->db->where(['status' => $par]);
		$this->db->update('db_pengumuman');
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Pengumuman</strong> Berhasil Di Publish..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/pendaftaranSiswa');
	}

	//Open tutup_pengumuman
	public function tutup_pengumuman($par)
	{
		$data = [
			'status' => 'not'
		];
		$this->db->set($data);
		$this->db->where(['status' => $par]);
		$this->db->update('db_pengumuman');
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Pengumuman</strong> Berhasil Di Tutup..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/pendaftaranSiswa');
	}
}
