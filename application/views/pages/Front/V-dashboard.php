<!-- Start header  -->
<header id="mu-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="mu-header-area">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="mu-header-top-left">
								<div class="mu-top-email">
									<i class="fa fa-envelope"></i>
									<span>info@markups.io</span>
								</div>
								<div class="mu-top-phone">
									<i class="fa fa-phone"></i>
									<span>(568) 986 652</span>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="mu-header-top-right">
								<nav>
									<ul class="mu-top-social-nav">
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
										<li><a href="#"><span class="fa fa-youtube"></span></a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- End header  -->
<!-- Start menu -->
<section id="mu-menu">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- LOGO -->
				<!-- TEXT BASED LOGO -->
				<a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>Varsity</span></a>
				<!-- IMG BASED LOGO  -->
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="#">Profile</a> </li>
					<li><a href="gallery.html">Data Siswa</a></li>
					<li><a href="gallery.html">Organisasi</a></li>
					<li><a href="gallery.html">Kegiatan</a></li>
					<li><a href="gallery.html">Informasi</a></li>
					<li><a href="<?= base_url('AuthController') ?>" target="blank">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
</section>
<!-- End menu -->
<!-- Start search box -->
<div id="mu-search">
	<div class="mu-search-area">
		<button class="mu-search-close"><span class="fa fa-close"></span></button>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form class="mu-search-form">
						<input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End search box -->
<!-- Start Slider -->
<section id="mu-slider">
	<!-- Start single slider item -->
	<div class="mu-slider-single">
		<div class="mu-slider-img">
			<figure>
				<img src="<?= base_url('assets/') ?>FrontAssets/assets/img/das.png" alt="img">
			</figure>
		</div>
		<div class="mu-slider-content">
			<h4>Welcome To Varsity</h4>
			<span></span>
			<h2>We Will Help You To Learn</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
			<a href="#" class="mu-read-more-btn">Read More</a>
		</div>
	</div>
	<!-- Start single slider item -->
	<!-- Start single slider item -->
	<div class="mu-slider-single">
		<div class="mu-slider-img">
			<figure>
				<img src="<?= base_url('assets/') ?>FrontAssets/assets/img/lap.jpg" alt="img">
			</figure>
		</div>
		<div class="mu-slider-content">
			<h4>Premiumu Quality Free Template</h4>
			<span></span>
			<h2>Best Education Template Ever</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
			<a href="#" class="mu-read-more-btn">Read More</a>
		</div>
	</div>
	<!-- Start single slider item -->
</section>
<!-- End Slider -->

<!-- Start informasi dan kalender -->
<section id="mu-about-us">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mu-about-us-area">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="mu-about-us-left">
								<!-- Start Title -->
								<div class="mu-title">
									<h2>Informasi</h2>
								</div>
								<!-- End Title -->
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum pariatur fuga eveniet soluta aspernatur rem, nam voluptatibus voluptate voluptates sapiente, inventore. Voluptatem, maiores esse molestiae.</p>
								<ul>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
									<li>Saepe a minima quod iste libero rerum dicta!</li>
									<li>Voluptas obcaecati, iste porro fugit soluta consequuntur. Veritatis?</li>
									<li>Ipsam deserunt numquam ad error rem unde, omnis.</li>
									<li>Repellat assumenda adipisci pariatur ipsam eos similique, explicabo.</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quaerat harum facilis excepturi et? Mollitia!</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="mu-about-us-left">
								<div class="mu-title">
									<h2>Kalender</h2>
								</div>
								<div class="card">
									<div class="mu-title" id='calendar' style="box-shadow: 10px 10px 15px rgb(32, 31, 31);">

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
<!-- End informasi dan kalender -->

<!-- Start about jumlah data app -->
<section id="mu-abtus-counter">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mu-abtus-counter-area">
					<div class="row">
						<!-- Start counter item -->
						<div class="col-lg-3 col-md-3 col-sm-3">
							<div class="mu-abtus-counter-single">
								<span class="fa fa-book"></span>
								<h4 class="counter">568</h4>
								<p>Guru</p>
							</div>
						</div>
						<!-- End counter item -->
						<!-- Start counter item -->
						<div class="col-lg-3 col-md-3 col-sm-3">
							<div class="mu-abtus-counter-single">
								<span class="fa fa-users"></span>
								<h4 class="counter">3500</h4>
								<p>Siswa</p>
							</div>
						</div>
						<!-- End counter item -->
						<!-- Start counter item -->
						<div class="col-lg-3 col-md-3 col-sm-3">
							<div class="mu-abtus-counter-single">
								<span class="fa fa-flask"></span>
								<h4 class="counter">65</h4>
								<p>Pegawai sekolah</p>
							</div>
						</div>
						<!-- End counter item -->
						<!-- Start counter item -->
						<div class="col-lg-3 col-md-3 col-sm-3">
							<div class="mu-abtus-counter-single no-border">
								<span class="fa fa-user-secret"></span>
								<h4 class="counter">250</h4>
								<p>Tenaga Administrasi</p>
							</div>
						</div>
						<!-- End counter item -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End about jumlah data app -->

<!-- Start features section -->
<section id="mu-features" style="display: none;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="mu-features-area">
					<!-- Start Title -->
					<div class="mu-title">
						<h2>Our Features</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsa ea maxime mollitia, vitae voluptates, quod at, saepe reprehenderit totam aliquam architecto fugiat sunt animi!</p>
					</div>
					<!-- End Title -->
					<!-- Start features content -->
					<div class="mu-features-content">
						<div class="row">
							<div class="col-lg-4 col-md-4  col-sm-6">
								<div class="mu-single-feature">
									<span class="fa fa-book"></span>
									<h4>Professional Courses</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
									<a href="#">Read More</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="mu-single-feature">
									<span class="fa fa-users"></span>
									<h4>Expert Teachers</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
									<a href="#">Read More</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="mu-single-feature">
									<span class="fa fa-laptop"></span>
									<h4>Online Learning</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
									<a href="#">Read More</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="mu-single-feature">
									<span class="fa fa-microphone"></span>
									<h4>Audio Lessons</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
									<a href="#">Read More</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="mu-single-feature">
									<span class="fa fa-film"></span>
									<h4>Video Lessons</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
									<a href="#">Read More</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="mu-single-feature">
									<span class="fa fa-certificate"></span>
									<h4>Professional Certificate</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
									<a href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End features content -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End features section -->

<!-- Start latest course section -->
<section id="mu-latest-courses" style="display: none;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="mu-latest-courses-area">
					<!-- Start Title -->
					<div class="mu-title">
						<h2>Latest Courses</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsa ea maxime mollitia, vitae voluptates, quod at, saepe reprehenderit totam aliquam architecto fugiat sunt animi!</p>
					</div>
					<!-- End Title -->
					<!-- Start latest course content -->
					<div id="mu-latest-course-slide" class="mu-latest-courses-content">
						<div class="col-lg-4 col-md-4 col-xs-12">
							<div class="mu-latest-course-single">
								<figure class="mu-latest-course-img">
									<a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
									<figcaption class="mu-latest-course-imgcaption">
										<a href="#">Drawing</a>
										<span><i class="fa fa-clock-o"></i>90Days</span>
									</figcaption>
								</figure>
								<div class="mu-latest-course-single-content">
									<h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
									<div class="mu-latest-course-single-contbottom">
										<a class="mu-course-details" href="#">Details</a>
										<span class="mu-course-price" href="#">$165.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-xs-12">
							<div class="mu-latest-course-single">
								<figure class="mu-latest-course-img">
									<a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
									<figcaption class="mu-latest-course-imgcaption">
										<a href="#">Engineering </a>
										<span><i class="fa fa-clock-o"></i>75Days</span>
									</figcaption>
								</figure>
								<div class="mu-latest-course-single-content">
									<h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
									<div class="mu-latest-course-single-contbottom">
										<a class="mu-course-details" href="#">Details</a>
										<span class="mu-course-price" href="#">$165.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-xs-12">
							<div class="mu-latest-course-single">
								<figure class="mu-latest-course-img">
									<a href="#"><img src="assets/img/courses/3.jpg" alt="img"></a>
									<figcaption class="mu-latest-course-imgcaption">
										<a href="#">Academic</a>
										<span><i class="fa fa-clock-o"></i>45Days</span>
									</figcaption>
								</figure>
								<div class="mu-latest-course-single-content">
									<h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
									<div class="mu-latest-course-single-contbottom">
										<a class="mu-course-details" href="#">Details</a>
										<span class="mu-course-price" href="#">$165.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-xs-12">
							<div class="mu-latest-course-single">
								<figure class="mu-latest-course-img">
									<a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
									<figcaption class="mu-latest-course-imgcaption">
										<a href="#">Drawing</a>
										<span><i class="fa fa-clock-o"></i>90Days</span>
									</figcaption>
								</figure>
								<div class="mu-latest-course-single-content">
									<h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
									<div class="mu-latest-course-single-contbottom">
										<a class="mu-course-details" href="#">Details</a>
										<span class="mu-course-price" href="#">$165.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-xs-12">
							<div class="mu-latest-course-single">
								<figure class="mu-latest-course-img">
									<a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
									<figcaption class="mu-latest-course-imgcaption">
										<a href="#">Engineering </a>
										<span><i class="fa fa-clock-o"></i>75Days</span>
									</figcaption>
								</figure>
								<div class="mu-latest-course-single-content">
									<h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
									<div class="mu-latest-course-single-contbottom">
										<a class="mu-course-details" href="#">Details</a>
										<span class="mu-course-price" href="#">$165.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-xs-12">
							<div class="mu-latest-course-single">
								<figure class="mu-latest-course-img">
									<a href="#"><img src="assets/img/courses/3.jpg" alt="img"></a>
									<figcaption class="mu-latest-course-imgcaption">
										<a href="#">Academic</a>
										<span><i class="fa fa-clock-o"></i>45Days</span>
									</figcaption>
								</figure>
								<div class="mu-latest-course-single-content">
									<h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
									<div class="mu-latest-course-single-contbottom">
										<a class="mu-course-details" href="#">Details</a>
										<span class="mu-course-price" href="#">$165.00</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End latest course content -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End latest course section -->

<!-- Start guru kita -->
<section id="mu-our-teacher" style="display: none;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mu-our-teacher-area">
					<!-- begain title -->
					<div class="mu-title">
						<h2>Guru kita</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, repudiandae, suscipit repellat minus molestiae ea.</p>
					</div>
					<!-- end title -->
					<!-- begain our teacher content -->
					<div class="mu-our-teacher-content">
						<div class="row">
							<div class="col-lg-3 col-md-3  col-sm-6">
								<div class="mu-our-teacher-single">
									<figure class="mu-our-teacher-img">
										<img src="assets/img/teachers/teacher-01.png" alt="teacher img">
										<div class="mu-our-teacher-social">
											<a href="#"><span class="fa fa-facebook"></span></a>
											<a href="#"><span class="fa fa-twitter"></span></a>
											<a href="#"><span class="fa fa-linkedin"></span></a>
											<a href="#"><span class="fa fa-google-plus"></span></a>
										</div>
									</figure>
									<div class="mu-ourteacher-single-content">
										<h4>Brian Dean</h4>
										<span>Math Teacher</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="mu-our-teacher-single">
									<figure class="mu-our-teacher-img">
										<img src="assets/img/teachers/teacher-02.png" alt="teacher img">
										<div class="mu-our-teacher-social">
											<a href="#"><span class="fa fa-facebook"></span></a>
											<a href="#"><span class="fa fa-twitter"></span></a>
											<a href="#"><span class="fa fa-linkedin"></span></a>
											<a href="#"><span class="fa fa-google-plus"></span></a>
										</div>
									</figure>
									<div class="mu-ourteacher-single-content">
										<h4>James Hein</h4>
										<span>Physics Teacher</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="mu-our-teacher-single">
									<figure class="mu-our-teacher-img">
										<img src="assets/img/teachers/teacher-03.png" alt="teacher img">
										<div class="mu-our-teacher-social">
											<a href="#"><span class="fa fa-facebook"></span></a>
											<a href="#"><span class="fa fa-twitter"></span></a>
											<a href="#"><span class="fa fa-linkedin"></span></a>
											<a href="#"><span class="fa fa-google-plus"></span></a>
										</div>
									</figure>
									<div class="mu-ourteacher-single-content">
										<h4>Rebeca Michel</h4>
										<span>English Teacher</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="mu-our-teacher-single">
									<figure class="mu-our-teacher-img">
										<img src="assets/img/teachers/teacher-04.png" alt="teacher img">
										<div class="mu-our-teacher-social">
											<a href="#"><span class="fa fa-facebook"></span></a>
											<a href="#"><span class="fa fa-twitter"></span></a>
											<a href="#"><span class="fa fa-linkedin"></span></a>
											<a href="#"><span class="fa fa-google-plus"></span></a>
										</div>
									</figure>
									<div class="mu-ourteacher-single-content">
										<h4>John Doe</h4>
										<span>Biology Teacher</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End our teacher content -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End guru kita -->

<!-- Start testimonial -->
<section id="mu-testimonial" style="display: none;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mu-testimonial-area">
					<div id="mu-testimonial-slide" class="mu-testimonial-content">
						<!-- start testimonial single item -->
						<div class="mu-testimonial-item">
							<div class="mu-testimonial-quote">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
								</blockquote>
							</div>
							<div class="mu-testimonial-img">
								<img src="assets/img/testimonial-1.png" alt="img">
							</div>
							<div class="mu-testimonial-info">
								<h4>John Doe</h4>
								<span>Happy Student</span>
							</div>
						</div>
						<!-- end testimonial single item -->
						<!-- start testimonial single item -->
						<div class="mu-testimonial-item">
							<div class="mu-testimonial-quote">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
								</blockquote>
							</div>
							<div class="mu-testimonial-img">
								<img src="assets/img/testimonial-3.png" alt="img">
							</div>
							<div class="mu-testimonial-info">
								<h4>Rebaca Michel</h4>
								<span>Happy Parent</span>
							</div>
						</div>
						<!-- end testimonial single item -->
						<!-- start testimonial single item -->
						<div class="mu-testimonial-item">
							<div class="mu-testimonial-quote">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
								</blockquote>
							</div>
							<div class="mu-testimonial-img">
								<img src="assets/img/testimonial-2.png" alt="img">
							</div>
							<div class="mu-testimonial-info">
								<h4>Stev Smith</h4>
								<span>Happy Student</span>
							</div>
						</div>
						<!-- end testimonial single item -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End testimonial -->

<!-- Start from blog -->
<section id="mu-from-blog" style="display: none;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mu-from-blog-area">
					<!-- start title -->
					<div class="mu-title">
						<h2>From Blog</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae quae vero ut natus. Dolore!</p>
					</div>
					<!-- end title -->
					<!-- start from blog content   -->
					<div class="mu-from-blog-content">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<article class="mu-blog-single-item">
									<figure class="mu-blog-single-img">
										<a href="#"><img src="assets/img/blog/blog-1.jpg" alt="img"></a>
										<figcaption class="mu-blog-caption">
											<h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
										</figcaption>
									</figure>
									<div class="mu-blog-meta">
										<a href="#">By Admin</a>
										<a href="#">02 June 2016</a>
										<span><i class="fa fa-comments-o"></i>87</span>
									</div>
									<div class="mu-blog-description">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
										<a class="mu-read-more-btn" href="#">Read More</a>
									</div>
								</article>
							</div>
							<div class="col-md-4 col-sm-4">
								<article class="mu-blog-single-item">
									<figure class="mu-blog-single-img">
										<a href="#"><img src="assets/img/blog/blog-2.jpg" alt="img"></a>
										<figcaption class="mu-blog-caption">
											<h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
										</figcaption>
									</figure>
									<div class="mu-blog-meta">
										<a href="#">By Admin</a>
										<a href="#">02 June 2016</a>
										<span><i class="fa fa-comments-o"></i>87</span>
									</div>
									<div class="mu-blog-description">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
										<a class="mu-read-more-btn" href="#">Read More</a>
									</div>
								</article>
							</div>
							<div class="col-md-4 col-sm-4">
								<article class="mu-blog-single-item">
									<figure class="mu-blog-single-img">
										<a href="#"><img src="assets/img/blog/blog-3.jpg" alt="img"></a>
										<figcaption class="mu-blog-caption">
											<h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
										</figcaption>
									</figure>
									<div class="mu-blog-meta">
										<a href="#">By Admin</a>
										<a href="#">02 June 2016</a>
										<span><i class="fa fa-comments-o"></i>87</span>
									</div>
									<div class="mu-blog-description">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
										<a class="mu-read-more-btn" href="#">Read More</a>
									</div>
								</article>
							</div>
						</div>
					</div>
					<!-- end from blog content   -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End from blog -->

<!-- Start footer -->
<footer id="mu-footer">
	<!-- start footer top -->
	<div class="mu-footer-top">
		<div class="container">
			<div class="mu-footer-top-area">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="mu-footer-widget">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="">Features</a></li>
								<li><a href="">Course</a></li>
								<li><a href="">Event</a></li>
								<li><a href="">Sitemap</a></li>
								<li><a href="">Term Of Use</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="mu-footer-widget">
							<h4>Student Help</h4>
							<ul>
								<li><a href="">Get Started</a></li>
								<li><a href="#">My Questions</a></li>
								<li><a href="">Download Files</a></li>
								<li><a href="">Latest Course</a></li>
								<li><a href="">Academic News</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="mu-footer-widget">
							<h4>News letter</h4>
							<p>Get latest update, news & academic offers</p>
							<form class="mu-subscribe-form">
								<input type="email" placeholder="Type your Email">
								<button class="mu-subscribe-btn" type="submit">Subscribe!</button>
							</form>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="mu-footer-widget">
							<h4>Contact</h4>
							<address>
								<p>P.O. Box 320, Ross, California 9495, USA</p>
								<p>Phone: (415) 453-1568 </p>
								<p>Website: www.markups.io</p>
								<p>Email: info@markups.io</p>
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer top -->
