<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Edit Data Kegiatan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Edit Data Kegiatan</li>
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
						<div class="card-body">
							<div class="row">
								<div class="col">
									<form action="<?= base_url("Admin/AssetSekolahController/updateKegiatan/") . $createKegiatan['slug'] ?>" method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col">
												<div class="form-group">
													<label for="judul">Judul Kegiatan</label>
													<input type="text" name="judul" class="form-control" id="judul" value="<?= $createKegiatan['judul'] ?>">
												</div>
												<div class="form-group">
													<label for="kegiatan">Isi Kegiatan</label>
													<textarea name="kegiatan" id="kegiatan" class="form-control" cols="20" rows="5"><?= $createKegiatan['keterangan'] ?></textarea>
													<script>
														CKEDITOR.replace('kegiatan');
													</script>
												</div>
												<div class="form-group">
													<label for="foto">Photo</label>
													<div class="row">
														<div class="col mb-2">
															<img src="<?= base_url('/assets/assetGambar/kegiatan/') . $createKegiatan['photo'] ?>" width="120px" alt="" class="img-thumbnail">
														</div>
													</div>
													<input type="file" name="photo" class="form-control" id="foto">
												</div>
											</div>
										</div>
										<a href="<?= base_url('Admin/AssetSekolahController/kegiatan') ?>" class="btn btn-dark px-4 ml-2 mt-2">Keluar</a>
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