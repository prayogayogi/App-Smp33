<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Siswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Siswa</li>
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
														<th>Nama</th>
														<th>Jenis Kelamin</th>
														<th>Email</th>
														<th>No Nik</th>
														<th class="text-center">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($getSiswa as $data) : ?>
														<tr>
															<td class="text-center"><?= $no++ ?></td>
															<td><?= $data['nama']; ?></td>
															<td><?= $data['gender']; ?></td>
															<td><?= $data['email']; ?></td>
															<td><?= $data['nik']; ?></td>
															<td class="text-center">
																<a href="#" data-toggle="modal" data-target="#modalUbahDataGuru<?= $data['id'] ?>" class="btn btn-primary"><i class="fas fa-pen-square"></i></a>

																<a type="submit" href="<?= base_url('Admin/DataUserSekolahController/destroySiswa/') . $data['id'] ?>" onclick=" return confirm('Yakin Ingin Menghapus.?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

																<a href="#" data-toggle="modal" data-target="#staticBackdrop<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-plus-square"></i></a>
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


<!-- Modal untuk tambah data Siswa -->
<div class="modal fade" id="exampleModalDataPenduduk" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<?= form_open_multipart('Admin/DataUserSekolahController/storeSiswa'); ?>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" class="form-control" autocomplete="off" id="nama" placeholder="Masukan nama" required>
								</div>
								<div class="form-group">
									<label for="jabatan">Jabatan</label>
									<select class="form-control" name="gender">
										<option value="1">-- Pilih Jenis Kelamin --</option>
										<option value="LAKI-LAKI">Laki-laki</option>
										<option value="PEREMPUAN">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label for="asalSekolah">Asal Sekolah</label>
									<input type="text" name="asal_sekolah" class="form-control" autocomplete="off" id="asalSekolah" placeholder="Masukan asal sekolah" required>
								</div>
								<div class="form-group">
									<label for="tgl_lahir">Tanggal lahir</label>
									<input type="date" name="tgl_lahir" class="form-control" autocomplete="off" id="tgl_lahir" placeholder="Masukan Tanggal Lahir" required>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="nik">No Induk Keluarga</label>
									<input type="number" name="nik" class="form-control" autocomplete="off" id="nik" placeholder="Masukan No Induk Keluarga" required>
								</div>
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" class="form-control" autocomplete="off" id="alamat" placeholder="Masukan alamat" required>
								</div>
								<div class="form-group">
									<label for="no_hp">No Hp</label>
									<input type="number" name="no_hp" class="form-control" autocomplete="off" id="no_hp" placeholder="Masukan No Hp" required>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" name="email" class="form-control" autocomplete="off" id="email" placeholder="Masukan Email" required>
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

<!-- Modal Untuk ubah data Siswa -->
<?php foreach ($getSiswa as $data) : ?>
	<div class="modal fade" id="modalUbahDataGuru<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Ubah Data Siswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<form action="<?= base_url('Admin/DataUserSekolahController/updateSiswa/') . $data['id'] ?>" method="POST">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="nama">Nama</label>
											<input type="text" name="nama" class="form-control" autocomplete="off" id="nama" value="<?= $data['nama'] ?>" required>
										</div>
										<div class="form-group">
											<label for="jabatan">Jabatan</label>
											<select class="form-control" name="gender">
												<option value="<?= $data['gender'] ?>"> <?= $data['gender'] ?></option>
												<option value="LAKI-LAKI">Laki-laki</option>
												<option value="PEREMPUAN">Perempuan</option>
											</select>
										</div>
										<div class="form-group">
											<label for="asalSekolah">Asal Sekolah</label>
											<input type="text" name="asal_sekolah" class="form-control" autocomplete="off" id="asalSekolah" value="<?= $data['asal_sekolah'] ?>" required>
										</div>
										<div class="form-group">
											<label for="tgl_lahir">Tanggal lahir</label>
											<input type="date" name="tgl_lahir" class="form-control" autocomplete="off" id="tgl_lahir" value="<?= $data['tgl_lahir'] ?>" required>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label for="nik">No Induk Keluarga</label>
											<input type="number" name="nik" class="form-control" autocomplete="off" id="nik" value="<?= $data['nik'] ?>" required>
										</div>
										<div class="form-group">
											<label for="alamat">Alamat</label>
											<input type="text" name="alamat" class="form-control" autocomplete="off" id="alamat" value="<?= $data['alamat'] ?>" required>
										</div>
										<div class="form-group">
											<label for="no_hp">No Hp</label>
											<input type="number" name="no_hp" class="form-control" autocomplete="off" id="no_hp" value="<?= $data['no_hp'] ?>" required>
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" name="email" class="form-control" autocomplete="off" id="email" value="<?= $data['email'] ?>" required>
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


<!-- Modal Unutk Detail data Siswa -->
<?php foreach ($getSiswa as $data) : ?>
	<div class="modal fade" id="staticBackdrop<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Detail Data Siswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="card-body">
						<!-- <div class="row">
              <div class="col text-center mb-4">
                <img src="<?= base_url('/assets/assetGambar/administrator/') . $data['foto'] ?>" width="120px" alt="" class="img-thumbnail">
              </div>
            </div> -->
						<dl class="row justify-content-center">
							<dt class="col-sm-6">Nama</dt>
							<dd class="col-sm-6">: <?= $data['nama']; ?></dd>
							<dt class="col-sm-6">Jenis Kelamin</dt>
							<dd class="col-sm-6">: <?= $data['gender']; ?></dd>
							<dt class="col-sm-6">Asal Sekolah</dt>
							<dd class="col-sm-6">: <?= $data['asal_sekolah']; ?></dd>
							<dt class="col-sm-6">Tanggal Lahir</dt>
							<dd class="col-sm-6">: <?= $data['tgl_lahir']; ?></dd>
							<dt class="col-sm-6">No induk keluarga</dt>
							<dd class="col-sm-6">: <?= $data['nik']; ?></dd>
							<dt class="col-sm-6">Alamat</dt>
							<dd class="col-sm-6">: <?= $data['alamat']; ?></dd>
							<dt class="col-sm-6">No Hp</dt>
							<dd class="col-sm-6">: <?= $data['no_hp']; ?></dd>
							<dt class="col-sm-6">Email</dt>
							<dd class="col-sm-6">: <?= $data['email']; ?></dd>
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
