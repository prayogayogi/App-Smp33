<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<?php foreach ($getInformasi as $key => $index) : ?>
			<div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
				<div class="hero-wrapp" style="background-image: url('<?= base_url('/assets/assetGambar/informasi/') . $index['foto'] ?>'); background-attachment:fixed; background-size: cover; width:100%; height: 100%; background-position: center;">
					<div class="overlay"></div>
					<div class="container">
						<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
							<div class="col-md-8 ftco-animate text-center">
								<h1 class="mb-4"><?= $index['judul']; ?></h1>
								<p><a href="<?= base_url('FrontDetailController/getDetaiInformasi/') . $index['slug_judul'] ?>" class="btn btn-info px-4 py-3">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h2 class="mb-4">Pimpinan Sekolah</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 mb-sm-4 ftco-animate">
				<div class="staff">
					<div class="d-flex mb-4">
						<div class="img" style="background-image: url(<?= base_url('assets/assetGambar/guru/') . $getKepsek['foto'] ?>);"></div>
						<div class="info ml-4">
							<h3><a href="<?= base_url('FrontDetailController/getDetailGuru/') . $getKepsek['created_at'] ?>"><?= $getKepsek['nama']; ?></a></h3>
							<span class="position"><?= $getKepsek['jabatan']; ?></span>
							<p><?= $getWakilKepsek['lulusan']; ?></p>
							<p class="ftco-social d-flex">
								<a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
								<a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
								<a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
							</p>
						</div>
					</div>
					<div class="text">
						<!-- <p><?= $getKepsek['alamat']; ?></p> -->
					</div>
				</div>
			</div>
			<div class="col-lg-6 mb-sm-4 ftco-animate">
				<div class="staff">
					<div class="d-flex mb-4">
						<div class="img" style="background-image: url(<?= base_url('assets/assetGambar/guru/') . $getWakilKepsek['foto'] ?>);"></div>
						<div class="info ml-4">
							<h3><a href="<?= base_url('FrontDetailController/getDetailGuru/') . $getWakilKepsek['created_at'] ?>"><?= $getWakilKepsek['nama']; ?></a></h3>
							<span class="position"><?= $getWakilKepsek['jabatan']; ?></span>
							<p><?= $getWakilKepsek['lulusan']; ?></p>
							<p class="ftco-social d-flex">
								<a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
								<a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
								<a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
							</p>
						</div>
					</div>
					<div class="text">
						<!-- <p><?= $getWakilKepsek['alamat']; ?></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="ftco-section-3 img" style="background-image: url(<?= base_url('assets/FrontAssets/') ?>images/lab.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row d-md-flex justify-content-center">
				<div class="col-md-9 about-video text-center">
					<h2 class="ftco-animate">Smk Negri 05 Ujan Mas Adalah Sekolah Terakreditasi (A) Di Kabupaten Kepahiyang</h2>
					<div class="video d-flex justify-content-center">
						<a href="https://www.youtube.com/watch?v=dpG77oZ-X1k" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter bg-light" id="section-counter">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="<?= $getJumlahSiswa; ?>">0</strong>
									<span>Jumlah Siwa</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="<?= $getJumlahGuru; ?>">0</strong>
									<span>Jumlah Guru</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->



<?php if ($open['status']  == 'open') : ?>
	<section class="ftco-freeTrial">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-12">
					<div class="d-flex align-items-center">
						<div class="free-trial ftco-animate">
							<h3>Daftarkan dirimu sekarang</h3>
							<p>Dapatkan pengalaman belajar menyenangkan dan tentunya sangat luar biasa.</p>
						</div>
						<div class="btn-join ftco-animate">
							<p><a href="#" class="btn btn-info py-3 px-4" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Pendaftaran</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<!-- <section class="ftco-section testimony-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<h2 class="mb-4">Guru-Guru Kami</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div class="carousel-testimony owl-carousel">
						<?php foreach ($getGuru as $data) : ?>
							<div class="item">
								<div class="testimony-wrap text-center">
									<div class="user-img mb-5" style="background-image: url(<?= base_url('assets/assetGambar/guru/') . $data['foto'] ?>)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text">
										<p class="mb-5"><?= $data['deskripsi']; ?></p>
										<p class="name"><?= $data['nama']; ?></p>
										<span class="position"><?= $data['mengajar']; ?></span>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section> -->

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h2 class="mb-4">Berita Terbaru</h2>
			</div>
		</div>
		<div class="row d-flex">
			<?php foreach ($getNewInformasi as $data) : ?>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="<?= base_url('FrontDetailController/getDetaiInformasi/') . $data['slug_judul'] ?>" class="block-20" style="background-image: url('<?= base_url('/assets/assetGambar/informasi/') . $data['foto'] ?>');"></a>
						<div class="text p-4 d-block">
							<div class="meta mb-3">
								<div><a href="#"><?= date("d/ M/ Y", $data['created_at'],); ?></a></div>
								<div><a href="#"><?= $data['ouner_post']; ?></a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> Berita Terbaru</a></div>
							</div>
							<h3 class="heading mt-3"><a href="<?= base_url('FrontDetailController/getDetaiInformasi/') . $data['slug_judul'] ?>"><?= $data['judul']; ?></a></h3>
							<p><?= $data['isi']; ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- <section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Ekstrakulikuler</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url('assets/FrontAssets/') ?>images/event-1.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry d-flex align-self-stretch flex-column-reverse">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url('assets/FrontAssets/') ?>images/event-2.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url('assets/FrontAssets/') ?>images/event-3.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Pendaftaran Siswa Baru</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4 class="text-center">Silahkan isi dengan hati-hati dan data yang benar</h4>
				<form method="POST" action="<?= base_url('FrontController/storeSiswaBaruFront') ?>">
					<div class="row">
						<div class="col">
							<div class="form-group row">
								<label for="nama" class="col-sm-6 col-form-label">Nama</label>
								<div class="col-sm-10">
									<input type="text" name="nama" class="form-control-plaintext" id="nama" placeholder="Masukan Nama" style="border: 1px solid black ;" required>
									<?= form_error('nama', '  <small class="text-danger  mb-3 ml-2">', '</small>') ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="jabatan" class="col-sm-6 col-form-label">Jenis Kelamin</label>
								<div class="col-sm-10">
									<select class="form-control-plaintext" name="gender" style="border: 1px solid black ;">
										<option value="1">-- Pilih Jenis Kelamin --</option>
										<option value="LAKI-LAKI">Laki-laki</option>
										<option value="PEREMPUAN">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="Asal Sekolah" class="col-sm-6 col-form-label">Asal Sekolah</label>
								<div class="col-sm-10">
									<input type="text" name="asal_sekolah" class="form-control-plaintext" id="Asal Sekolah" placeholder="Masukan Asal Sekolah" style="border: 1px solid black ;" required>
									<?= form_error('asal_sekolah', '  <small class="text-danger  mb-3 ml-2">', '</small>') ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="Tempat Tanggal Lahir" class="col-sm-6 col-form-label">Tempat Lahir</label>
								<div class="col-sm-10">
									<input type="text" name="tempat_lahir" class="form-control-plaintext" id="Tempat Tanggal Lahir" placeholder="Masukan Tempat Tanggal Lahir" style="border: 1px solid black ;" required>
									<?= form_error('tempat_lahir', '  <small class="text-danger  mb-3 ml-2">', '</small>') ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="Tempat Tanggal Lahir" class="col-sm-6 col-form-label">Tanggal Lahir</label>
								<div class="col-sm-10">
									<input type="date" name="tgl_lahir" class="form-control-plaintext" id="Tempat Tanggal Lahir" placeholder="Tanggal Lahir" style="border: 1px solid black ;" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="Nik" class="col-sm-6 col-form-label">Nik</label>
								<div class="col-sm-10">
									<input type="number" name="nik" class="form-control-plaintext" id="Nik" placeholder="Masukan Nik" style="border: 1px solid black ;" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="Alamat" class="col-sm-6 col-form-label">Alamat</label>
								<div class="col-sm-10">
									<input type="text" name="alamat" class="form-control-plaintext" id="Alamat" placeholder="Masukan Alamat" style="border: 1px solid black ;" required>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="form-group row">
								<label for="No Hp" class="col-sm-6 col-form-label">No Hp</label>
								<div class="col-sm-10">
									<input type="text" name="no_hp" class="form-control-plaintext" id="No Hp" placeholder="Masukan No Hp" style="border: 1px solid black ;" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="Email" class="col-sm-6 col-form-label">Email</label>
								<div class="col-sm-10">
									<input type="email" name="email" class="form-control-plaintext" id="Email" placeholder="Masukan Email" style="border: 1px solid black ;" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="nama ayah" class="col-sm-6 col-form-label">Nama ayah</label>
								<div class="col-sm-10">
									<input type="text" name="nama_ayah" class="form-control-plaintext" id="nama ayah" placeholder="Masukan nama ayah" style="border: 1px solid black ;" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="pekerjaan_ayah" class="col-sm-6 col-form-label">Pekerjaan_ayah</label>
								<div class="col-sm-10">
									<input type="text" name="pekerjaan_ayah" class="form-control-plaintext" id="pekerjaan_ayah" placeholder="Masukan pekerjaan_ayah" style="border: 1px solid black ;" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="nama ibu" class="col-sm-6 col-form-label">Nama ibu</label>
								<div class="col-sm-10">
									<input type="text" name="nama_ibu" class="form-control-plaintext" id="nama_ibu" placeholder="Masukan nama ibu" style="border: 1px solid black ;" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="pekerjaan ibu" class="col-sm-6 col-form-label">Pekerjaan ibu</label>
								<div class="col-sm-10">
									<input type="text" name="pekerjaan_ibu" class="form-control-plaintext" id="pekerjaan_ibu" placeholder="Masukan pekerjaan ibu" style="border: 1px solid black ;" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="nilai un" class="col-sm-6 col-form-label">Nilai un</label>
								<div class="col-sm-10">
									<input type="number" name="nilai_un" class="form-control-plaintext" id="nilai un" placeholder="Masukan nilai un" style="border: 1px solid black ;" required>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center mt-3">
						<button type="resset" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
