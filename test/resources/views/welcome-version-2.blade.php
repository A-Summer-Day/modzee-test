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
	
		</style>
		
    </head>
    <body>
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
			<!-- Brand -->
			<a class="navbar-brand" href="javascript:;">Photo Gallery</a>

			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('home') }}">Version 1</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('home.version.two') }}">Version 2</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('home.version.three') }}">Version 3</a>
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
			<div class="row mt-5 bg-transparent ">
				<div class="row row-eq-height">
				@foreach($user->images as $image)
					<div class="col-sm-4 mb-4">
						<div class="bg-white rounded shadow-sm h-100">
							<img src="{{ asset($image->img) }}" alt="{{ $image->title }}" class="img-fluid card-img-top">
							<div class="p-4">
								<h5 class="image-title">{{ $image->title }}</h5>
								<p class="small text-muted mb-0 ">{{ $image->description }}</p>
								<div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4 w-100">
									@if($image->featured)<i class="fas fa-heart text-danger"></i>@endif
									<p class="small mb-0 w-100 text-right"><span class="font-weight-bold">{{ \Carbon\Carbon::parse($image->date)->format('Y/m/d') }}</span></p>
								</div>
							</div>
						</div>
					</div>
				@endforeach
				</div>
			</div>
		</div>
    </body>
</html>
