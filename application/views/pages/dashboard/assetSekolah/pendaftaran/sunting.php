<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Pendaftaran Siswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Pendaftaran Siswa</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<?= $this->session->flashdata('status'); ?>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<form action="" method="post">
										<div class="row">
											<div class="col">
												<div class="form-group">
													<label for="nama">Nama</label>
													<input type="text" name="nama" class="form-control" autocomplete="off" id="nama" value="<?= $getShowSiswaBaru['nama']; ?>">
												</div>
												<div class="form-group">
													<label for="jabatan">Gender</label>
													<select class="form-control" name="gender">
														<option value="<?= $getShowSiswaBaru['nama']; ?>"><?= $getShowSiswaBaru['gender']; ?></option>
														<option value="LAKI-LAKI">Laki-laki</option>
														<option value="PEREMPUAN">Perempuan</option>
													</select>
												</div>
												<div class="form-group">
													<label for="asalSekolah">Asal Sekolah</label>
													<input type="text" name="asal_sekolah" class="form-control" autocomplete="off" id="asalSekolah" value="<?= $getShowSiswaBaru['asal_sekolah']; ?>">
												</div>
												<div class="form-group">
													<label for="tempat_lahir">Tempat lahir</label>
													<input type="text" name="tempat_lahir" class="form-control" autocomplete="off" id="tempat_lahir" value="<?= $getShowSiswaBaru['tempat_lahir']; ?>">
												</div>
												<div class="form-group">
													<label for="tgl_lahir">Tanggal lahir</label>
													<input type="date" name="tgl_lahir" class="form-control" autocomplete="off" id="tgl_lahir" value="<?= $getShowSiswaBaru['tgl_lahir']; ?>">
												</div>
												<div class="form-group">
													<label for="nik">No Induk Keluarga</label>
													<input type="number" name="nik" class="form-control" autocomplete="off" id="nik" value="<?= $getShowSiswaBaru['nik']; ?>">
												</div>
												<div class="form-group">
													<label for="alamat">Alamat</label>
													<input type="text" name="alamat" class="form-control" autocomplete="off" id="alamat" value="<?= $getShowSiswaBaru['alamat']; ?>">
												</div>
											</div>
											<div class="col">
												<div class="form-group">
													<label for="no_hp">No Hp</label>
													<input type="number" name="no_hp" class="form-control" autocomplete="off" id="no_hp" value="<?= $getShowSiswaBaru['no_hp']; ?>">
												</div>
												<div class="form-group">
													<label for="email">Email</label>
													<input type="text" name="email" class="form-control" autocomplete="off" id="email" value="<?= $getShowSiswaBaru['email']; ?>">
												</div>
												<div class="form-group">
													<label for="Nama Ayah">Nama Ayah</label>
													<input type="text" name="nama_ayah" class="form-control" autocomplete="off" id="Nama Ayah" placeholder="Masukan Nama Ayah">
												</div>
												<div class="form-group">
													<label for="Pekerjaan Ayah">Pekerjaan Ayah</label>
													<input type="text" name="pekerjaan_ayah" class="form-control" autocomplete="off" id="Pekerjaan Ayah" placeholder="Masukan Pekerjaan Ayah">
												</div>
												<div class="form-group">
													<label for="Nama Ibu">Nama Ibu</label>
													<input type="text" name="nama_ibu" class="form-control" autocomplete="off" id="Nama Ibu" placeholder="Masukan Nama Ibu">
												</div>
												<div class="form-group">
													<label for="Pekerjaan Ibu">Pekerjaan Ibu</label>
													<input type="text" name="pekerjaan_ibu" class="form-control" autocomplete="off" id="Pekerjaan Ibu" placeholder="Masukan Pekerjaan Ibu">
												</div>
												<div class="form-group">
													<label for="Nilai Un">Nilai Un</label>
													<input type="text" name="nilai_un" class="form-control" autocomplete="off" id="Nilai Un" placeholder="Masukan Nilai Un">
												</div>
											</div>
										</div>
										<a href="<?= base_url('Admin/AssetSekolahController/pendaftaranSiswa') ?>" class="btn btn-dark px-4 ml-2 mt-2">Keluar</a>
										<button type="submit" class="btn btn-primary mt-2">Simpan</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</section>
</div>
