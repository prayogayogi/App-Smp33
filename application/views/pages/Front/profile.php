<!-- <div class="hero-wrapp hero-wrap-2" style="background-color:#1C212B; height:300px; margin-top:-100px">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-8 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('FrontController') ?>">Home</a></span> <span>Profile</span></p>
				<h1 class="mb-3 bread">Profile</h1>
			</div>
		</div>
	</div>
</div> -->


<section class="ftco-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 d-flex ftco-animate">
				<div class="img img-about align-self-stretch" style="background-image: url(<?= base_url('assets/FrontAssets/') ?>images/compres.jpg); width: 100%;"></div>
			</div>
			<div class="col-md-6 pl-md-5 ftco-animate">
				<h2 class="mb-4">SMP NEGRI 33 LEBONG</h2>
				<?= $getProfile['isi_profile']?>
			</div>
		</div>
	</div>
</section>

<section class="ftco-counter bg-light" id="section-counter">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
				<div class="row">
					<div class="col-md-12 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<h3>Struktur Organisasi</h3>
							</div>
						</div>
					</div>
					<img src="<?= base_url('assets/assetGambar/struktur/') . $getStrukturOrganisasi['struktur'] ?>" alt="Strutkru" style="width: 100%;">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section testimony-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h2 class="mb-4">Visi & Misi</h2>
			</div>
		</div>
		<div class="row">
			<div class="col col-12 col-lg-6">
				<div class="item">
					<div class="testimony-wrap">
						<h3 class="text-center">Visi</h3>
						<div class="text mt-4" style="height: 550px;">
							<ol>
								<?php foreach ($getWhereVisi as $data) : ?>
									<li class="text-justify mt-3"><?= $data['isi']; ?></li>
								<?php endforeach; ?>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div class="col col-12 col-lg-6">
				<div class="item">
					<div class="testimony-wrap">
						<h3 class="text-center">Misi</h3>
						<div class="text mt-4" style="height: 550px;">
							<ol>
								<?php foreach ($getWhereMisi as $data) : ?>
									<li class="text-justify mt-3"><?= $data['isi']; ?></li>
								<?php endforeach; ?>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
