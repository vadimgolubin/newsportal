@extends('layouts.layout')

@section('content')
    
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/3.jpg">
		<div class="page-info">
			<h2>Blog</h2>
			<div class="site-breadcrumb">
				<a href="">Home</a>  /
				<span>News</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

	<!-- Blog page -->
	<section class="blog-page">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<ul class="blog-filter">
						<li><a href="#">Music</a></li>
						<li><a href="#">Tech</a></li>
						<li><a href="#">Seating</a></li>
						<li><a href="#">Models</a></li>
					</ul>
                    
                    @foreach ($news as $nw)
                        <div class="big-blog-item">
						<img src="{{ asset('storage/'.$nw->picture)}}" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>{{ $nw->heading }}</h3>
							<p>{{ $nw->post }}</p>
							<a href="{{ route('news.show', $nw->id) }}" class="read-more">Read More <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
                    
                    
                    
                    @endforeach

					
					<div class="site-pagination">
						<a href="#" class="active">Page One</a>
						<a href="#">Page Two</a>
						<a href="#">Page Three</a>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<form class="search-widget">
								<input type="text">
								<button>search</button>
							</form>
						</div>
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
								<h4 class="widget-title">categories</h4>
								<ul>
									<li><a href="">Games</a></li>
									<li><a href="">Gaming Tips & Tricks</a></li>
									<li><a href="">Online Games</a></li>
									<li><a href="">Team Games</a></li>
									<li><a href="">Community</a></li>
									<li><a href="">Uncategorized</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
							<h4 class="widget-title">Latest Comments</h4>
							<div class="latest-comments">
								<div class="lc-item">
									<img src="./img/blog-widget/1.jpg" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">Maria Smith</a> <span>On</span> The best online game out there </div>
								</div>
								<div class="lc-item">
									<img src="./img/blog-widget/2.jpg" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">Maria Smith</a> <span>On</span> The best online game out there </div>
								</div>
								<div class="lc-item">
									<img src="./img/blog-widget/3.jpg" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">Maria Smith</a> <span>On</span> The best online game out there </div>
								</div>
								<div class="lc-item">
									<img src="./img/blog-widget/4.jpg" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">Maria Smith</a> <span>On</span> The best online game out there </div>
								</div>
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
	<!-- Blog page end-->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe <img src="img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->
@endsection