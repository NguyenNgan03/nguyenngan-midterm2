<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  <script src=" https://kit.fontawesome.com/e1aaf64c7e.js" crossorigin="anonymous"></script>
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
<link rel="stylesheet" href="">
<link rel="stylesheet" href="{{ asset('asserts/style.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
           
                @include('components.header')
               
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				@include('components.banner')
			</div>
		<!-- End Hero Section -->

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">
					@include('components.main')
		      		<!-- Start Column 1 -->
					@yield('main')
					  
					<!-- End Column 4 -->

		      	</div>
		    </div>
		</div>


		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">
				@include('components.footer')
				@yield('footer')
			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>