<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Visi & Misi | Profile</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Visi & Misi | Profile</li>
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
						<div class="card-header">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<a class="btn btn-warning" data-toggle="collapse" href="#misiMisi" role="button" aria-expanded="false" aria-controls="misiMisi">
										Visi & misi
									</a>
									<a class="btn btn-danger ml-3 px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
										Profil
									</a>
								</ol>
							</nav>
						</div>
						<div class="card-body">


							<!-- Visi dan misi -->
							<div class="collapse" id="misiMisi">
								<div class="row">
									<div class="col">
										<div class="card">
											<div class="card-header">
												<a href="#" data-toggle="modal" data-target="#exampleModalDataPenduduk" class="btn btn-warning"><i class="fas fa-plus mr-2"></i> Tambah Data</a>
											</div>
											<div class="card-body">
												<table id="example1" class="table table-bordered table-striped">
													<thead>
														<tr>
															<th class="text-center">No</th>
															<th class="text-center">Isi</th>
															<th>Jenis</th>
															<th class="text-center">Action</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach ($getVisiMisi as $data) : ?>
															<tr>
																<td class="text-center"><?= $no++ ?></td>
																<td><?= $data['isi']; ?></td>
																<td><?= $data['jenis']; ?></td>
																<td class="text-center">
																	<div calass="btn-group">
																		<div class="dropdown">
																			<button class="btn btn-warning dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
																				Aksi
																			</button>
																			<div class="dropdown-menu">
																				<a href="#" data-toggle="modal" data-target="#modalUbahDataPenduduk<?= $data['id'] ?>" class="dropdown-item text-success">
																					Edit
																				</a>
																				<a type="submit" href="<?= base_url('Admin/AssetSekolahController/destroyVisiMisi/') . $data['id'] ?>" class="dropdown-item text-danger" onclick="return confirm('Apakah anda yakin ingin menghapus.?')">
																					Hapus
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

							<!-- Profile -->
							<div class="collapse" id="collapseExample">
								<div class="row">
									<div class="col">
										<div class="card">
											<?php if (!$getProfile['id']) : ?>
												<div class="card-header">
													<a href="#" data-toggle="modal" data-target="#profile" class="btn btn-danger"><i class="fas fa-plus mr-2"></i> Tambah Data</a>
												</div>
											<?php endif; ?>
											<div class="card-body">
												<table id="example1" class="table table-bordered table-striped">
													<thead>
														<tr>
															<th class="text-center">Isi profile</th>
															<th class="text-center">Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<textarea name="isi_profile" id="" cols="30" rows="10"><?= $getProfile['isi_profile'] ?></textarea>
															</td>
															<td class="text-center">
																<div calass="btn-group">
																	<div class="dropdown">
																		<button class="btn btn-danger dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
																			Aksi
																		</button>
																		<div class="dropdown-menu">
																			<a href="#" data-toggle="modal" data-target="#ubahProfile<?= $getProfile['id'] ?>" class="dropdown-item text-success">
																				Edit
																			</a>
																			<a type="submit" href="<?= base_url('Admin/AssetSekolahController/destroyProfile/') . $getProfile['id'] ?>" class="dropdown-item text-danger" onclick="return confirm('Apakah anda yakin ingin menghapus.?')">
																				Hapus
																			</a>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
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
</div>
</section>
</div>


<!-- Modal untuk tambah data Visi Misi -->
<div class="modal fade" id="exampleModalDataPenduduk" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Visi & Misi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<form action="<?= base_url('Admin/AssetSekolahController/storeVisiMisi') ?>" method="post">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="isi">Isikan Visi Atau Misi</label>
										<textarea name="isi" id="isi" class="form-control" cols=" 10" rows="5" placeholder="Masukan Isi Informasi"></textarea>
									</div>
									<div class="form-group">
										<label for="jabatan">Pilih Visi Atau Misi</label>
										<select class="form-control" name="jenis">
											<option>-- Pilih Visi Atau Misi --</option>
											<option value="VISI">Visi</option>
											<option value="MISI">Misi</option>
										</select>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-warning mt-2">Simpan</button>
							<button type="resset" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Untuk ubah data Visi Misi-->
<?php foreach ($getVisiMisi as $data) : ?>
	<div class="modal fade" id="modalUbahDataPenduduk<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Ubah Data Visi Misi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<form action="<?= base_url('Admin/AssetSekolahController/updateVisiMisi/') . $data['id'] ?>" method="POST">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="isi">Isikan Visi Atau Misi</label>
											<textarea name="updateisi" id="isi" class="form-control" cols="10" rows="5" value="<?= $data['isi'] ?>"><?= $data['isi'] ?></textarea>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-warning mt-2">Simpan</button>
								<button type="resset" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>


<!-- Modal untuk tambah data Profile -->
<div class="modal fade" id="profile" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Profile</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<form action="<?= base_url('Admin/AssetSekolahController/storeProfile') ?>" method="post">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="isi">Isi Profile</label>
										<textarea name="store_profile" id="isi" class="form-control" cols=" 10" rows="5" placeholder="Masukan Isi Informasi"></textarea>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-danger mt-2">Simpan</button>
							<button type="resset" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Untuk ubah data Profile-->
<div class="modal fade" id="ubahProfile<?= $getProfile['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Ubah Data Profile</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<form action="<?= base_url('Admin/AssetSekolahController/updateProfile/') . $getProfile['id'] ?>" method="POST">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="isi">Profile</label>
										<textarea name="update_Profile" id="isi" class="form-control" cols="10" rows="5" value="<?= $getProfile['isi_profile'] ?>"><?= $getProfile['isi_profile'] ?></textarea>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-danger mt-2">Simpan</button>
							<button type="resset" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	CKEDITOR.replace('isi_profile');
</script>
<script>
	CKEDITOR.replace('store_profile');
</script>
<script>
	CKEDITOR.replace('update_Profile');
</script>
