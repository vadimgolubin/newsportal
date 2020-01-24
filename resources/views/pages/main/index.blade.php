@extends('layouts.layout')


@section('content')

	<!-- Hero section -->
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slider-bg-1.jpg">
				<div class="container">
					<h2>News By Vadim</h2>
					<p>Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor,<br>sit amet elementum lorem. Ut cursus tempor turpis.</p>
					
				</div>
			</div>
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slider-bg-2.jpg">
				<div class="container">
					<h2>AutoBlog</h2>
					<p>Everything you need to know about pricing,<br> specs, features, fuel economy and safety.</p>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end-->


	<!-- Intro section -->
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">20.01.2019  /  in <a href="">Music</a></div>
						<h3>car news1 title</h3>
						<p>car news1 text</p>
						<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">02.07.2019 /  in <a href="">Technical</a></div>
						<h3>car news2 titlе</h3>
						<p>car news2 text</p>
						<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">09.10.2019  /  in <a href="">Technical</a></div>
						<h3>car news3 titlе</h3>
						<p>car news3 text</p>
						<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="section-title text-white">
						<h2>Latest News</h2>
					</div>
					<ul class="blog-filter">
						<li><a href="#">Music</a></li>
						<li><a href="#">Technical</a></li>
						<li><a href="#">Seatingmod</a></li>
						<li><a href="#">Models</a></li>
					</ul>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="./img/blog/1.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="./img/blog/2.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="./img/blog/3.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<h4 class="widget-title">Trending</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./img/blog-widget/1.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./img/blog-widget/2.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./img/blog-widget/3.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./img/blog-widget/4.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">Topics</h4>
								<ul>
									<li><a href="">Motorsports</a></li>
									<li><a href="">Podcasts</a></li>
									<li><a href="">Weird car news</a></li>
									<li><a href="">Green</a></li>
									<li><a href="">Humor</a></li>
									<li><a href="">Market</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
						<a href="#" class="add">
							<img src="./img/add.jpg" alt="">
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->


	


	



	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe  <img src="img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->


@endsection
