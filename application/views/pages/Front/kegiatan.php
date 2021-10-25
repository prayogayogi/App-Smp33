<div class="carousel-item active">
	<div class="hero-wrapp" style="background-image: url('<?= base_url('assets/FrontAssets/') ?>images/gambarsmp.jpg'); background-attachment:fixed; background-size: cover; width:100%; height: 100%; background-position: center;">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
				<div class="col-md-8 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('FrontController') ?>">Home</a></span> <span>Kegiatan</span></p>
					<h1 class="mb-3 bread">Kegiatan</h1>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="ftco-section">
	<div class="container">
		<div class="row">
			<?php foreach ($kegiatan as $index => $items) : ?>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry  <?= ($index % 2 == 0) ? 'align-self-stretch' : 'd-md-flex align-self-stretch flex-column-reverse' ?>">
						<a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url('assets/assetGambar/kegiatan/') . $items['photo'] ?>');">
						</a>
						<div class="text p-4 d-block">
							<div class="meta mb-3">
								<div><a href="#"><?= date('d-M-Y', $items['created_at']) ?></a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span></a></div>
							</div>
							<h3 class="heading mb-4"><a href="#"><?= $items['judul']; ?></a></h3>
							<!-- <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p> -->
							<p><?= $items['keterangan']; ?></p>
							<p><a href="event.html">Read More <i class="ion-ios-arrow-forward"></i></a></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<!-- <div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</div>
			</div>
		</div> -->
	</div>
</section>
