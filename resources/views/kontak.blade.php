@extends('template/template')

@section('content')


<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Kontak</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Kontak</li>
				</ol>
			</div>
		</div>
	</div>
</section>

 <!--Start Contact Us
	=========================================== -->
 <section class="contact-us" id="contact">
 	<div class="container">
 		<div class="row justify-content-center">
			 <!-- section title -->
 			<div class="col-xl-6 col-lg-8">
				<div class="title text-center">
					<h2>Hubungi Kami</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab maxime nam
						ut numquam molestiae quaerat incidunt?</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>
 		<div class="row">
 			<!-- Contact Details -->
 			<div class="contact-details col-md-6 ">
 				<h3 class="mb-3">Contact Details</h3>
 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex
 					explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore
 					adipisci.</p>
 				<ul class="contact-short-info mt-4">
 					<li class="mb-3">
 						<i class="tf-ion-ios-home"></i>
 						<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
 					</li>
 					<li class="mb-3">
 						<i class="tf-ion-android-phone-portrait"></i>
 						<span>Phone: +880-31-000-000</span>
 					</li>
 					<li class="mb-3">
 						<i class="tf-ion-android-globe"></i>
 						<span>Fax: +880-31-000-000</span>
 					</li>
 					<li>
 						<i class="tf-ion-android-mail"></i>
 						<span>Email: hello@meghna.com</span>
 					</li>
 				</ul>
 				<!-- Footer Social Links -->
 				<div class="social-icon">
 					<ul>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble-outline"></i></a></li>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-linkedin-outline"></i></a></li>
 					</ul>
 				</div>
 				<!--/. End Footer Social Links -->
 			</div>
 			<!-- / End Contact Details -->

 			<!-- Contact Form -->
 			<div class="contact-form col-md-6 ">
 				<form id="contact-form" method="post" role="form">
 					<div class="form-group mb-4">
 						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name" required="">
 					</div>

 					<div class="form-group mb-4">
 						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email" required="">
 					</div>

 					<div class="form-group mb-4">
 						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject" required="">
 					</div>

 					<div class="form-group mb-4">
 						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message" required=""></textarea>
 					</div>
 					<div id="cf-submit">
 						<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
 					</div>

 				</form>
 			</div>
 			<!-- ./End Contact Form -->

 		</div> <!-- end row -->
 	</div> <!-- end container -->
 </section> <!-- end section -->

 <!--================================
=            Google Map            =
=================================-->
<div class="google-map">
  <!-- <div id="map_canvas" class="map_canvas" data-latitude="-7.9054121" data-longitude="112.6579338" data-marker="images/marker.png" data-marker-name="Simasko"></div> -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.53208243691!2d107.63327747745869!3d-6.9463853751433655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd6d6cefd1c1%3A0xe43d425901d53083!2sBalai%20Latihan%20Kerja%20Mandiri%20Disnakertrans%20Provinsi%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1730624134838!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


</div>
 <!--====  End of Google Map  ====-->


@endsection
