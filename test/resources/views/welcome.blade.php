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

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		
    </head>
    <body>
        <div class="container mt-5">
			<div class="row">
				<div class="col-sm-12 bg-white">
					<div class="row">
						<div class="col-sm-3">
							<img src="{{url('/img/profile.jpeg')}}" class="img-circle" alt="Cinque Terre">
						</div>
						<div class="col-sm-9">
							<div class="row">
								<div class="col-sm-12">
									<h1>{{ $user->name }}</h1>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-7">
									<p>Bio<br>
									{{ $user->bio }}</p>
								</div>
								<div class="col-sm-5">
									<p>Phone<br>
									{{ $user->phone }}<br>
									Email<br>
									{{ $user->email }}</p>
								</div>
							</div>
						</div>
				
					</div>
				</div>
			</div>
			<div class="row mt-5 bg-white">
				<div class="col-sm-4">
					<h3>Column 1</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
				</div>
				<div class="col-sm-4">
					<h3>Column 2</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
				</div>
				<div class="col-sm-4">
					<h3>Column 3</h3>        
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
				</div>
			</div>
		</div>
    </body>
</html>
