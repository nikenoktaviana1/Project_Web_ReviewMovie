<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">MR Movie Review</h1>
							<small class="site-description">Temukan Film Terbaik di sini</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="review.html">Movie reviews</a></li>
							<li class="menu-item"><a href="contact.html">Contact</a></li>
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="row">
							<div class="col-md-9">
								<div class="slider">
									<ul class="slides">
										<li><a href="#"><img src="poster/Mangga Muda.jpg" alt="Slide 1" ></a></li>
										<li><a href="#"><img src="poster/Teman Tapi Menikah 2.jpg" alt="Slide 2" ></a></li>
										<li><a href="#"><img src="poster/Dignitate.jpg" alt="Slide 3" ></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="row">
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="#"><img src="poster/Mariposa.jpg" alt="Movie 1"></a>
										</div>
									</div>
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="#"><img src="poster/Sejuta Sayang Untuknya.jpg" alt="Movie 2"></a>
										</div>
									</div>
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="#"><img src="poster/Sebelum Iblis Menjemput Ayat 2.jpg" alt="Movie 2"></a>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .row -->
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="poster/Nanti Kita Cerita Tentang Hari Ini.jpg" alt="Movie 3"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="poster/Dua Garis Biru.png" alt="Movie 4"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="poster/Keluarga Cemara.jpg" alt="Movie 5"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="poster/Film Terlalu Tampan.jpg" alt="Movie 6"></a>
								</div>
							</div>
						</div> <!-- .row -->
						
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">December premiere</h2>
								<p>Bulan Desember ini ada beberapa film Indonesia yang tayang di platform digital, seperti Netflix, Iflix, Disney Holstar, dan Bioskop Online lainnya.</p>
								<ul class="movie-schedule">
									<li>
										<div class="date">22/12/2020</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">19/12/2020</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">06/12/2020</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12/2020</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
							<div class="col-md-4">
								<h2 class="section-title">November premiere</h2>
								<p>Bulan November ini ada beberapa film Indonesia yang tayang di platform digital, seperti Netflix, Iflix, Disney Holstar, dan Bioskop Online lainnya.</p>
								<ul class="movie-schedule">
									<li>
										<div class="date">29/11/2020</div>
										<h2 class="entry-title"><a href="#">Film Dua Garis Biru</a></h2>
									</li>
									<li>
										<div class="date">20/11/2020</div>
										<h2 class="entry-title"><a href="#">Film Mariposa</a></h2>
									</li>
									<li>
										<div class="date">19/11/2020</div>
										<h2 class="entry-title"><a href="#">Film Anak Garuda</a></h2>
									</li>
									<li>
										<div class="date">16/11/2020</div>
										<h2 class="entry-title"><a href="#">Film Denting Kematian</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
							<div class="col-md-4">
								<h2 class="section-title">October premiere</h2>
								<p>Bulan Oktober ini ada beberapa film Indonesia yang tayang di platform digital, seperti Netflix, Iflix, Disney Holstar, dan Bioskop Online lainnya.</p>
								<ul class="movie-schedule">
									<li>
										<div class="date">29/10/2020</div>
										<h2 class="entry-title"><a href="#">Film Nanti Kita Cerita Tentang Hari ini</a></h2>
									</li>
									<li>
										<div class="date">16/10/2020</div>
										<h2 class="entry-title"><a href="#">PFilm Yowis Ben 3</a></h2>
									</li>
									<li>
										<div class="date">14/10/2020</div>
										<h2 class="entry-title"><a href="#">Film Teman Tapi Menikah 2</a></h2>
									</li>
									<li>
										<div class="date">11/10/2020</div>
										<h2 class="entry-title"><a href="#">Film Dignitate</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">About Us</h3>
								<p>MV Movie Review adalah Website yang berisi informasi, rekomendasi, dan review Film Indonesia</p>
							</div>
						</div>
				
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Help Center</h3>
								<ul class="no-bullet">
									<li><a href="#">xxxxxxxxx</a></li>
									<li><a href="#">xxxxxxxxx</a></li>
									<li><a href="#">xxxxxxxxx</a></li>
									<li><a href="#">xxxxxxxxx</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<ul class="no-bullet">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google+</a></li>
									<li><a href="#">Instagram</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<form action="#" class="subscribe-form">
									<input type="text" placeholder="Email Address">
								</form>
							</div>
						</div>
					</div> <!-- .row -->

					<center><div class="colophon">Copyright 2020 MV Review, Designed by Themezy. All rights reserved</div></center>
				</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>