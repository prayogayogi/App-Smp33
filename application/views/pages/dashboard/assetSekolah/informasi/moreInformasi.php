<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Informasi</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Informasi</li>
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
								<div class="col-md-12">
									<div class="card card-widget">
										<div class="card-header">
											<div class="user-block">
												<img class="img-circle" src="<?= base_url('/assets/assetGambar/administrator/') . $dataMoreInformasi['foto_userapp'] ?>" alt="User Image">
												<span class="username"><a href="#"><?= $dataMoreInformasi['judul']; ?></a></span>
												<span class="description">Post by - <?= $dataMoreInformasi['ouner_post']; ?></span>
												<span class="description  mt-1">Shared publicly - <?= tgl_indo(date('Y-m-d', $dataMoreInformasi['created_at']));  ?></span>
											</div>
											<div class="card-tools">
												<button type="button" class="btn btn-tool" data-card-widget="collapse">
													<i class="fas fa-minus"></i>
												</button>
											</div>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col">
													<img class="img-fluid pad text-center img-thumbnail" src="<?= base_url('/assets/assetGambar/informasi/') . $dataMoreInformasi['foto'] ?>" width="600px" alt="Photo">
												</div>
												<div class="col">
													<h5 class="font-weight-bold">Isi Informasi</h5>
													<p><?= $dataMoreInformasi['isi']; ?></p>
													<button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
													<button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
													<span class="float-right text-muted">45 likes - 2 comments</span>
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
</div>
</div>
</section>
</div>
