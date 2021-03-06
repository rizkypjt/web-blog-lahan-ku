@extends('frontend.layouts.master')
@section('content')
<section class="hero bg-overlay" id="hero" data-bg="/img/petani.jpg">
	<div class="text py-5">
		<p class="lead">Indonesia Tanpa Sengketa</p>
		<h1> <span class="bold">LAHAN-KU</span>.</h1>
		<div class="cta">
			<a href="#features" class="btn btn-primary smooth-link">Get Started</a>
			{{--  <div class="link">						
				<a href="#">Under the MIT License</a>
			</div>  --}}
		</div>
	</div>
</section>

<section class="padding" id="features">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-sm-12">
				<div class="list-item">
					<div class="icon">
						<i class="ion-code"></i>
					</div>
					<div class="desc">
						<h2>Based on Bootstrap 4</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore.
						</p>
						<a href="#" class="more">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 col-sm-12">
				<div class="list-item">
					<div class="icon">
						<i class="ion-social-github"></i>
					</div>
					<div class="desc">
						<h2>Open Source</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore.
						</p>
						<a href="#" class="more">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 col-sm-12">
				<div class="list-item no-spacing">
					<div class="icon">
						<i class="ion-paintbrush"></i>
					</div>
					<div class="desc">
						<h2>Customizable</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore.
						</p>
						<a href="#" class="more">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="padding bg-grey" id="blog">
	<div class="container">
		<h2 class="section-title">Petani Indonesia</h2>
		<p class="section-lead text-muted">Mari Kita Bangun Ketahanan Pangan Indonesia</p>
		<div class="section-body">
			<div class="row col-spacing">

				@foreach ($posts as $post)
				<div class="col-12 col-md-6 col-lg-4">
					<article class="card">
					  <img class="card-img-top" src="img/petani/teh.jpg" alt="Article Image"> 
					  <div class="card-body">
						  <div class="card-subtitle mb-2 text-muted">by <a href="#">John Doe</a> on August 10, 2017</div>
						<h4 class="card-title"><a href="/posts/{{ $post->title }}" data-toggle="read" data-id="1">{{ $post->title }}</a></h4>
						<p class="card-text">sadasdadasdasdasdasdasdadasdasdasdasdsd<p>
						<div class="text-right">						    	
							<a href="#" class="card-more" data-toggle="read" data-id="1">Read More <i class="ion-ios-arrow-right"></i></a>
						</div>
					</div>
				  </article>
			  </div>
			  @endforeach
			  <div class="col-12 col-md-6 col-lg-4">
					<article class="card">
					  <img class="card-img-top" src="img/news/img04.jpg" alt="Article Image">
					  <div class="card-body">
						  <div class="card-subtitle mb-2 text-muted">by <a href="#">John Doe</a> on August 10, 2017</div>
						<h4 class="card-title"><a href="#" data-toggle="read" data-id="1">Velit esse cillum dolore eu blos siur dropsida wedor</a></h4>
						<p class="card-text">Mauris eu eros in metus elementum porta eget sed ligula. Praesent consequat, ipsum molestie pellentesque venenatis.</p>
						<div class="text-right">						    	
							<a href="#" class="card-more" data-toggle="read" data-id="1">Read More <i class="ion-ios-arrow-right"></i></a>
						</div>
					</div>
				  </article>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<article class="card">
					  <img class="card-img-top" src="img/news/img02.jpg" alt="Article Image">
					  <div class="card-body">
						  <div class="card-subtitle mb-2 text-muted">by <a href="#">John Doe</a> on August 10, 2017</div>
						<h4 class="card-title"><a href="#" data-toggle="read" data-id="1">Excepteur sint as occaecat dros cupidatat non proident los</a></h4>
						<p class="card-text">Mauris eu eros in metus elementum porta eget sed ligula. Praesent consequat, ipsum molestie pellentesque venenatis.</p>
						<div class="text-right">						    	
							<a href="#" class="card-more" data-toggle="read" data-id="1">Read More <i class="ion-ios-arrow-right"></i></a>
						</div>
					</div>
				  </article>
			  </div>
			  <div class="col-12 col-md-6 col-lg-4">
					<article class="card">
					  <img class="card-img-top" src="img/news/img05.jpg" alt="Article Image">
					  <div class="card-body">
						  <div class="card-subtitle mb-2 text-muted">by <a href="#">John Doe</a> on August 10, 2017</div>
						<h4 class="card-title"><a href="#" data-toggle="read" data-id="1">Sunt in ado culpa qui officia deserunt mollit anim id</a></h4>
						<p class="card-text">Mauris eu eros in metus elementum porta eget sed ligula. Praesent consequat, ipsum molestie pellentesque venenatis.</p>
						<div class="text-right">						    	
							<a href="#" class="card-more" data-toggle="read" data-id="1">Read More <i class="ion-ios-arrow-right"></i></a>
						</div>
					</div>
				  </article>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<article class="card">
					  <img class="card-img-top" src="img/news/img03.jpg" alt="Article Image">
					  <div class="card-body">
						  <div class="card-subtitle mb-2 text-muted">by <a href="#">John Doe</a> on August 10, 2017</div>
						<h4 class="card-title"><a href="#" data-toggle="read" data-id="1">Incididunt ut labore et labore dolore magna aliqua lorem</a></h4>
						<p class="card-text">Mauris eu eros in metus elementum porta eget sed ligula. Praesent consequat, ipsum molestie pellentesque venenatis.</p>
						<div class="text-right">						    	
							<a href="#" class="card-more" data-toggle="read" data-id="1">Read More <i class="ion-ios-arrow-right"></i></a>
						</div>
					</div>
				  </article>
			  </div>
			  <div class="col-12 col-md-6 col-lg-4">
					<article class="card">
					  <img class="card-img-top" src="img/news/img06.jpg" alt="Article Image">
					  <div class="card-body">
						  <div class="card-subtitle mb-2 text-muted">by <a href="#">John Doe</a> on August 10, 2017</div>
						<h4 class="card-title"><a href="#" data-toggle="read" data-id="1">Ut enim ad minim veniam quis nostrud enim ad kruv</a></h4>
						<p class="card-text">Mauris eu eros in metus elementum porta eget sed ligula. Praesent consequat, ipsum molestie pellentesque venenatis.</p>
						<div class="text-right">						    	
							<a href="#" class="card-more" data-toggle="read" data-id="1">Read More <i class="ion-ios-arrow-right"></i></a>
						</div>
					</div>
				  </article>
				</div>
			</div>
		</div>

		<div class="row align-items-center mt-5">
			<div class="col-12 col-md-6">
				<h2>Don't miss our article</h2>
				<p class="text-muted">Just enter your email then we will send an email about the latest articles</p>
			</div>
			<div class="col-12 col-md-6">
				<form class="subscribe" action="#">
					<input type="email" name="email" class="form-control" placeholder="Your email">
					<button class="btn btn-primary">Subscribe</button>
				</form>
			</div>
		</div>
	</div>
</section>

<section class="bg-overlay padding" id="project" data-bg="img/projects.jpeg">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-6">
				<figure class="projects-picture">
					<img src="img/youzhang.png" alt="Youzhang">
				</figure>
			</div>
			<div class="col-12 col-md-6">
				<div class="projects-details">
					<div class="projects-badge">
						Featured
					</div>
					<h2 class="projects-title">Youzhang - Ionic 3 Catalogue Template</h2>
					<p class="projects-description">
						Youzhang is an iconic template catalog 3. This ionic template uses version 3 and uses the latest feature of ionic v3 that is Lazy Loading. With Ionic version 3 and Lazy Loading you don’t have to define all the components in the app.module.ts file and your hybrid app will get more native and it will make the app performance better.
					</p>
					<div class="projects-cta">
						<a href="https://codecanyon.net/item/youzhang-ionic-3-catalogue-template/20466954?ref=frameborder" class="btn btn-primary" target="_blank">
							Buy Now
						</a>
						<a href="https://codecanyon.net/user/frameborder?ref=frameborder" class="btn btn-link" target="_blank">
							More Products
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="padding bg-grey" id="contact">
	<div class="container">
		<h2 class="section-title text-center">Contact Us</h2>
		<p class="section-lead text-center text-muted">Send us your inquiry, we will help you and reply as soon as possible</p>
		<div class="section-body">				
			<div class="row col-spacing">
				<div class="col-12 col-md-5">
					<p class="contact-text">You can send us something like a question or project, we are open 09:00 to 17:00.</p>
					<ul class="contact-icon">
						<li><i class="ion ion-ios-telephone"></i> <div>+6212345123</div></li>
						<li><i class="ion ion-ios-email"></i> <div>hi@kodinger.com</div></li>
					</ul>
					<iframe src="https://snazzymaps.com/embed/10159" style="border:none;" class="maps"></iframe>
				</div>
				<div class="col-12 col-md-7">
					<form class="contact row" id="contact-form">
						<div class="form-group col-6">
							<input type="text" class="form-control" placeholder="Name" name="name" required="">
						</div>
						<div class="form-group col-6">
							<input type="email" class="form-control" placeholder="Email" name="email" required="">
						</div>
						<div class="form-group col-12">
							<input type="text" class="form-control" placeholder="Subject" name="subject" required="">
						</div>
						<div class="form-group col-12">
							<textarea class="form-control" placeholder="Message" name="message" required=""></textarea>
						</div>
						<div class="form-group col-12 mt-2">
							<button class="btn btn-primary">
								Send Message
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="callout">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-8 text">
				<h3>Start your project with this awesome template</h3>
			</div>
			<div class="col-12 col-md-4 cta">
				<a href="#" class="btn btn-outline-primary">
					Download Now
				</a>
			</div>
		</div>
	</div>
</section>
@endsection