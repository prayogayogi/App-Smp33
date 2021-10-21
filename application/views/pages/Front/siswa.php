<div class="carousel-item active">
	<div class="hero-wrapp" style="background-image: url('<?= base_url('assets/FrontAssets/') ?>images/gambarsmp.jpg'); background-attachment:fixed; background-size: cover; width:100%; height: 100%; background-position: center;">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
				<div class="col-md-8 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('FrontController') ?>">Home</a></span> <span>Siswa</span></p>
					<h1 class="mb-3 bread">Siswa</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h2 class="mb-0">Siswa-Siswa Kami</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 mb-sm-4 ftco-animate">
				<div class="card">
					<div class="card-body table-responsive">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Agama</th>
									<th>Jenis Kelamin</th>
									<th>Tempat Lahir</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($getSiswa as $data) : ?>
									<tr>
										<td><?= $no++; ?></td>
										<td><?= $data['nama']; ?></td>
										<td><?= $data['asal_sekolah']; ?></td>
										<td><?= $data['gender']; ?></td>
										<td><?= $data['alamat']; ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
