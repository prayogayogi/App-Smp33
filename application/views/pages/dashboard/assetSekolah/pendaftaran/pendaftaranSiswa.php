<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Pendaftaran Siswa</h1>
					<?php if ($open['status'] == 'open') { ?>
						<a href="<?= base_url('Admin/AssetSekolahController/tutup/') . 'open' ?>" class="badge badge-warning ml-2 mt-2" onclick="return confirm('Yakin Ingin Tutup Pendaftaran.?')">Tutup Pendaftaran</a>
					<?php } elseif ($open['status'] == 'close') { ?>
						<a href="<?= base_url('Admin/AssetSekolahController/open/') . 'close' ?>" class="badge badge-success mt-2" onclick="return confirm('Yakin Ingin bukak Pendaftaran.?')">Buka Pendaftaran</a>
					<?php } ?>
					<div class="daf  d-flex justify-content-end">
						<a href="<?= base_url('Admin/AssetSekolahController/buka_pengumuman/') . 'not' ?>" class="badge badge-danger mr-3">Buka pengumuman</a>
						<a href="<?= base_url('Admin/AssetSekolahController/tutup_pengumuman/') . 'publish' ?>" class="badge badge-warning">Tutup pengumuman</a>
					</div>
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
									<div class="card">
										<?php if ($open['status'] == 'open') : ?>
											<div class="card-header">
												<a href="#" data-toggle="modal" data-target="#exampleModalDataPenduduk" class="btn btn-primary"><i class="fas fa-plus mr-2"></i> Tambah Data</a>
											</div>
										<?php endif; ?>
										<div class="card-body">
											<table id="example1" class="table table-bordered table-striped">
												<thead>
													<tr>
														<th class="text-center">No</th>
														<th>Nama</th>
														<th class="text-center">Gender</th>
														<th class="text-center">No Hp</th>
														<th class="text-center">Email</th>
														<th class="text-center">Status</th>
														<th class="text-center">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($getSiswaBaru as $data) : ?>
														<tr>
															<td class="text-center"><?= $no++ ?></td>
															<td><?= $data['nama']; ?></td>
															<td><?= $data['gender']; ?></td>
															<td><?= $data['no_hp']; ?></td>
															<td><?= $data['email']; ?></td>
															<td class="text-left">
																<?php if ($data['nilai_un'] >= 60) { ?>
																	<p>LULUS</p>
																<?php } else { ?>
																	<P>TIDAK LULUS</P>
																<?php } ?>
															</td>
															<td class="text-center">
																<div calass="btn-group">
																	<div class="dropdown">
																		<button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
																			Aksi
																		</button>
																		<div class="dropdown-menu">
																			<a href="#" data-toggle="modal" data-target="#modalUbahDataPenduduk<?= $data['id'] ?>" class="dropdown-item text-success">
																				Edit
																			</a>
																			<a href="<?= base_url('Admin/AssetSekolahController/destroyPendaftaranSiswa/') . $data['id'] ?>" class="dropdown-item text-danger" onclick="return confirm('Apakah anda yakin ingin menghapus.?')">
																				Hapus
																			</a>
																			<a href="<?= base_url('Admin/AssetSekolahController/showPendaftaranSiswa/') . $data['id']; ?>" class="dropdown-item text-info">
																				sunting
																			</a>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
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


<!-- Modal untuk tambah data Pendaftran Sekolah -->
<div class="modal fade" id="exampleModalDataPenduduk" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa Baru</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<?= form_open_multipart('Admin/AssetSekolahController/storePendaftaranSiswa'); ?>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" class="form-control" autocomplete="off" id="nama" placeholder="Masukan nama">
								</div>
								<div class="form-group">
									<label for="jabatan">Gender</label>
									<select class="form-control" name="gender">
										<option value="1">-- Pilih Jenis Kelamin --</option>
										<option value="LAKI-LAKI">Laki-laki</option>
										<option value="PEREMPUAN">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label for="asalSekolah">Asal Sekolah</label>
									<input type="text" name="asal_sekolah" class="form-control" autocomplete="off" id="asalSekolah" placeholder="Masukan asal sekolah">
								</div>
								<div class="form-group">
									<label for="tempat_lahir">Tempat lahir</label>
									<input type="text" name="tempat_lahir" class="form-control" autocomplete="off" id="tempat_lahir" placeholder="Masukan Tempat Lahir">
								</div>
								<div class="form-group">
									<label for="tgl_lahir">Tanggal lahir</label>
									<input type="date" name="tgl_lahir" class="form-control" autocomplete="off" id="tgl_lahir" placeholder="Masukan Tanggal Lahir">
								</div>
								<div class="form-group">
									<label for="nik">No Induk Keluarga</label>
									<input type="number" name="nik" class="form-control" autocomplete="off" id="nik" placeholder="Masukan No Induk Keluarga">
								</div>
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" class="form-control" autocomplete="off" id="alamat" placeholder="Masukan alamat">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="no_hp">No Hp</label>
									<input type="number" name="no_hp" class="form-control" autocomplete="off" id="no_hp" placeholder="Masukan No Hp">
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" autocomplete="off" id="email" placeholder="Masukan Email">
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
						<button type="submit" class="btn btn-primary mt-2">Simpan</button>
						<button type="resset" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Untuk Untuk Update Data Informasi -->
<?php foreach ($getSiswaBaru as $data) : ?>
	<div class="modal fade" id="modalUbahDataPenduduk<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Ubah Data Penduduk</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<form action="<?= base_url('Admin/AssetSekolahController/updatePendaftaranSiswa/') . $data['id'] ?>" method="post">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="nama">Nama</label>
											<input type="text" name="nama" class="form-control" autocomplete="off" id="nama" value="<?= $data['nama']; ?>">
										</div>
										<div class="form-group">
											<label for="jabatan">Gender</label>
											<select class="form-control" name="gender">
												<option value="<?= $data['gender']; ?>"><?= $data['gender']; ?></option>
												<option value="LAKI-LAKI">Laki-laki</option>
												<option value="PEREMPUAN">Perempuan</option>
											</select>
										</div>
										<div class="form-group">
											<label for="asalSekolah">Asal Sekolah</label>
											<input type="text" name="asal_sekolah" class="form-control" autocomplete="off" id="asalSekolah" value="<?= $data['asal_sekolah']; ?>">
										</div>
										<div class="form-group">
											<label for="tempat_lahir">Tempat lahir</label>
											<input type="text" name="tempat_lahir" class="form-control" autocomplete="off" id="tempat_lahir" value="<?= $data['tempat_lahir']; ?>">
										</div>
										<div class="form-group">
											<label for="tgl_lahir">Tanggal lahir</label>
											<input type="date" name="tgl_lahir" class="form-control" autocomplete="off" id="tgl_lahir" value="<?= $data['tgl_lahir']; ?>">
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label for="nik">No Induk Keluarga</label>
											<input type="number" name="nik" class="form-control" autocomplete="off" id="nik" value="<?= $data['nik']; ?>">
										</div>
										<div class="form-group">
											<label for="alamat">Alamat</label>
											<input type="text" name="alamat" class="form-control" autocomplete="off" id="alamat" value="<?= $data['alamat']; ?>">
										</div>
										<div class="form-group">
											<label for="no_hp">No Hp</label>
											<input type="number" name="no_hp" class="form-control" autocomplete="off" id="no_hp" value="<?= $data['no_hp']; ?>">
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" name="email" class="form-control" autocomplete="off" id="email" value="<?= $data['email']; ?>">
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary mt-2">Simpan</button>
								<button type="resset" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>


<!-- Modal Unutk Detail Data Informasi -->
<!-- <?php foreach ($getInformasi as $data) : ?>
	<div class="modal fade" id="staticBackdrop<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Detail Data Admin</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="card-body">
						<div class="row">
							<div class="col text-center mb-4">
								<img src="<?= base_url('/assets/assetGambar/informasi/') . $data['foto'] ?>" width="120px" alt="" class="img-thumbnail">
							</div>
						</div>
						<dl class="row justify-content-center">
							<dt class="col-sm-6">Judul Informasi</dt>
							<dd class="col-sm-6">: <?= $data['judul']; ?></dd>
							<dt class="col-sm-6">Tanggal Post</dt>
							<dd class="col-sm-6">: <?= date("d/ m/ Y", $data['created_at'],); ?></dd>
							<dt class="col-sm-6">Isi Informasi</dt>
							<dd class="col-sm-6">:</dd>
							<textarea name="isi" id="" class="form-control" disabled cols="20" rows="7"> <?= $data['isi']; ?></textarea>
						</dl>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?> -->
