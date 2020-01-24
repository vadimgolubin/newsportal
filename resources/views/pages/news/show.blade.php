@extends('layouts.layout')

@section('content')

	<!-- Blog page -->
	<section class="blog-page">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="big-blog-item">
						<img src="{{ asset('storage/'. $news->picture) }}" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta">15.06.2019  /  in <a href="">Technical</a></div>
							<h3>{{ $news->heading     }}</h3>
							<p>{{ $news->post }}</p>
						</div>
					</div>
					@foreach($comments as $key => $comment)
                    <div>
						{{ $comment->created_at}}
                        <h4 style="color:white;">{{ $comment->login}}</h4>
                        <p>{{ $comment->comment}}</p>
                    </div>
                    <hr>
                    <br>
                    @endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- Blog page end-->


@endsection
