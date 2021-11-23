<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Kegiatan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Kegiatan</li>
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
										<div class="card-header">
											<a href="#" data-toggle="modal" data-target="#exampleModalDataPenduduk" class="btn btn-primary"><i class="fas fa-plus mr-2"></i> Tambah Data</a>
										</div>
										<div class="card-body">
											<table id="example1" class="table table-bordered table-striped">
												<thead>
													<tr>
														<th class="text-center">No</th>
														<th>Judul</th>
														<th class="text-center">Foto</th>
														<th class="text-center">Tgl Post</th>
														<th class="text-center">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($getKegiatan as $data) : ?>
														<tr>
															<td class="text-center"><?= $no++ ?></td>
															<td><?= $data['judul']; ?></td>
															<td class="text-center">
																<img src="<?= base_url('/assets/assetGambar/kegiatan/') . $data['photo'] ?>" alt="administrator" width="40px" class="rounded">
															</td>
															<td><?= date("d/ m/ Y", $data['created_at']) ?></td>
															<td class="text-center">
																<div calass="btn-group">
																	<div class="dropdown">
																		<button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
																			Aksi
																		</button>
																		<div class="dropdown-menu">
																			<a href="<?= base_url('Admin/AssetSekolahController/createKegiatan/') . $data['slug'] ?>" class="dropdown-item text-success">
																				Edit
																			</a>
																			<a href="<?= base_url('Admin/AssetSekolahController/destroyKegiatan/') . $data['slug'] ?>" class="dropdown-item text-danger" onclick="return confirm('Apakah anda yakin ingin menghapus.?')">
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
					</div>
				</div>
			</div>
		</div>
</div>
</section>
</div>


<!-- Modal untuk tambah data kegaitan -->
<div class="modal fade" id="exampleModalDataPenduduk" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Kegiatan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<?= form_open_multipart('Admin/AssetSekolahController/storeKegiatan'); ?>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="judul">Judul Kegiatan</label>
									<input type="text" name="judul" class="form-control" autocomplete="off" id="judul" placeholder="Masukan Judul Kegiatan">
								</div>
								<div class="form-group">
									<label for="isi">Isi Kegiatan</label>
									<textarea name="isi" id="isi" class="form-control" placeholder="Masukan Isi Kegiatan"></textarea>
									<script>
										CKEDITOR.replace('isi');
									</script>
								</div>
								<div class="form-group">
									<label for="foto">Photo</label>
									<input type="file" name="photo" class="form-control" id="foto">
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

<!-- Modal Untuk Untuk Update Data Kegiatan -->
<?php foreach ($getKegiatan as $data) : ?>
	<div class="modal fade" id="modalUbahDataPenduduk<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Ubah Data Kegaitan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<?= form_open_multipart('Admin/AssetSekolahController/updateKegiatan'); ?>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<input type="hidden" name="id" value="<?= $data['id'] ?>">
									</div>
									<div class="form-group">
										<label for="judul">Judul Kegiatan</label>
										<input type="text" name="judul" class="form-control" id="judul" value="<?= $data['judul'] ?>">
									</div>
									<div class="form-group">
										<label for="kegiatan">Isi Kegiatan</label>
										<textarea name="kegiatan" id="kegiatan" class="form-control" cols="20" rows="5"><?= $data['keterangan'] ?></textarea>
										<script>
											CKEDITOR.replace('kegiatan');
										</script>
									</div>
									<div class="form-group">
										<label for="foto">Photo</label>
										<div class="row">
											<div class="col mb-2">
												<img src="<?= base_url('/assets/assetGambar/kegiatan/') . $data['photo'] ?>" width="120px" alt="" class="img-thumbnail">
											</div>
										</div>
										<input type="file" name="photo" class="form-control" id="foto">
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
<?php endforeach; ?>


<!-- Modal Unutk Detail Data Kegiatan -->
<?php foreach ($getKegiatan as $data) : ?>
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
								<img src="<?= base_url('/assets/assetGambar/Kegiatan/') . $data['foto'] ?>" width="120px" alt="" class="img-thumbnail">
							</div>
						</div>
						<dl class="row justify-content-center">
							<dt class="col-sm-6">Judul Kegiatan</dt>
							<dd class="col-sm-6">: <?= $data['judul']; ?></dd>
							<dt class="col-sm-6">Tanggal Post</dt>
							<dd class="col-sm-6">: <?= date("d/ m/ Y", $data['created_at'],); ?></dd>
							<dt class="col-sm-6">Isi Kegiatan</dt>
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
<?php endforeach; ?>
