<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modzee Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
		
		<!-- Scripts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
		
		
		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/a5757c3548.js" crossorigin="anonymous"></script>

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />

		
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
				
			}
			
			html,body{
				min-height: 100%;
			}
			
			.fa-heart{
				font-size: small;
				margin-right: 0.5rem;
			}
			
			.imglist a {
				display: inline-block;
				margin: 10px 10px 0 0; 
			}
			
			.imglist a:hover {
				color: #ffffff;
				text-decoration: none;
			}
			
			.imglist a img{
				max-width: 100%;
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
			<div id="gallery" class="row my-5 imglist">
				@foreach($user->images as $image)
					<div class="col-sm-6 mb-6">
						 <a href="{{ asset($image->img) }}" data-fancybox="images" data-caption="{{ $image->description }}">
							<img src="{{ asset($image->img) }}" alt="{{ $image->title }}"/>
							<h5 class="image-title text-center text-white mt-2">@if($image->featured)<i class="fas fa-heart text-danger"></i>@endif  {{ $image->title }}<br>
							<span class="h6">{{ \Carbon\Carbon::parse($image->date)->format('Y/m/d') }}</span>
							</h5>
						</a>
					</div>
				
				@endforeach
			</div>
		
		</div>
		<script type="text/javascript">
			var $= jQuery.noConflict();

			$(document).ready(function() {
				$('[data-fancybox="images"]').fancybox({
					buttons : [ 
						'slideShow',
						'share',
						'zoom',
						'fullScreen',
						'close'
					],
					thumbs : {
						autoStart : true
					}
				});
			});
		</script>
    </body>
</html>
