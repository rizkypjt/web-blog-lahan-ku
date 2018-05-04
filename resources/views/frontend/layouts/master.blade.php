<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="Kodinger, template, html5, css3, bootstrap4">
		<meta name="description" content="HTML5 and CSS3 Template Based on Bootstrap 4">
        <title> Lahan-Ku </title>
        @include('frontend.partials.css')
	</head>

	<body>
        @include('frontend.partials.navbar')

        @yield('content')
        
        <footer>
			<div class="container">
				<figure>
					<img src="img/logo.png" alt="Logo">
				</figure>
				<p>
					Copyright &copy; 2017 Your Company
				</p>
				{{--  <p>
					Made with <i class="ion-heart"></i> By Kodinger
				</p>  --}}
			</div>
		</footer>

	    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
		<script src="/js/jquery.easeScroll.js"></script>
		<script src="/sweetalert/dist/sweetalert.min.js"></script>
		<script src="/js/stisla.js"></script>
	</body>
</html>