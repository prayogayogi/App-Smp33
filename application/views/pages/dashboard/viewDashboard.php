<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<?= $this->session->flashdata('status'); ?>
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div class="small-box bg-info">
						<div class="inner">
							<h5>Jumlah Data Guru</h5>

							<h4 class="font-weight-bold"><?= $numGuru; ?></h4>
						</div>

						<div class="icon">
							<i class="nav-icon fas fa-user-graduate"></i>
						</div>

						<a href="<?= base_url('Admin/DataUserSekolahController/dataGuru') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-success">
						<div class="inner">
							<h5>Jumlah Data Siswa</h5>

							<h4 class="font-weight-bold"><?= $numSiswa; ?></h4>
						</div>

						<div class="icon">
							<i class="nav-icon fas fa-user-tie"></i>
						</div>

						<a href="<?= base_url('Admin/DataUserSekolahController/dataSiswa') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-warning">
						<div class="inner">
							<h5>Jumlah Data Siswa Baru</h5>

							<h4 class="font-weight-bold"><?= $numSiswaBaru; ?></h4>
						</div>

						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>

						<a href="<?= base_url('AdministratorController') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-danger">
						<div class="inner">
							<h5>Jumlah User Aplikasi</h5>

							<h4 class="font-weight-bold"><?= $numGuru + $numAdmin; ?></h4>
						</div>

						<div class="icon">
							<i class="nav-icon fas fa-user-tie"></i>
						</div>

						<a href="<?= base_url('AdministratorController') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">

				<div class="col col-4">
					<div class="info-box mb-3 bg-warning">
						<span class="info-box-icon"> <i class="nav-icon fas fa-info-circle"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Informai</span>
							<span class="info-box-number"><?= $numInformmasi; ?></span>
							<a href="<?= base_url('Admin/AssetSekolahController/dataInformasi') ?>" class="small-box-footer mt-2" style="color:aliceblue;">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<div class="info-box mb-3 bg-danger">
						<span class="info-box-icon"><i class="nav-icon fas fa-chart-line"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Kegiatan</span>
							<span class="info-box-number"><?= $numKegiatan; ?></span>
							<a href="<?= base_url('Admin/AssetSekolahController/kegiatan') ?>" class="small-box-footer mt-2" style="color:aliceblue;">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>


					<div class="card">
						<div class="card-header">
							<h3 class="badge badge-warning">Informasi Terbaru</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="card">
										<div class="card-body p-0">
											<ul class="products-list product-list-in-card pl-2 pr-2">
												<?php foreach ($newInformmasi as $newInformmasis) : ?>
													<li class="item">
														<div class="product-img">
															<img src="<?= base_url('/assets/assetGambar/informasi/') . $newInformmasis['foto'] ?>" alt="Product Image" class="img-size-50">
														</div>
														<div class="product-info">
															<p class="product-title text-primary"><?= $newInformmasis['judul'] ?>
																<a href="<?= base_url('Admin/AssetSekolahController/dataMoreInformasi/') . $newInformmasis['slug_judul'] ?>" class="badge badge-warning float-right">More</a>
															</p>
															<span class="product-description">
																<?= $newInformmasis['isi'] ?>
															</span>
															<span class="product-description text-dark">
																<?= tgl_indo(date('Y-m-d', $newInformmasis['created_at']));  ?>
															</span>
														</div>
													</li>
												<?php endforeach; ?>
											</ul>
										</div>
										<div class="card-footer text-center bg-info mt-4">
											<a href="<?= base_url('Admin/AssetSekolahController/dataInformasi') ?>" class="uppercase btn-info text-white py-2 px-3" style="border-radius: 6px;">View All Informasi</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Ini bagian tabel siswa -->
				<div class="col col-8">
					<div class="card">
						<div class="card-header">
							<h3 class="badge badge-warning">Data Siswa</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="card">
										<div class="card-body">
											<table id="example1" class="table text-center table-bordered table-striped">
												<thead>
													<tr>
														<th>No</th>
														<th class="text-left">Nama</th>
														<th class="text-left">Alamat</th>
														<th class="text-left">Gender</th>
														<th class="text-left">No Hp</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($getSiswa as $data) : ?>
														<tr>
															<td><?= $no++ ?></td>
															<td class="text-left"><?= $data['nama']; ?></td>
															<td class="text-left"><?= $data['alamat']; ?></td>
															<td class="text-left"><?= $data['gender']; ?></td>
															<td class="text-left"><?= $data['no_hp']; ?></td>
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
	</section>
</div>
