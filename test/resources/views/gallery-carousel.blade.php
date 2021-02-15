<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modzee Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
		
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>
		
		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/a5757c3548.js" crossorigin="anonymous"></script>

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		
		<style>
			body{
				background: #d9e7e8;
				background: -webkit-linear-gradient(to bottom right, #d9e7e8, #d8be9b, #6b728c, #c3b0a9);
				background: linear-gradient(to bottom right, #d9e7e8, #d8be9b, #6b728c, #c3b0a9);
			}
			
			p{
				word-wrap: break-word;
			}
			
			.row.display-flex {
				display: flex;
				flex-wrap: wrap;
			}
			
			.row.display-flex > [class*='col-'] {
				flex-grow: 1;
			}
			
			@media only screen and (max-width: 991px){
				.image-title{
					font-size: 1rem;
				}
			}
			
			.text-pink{
				color: #d63384;
			}
			
			.image-title{
				color: #138298;
			}
			
			.carousel-indicators {
				position: initial;
				margin-top: 2.5rem;
				margin-bottom: 2.5rem;
			}
	
			.carousel {
				position: relative;
			}

			.carousel-caption {
				position: absolute;
				background: rgba(0,0,0,0.4);
				padding: 15px 10px;
			}

			.carousel-control-prev,
			.carousel-control-next {
				width: 5%;
			}
			
			html,body{
				min-height: 100%;
			}
			
			.fa-heart{
				font-size: small;
			}
			
		</style>
		
    </head>
    <body>
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
			<!-- Brand -->
			<a class="navbar-brand" href="javascript:;">Welcome</a>

			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ Route::currentRouteName() == 'carousel' ? 'active' : '' }}" href="{{ route('carousel') }}">Carousel</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ Route::currentRouteName() == 'fancybox' ? 'active' : '' }}" href="{{ route('fancybox') }}">Fancybox</a>
					</li>
				</ul>
			</div>
		</nav>
		
        <div class="container my-5">
			<div class="row">
				<div class="col-sm-12 bg-white px-5 py-3">
					<div class="row">
						<div class="col-sm-2 d-flex flex-wrap align-items-center">
							<img src="{{ url('/img/profile.jpg') }}" class="rounded-circle img-fluid" alt="Cinque Terre">
						</div>
						<div class="col-sm-10 ">
							<div class="row pt-2">
								<div class="col-sm-12">
									<h2><strong>{{ $user->name }}</strong></h2>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-8">
									<p class="text-secondary">Bio<br>
									{{ $user->bio }}</p>
								</div>
								<div class="col-sm-4">
									<p class="text-secondary">Phone<br>
									<span class="text-pink">{{ $user->phone }}</span><br>
									Email<br>
									<span class="text-pink">{{ $user->email }}</span></p>
								</div>
							</div>
						</div>
				
					</div>
				</div>
			</div>
			<div id="gallery" class="carousel slide mt-5" data-ride="carousel">
			
				<!-- Slides -->
				<div class="carousel-inner">
					@foreach($user->images as $key => $image)
					
					<div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
						<img class="d-block w-100" src="{{ asset($image->img) }}" alt="{{ $image->title }}">
						<div class="carousel-caption">
							<h3>@if($image->featured)<i class="fas fa-heart text-danger"></i>@endif {{ $image->title }}</h3>
							<p>{{ $image->description }}</p>
							<p class="small mb-0 w-100 text-right"><span class="font-weight-bold">{{ \Carbon\Carbon::parse($image->date)->format('Y/m/d') }}</span></p>
						</div> 
					</div>

					@endforeach
				</div>
				
				<!-- Controls -->
				<a class="carousel-control-prev" href="#gallery" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#gallery" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			
				<!-- Indicators -->
				<ol class="carousel-indicators">
                    @foreach($user->images as $key => $image)
                        <li data-target="#gallery" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
			</div>
		
		</div>
    </body>
</html>
