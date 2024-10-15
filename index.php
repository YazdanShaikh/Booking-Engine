<?php include 'attachments/head.php'; ?>
<?php include 'attachments/header.php'; ?>
<!-- Banner
		============================================= -->
<section id="banner">

	<div class="banner-parallax" data-banner-height="550">
	
		<div class="overlay-colored color-bg-white opacity-40"></div>
		<div class="slide-content">
			<div class="container plr-50">
				<div class="row">
					<div class="banner-center-box">
						<h1 style="font-weight: bold;color:#fff; font-family:sans-serif; margin-bottom: 8px;">Find your next stay</h1>
						<h4 style="color:#fff; font-family:sans-serif; margin-bottom: 0;">Search deals on hotels, homes, and much more...</h4>
					</div>
				</div>
				<div class="banner-reservation-tabs mt-50 mb-70 ">
					<ul class="br-tabs">
						<li class="active"><a href="javascript:;">Round Trip</a></li>
						<li><a href="javascript:;">One Way</a></li>
						<li><a href="javascript:;">Multiple Destinations</a></li>
					</ul><!-- .br-tabs end -->
					<ul class="br-tabs-content">
						<li class="active">
							<form class="form-banner-reservation form-inline style-2 form-h-50">
								<div class="form-group">
									<input type="text" name="brPlaceStart" class="form-control" placeholder="From">
									<i class="fas fa-plane"></i>
								</div><!-- .form-group end -->
								<div class="form-group">
									<input type="text" name="brPlaceEnd" class="form-control" placeholder="To">
									<i class="fas fa-plane"></i>
								</div><!-- .form-group end -->
								<div class="form-group">
									<input type="text" name="brTimeStart" class="form-control" id="datepicker-time-start"
										placeholder="2019/09/30">
									<i class="far fa-calendar"></i>
								</div><!-- .form-group end -->
								<div class="form-group">
									<input type="text" name="brTimeEnd" class="form-control" id="datepicker-time-end"
										placeholder="2019/09/30">
									<i class="far fa-calendar"></i>
								</div><!-- .form-group end -->
								<div class="form-group">
									<input type="text" name="brPassengerNumber" class="form-control show-dropdown-passengers"
										placeholder="Passengers">
									<i class="fas fa-user"></i>
									<ul class="list-dropdown-passengers">
										<li>
											<ul class="list-persons-count">
												<li>
													<span>Adults:</span>
													<div class="counter-add-item">
														<a class="decrease-btn" href="javascript:;">-</a>
														<input type="text" value="1">
														<a class="increase-btn" href="javascript:;">+</a>
													</div><!-- .counter-add-item end -->
												</li>
												<li>
													<span>Childs:</span>
													<div class="counter-add-item">
														<a class="decrease-btn" href="javascript:;">-</a>
														<input type="text" value="0">
														<a class="increase-btn" href="javascript:;">+</a>
													</div><!-- .counter-add-item end -->
												</li>
											</ul><!-- .list-persons-count end -->
										</li>
										<li>
											<ul class="list-select-grade">
												<li>
													<label class="radio-container radio-default">
														<input type="radio" checked="checked" name="radio">
														<span class="checkmark"></span>
														Economy Class
													</label>
												</li>
												<li>
													<label class="radio-container radio-default">
														<input type="radio" checked="checked" name="radio">
														<span class="checkmark"></span>
														Business Class
													</label>
												</li>
												<li>
													<label class="radio-container radio-default">
														<input type="radio" checked="checked" name="radio">
														<span class="checkmark"></span>
														First Class
													</label>
												</li>
											</ul><!-- .list-select-grade end -->
										</li>
										<li>
											<ul class="list-reservation-options">
												<li>
													<label class="label-container checkbox-default">
														<span>
															Nonstop
														</span>
														<input type="checkbox">
														<span class="checkmark"></span>
													</label>
												</li>
												<li>
													<label class="label-container checkbox-default">
														<span>
															Refundable
														</span>
														<input type="checkbox">
														<span class="checkmark"></span>
													</label>
												</li>
											</ul><!-- .list-reservation-options end -->
										</li>
										<li>
											<a class="btn-reservation-passengers btn x-small colorful hover-dark"
												href="javascript:;">Done</a>
										</li>
									</ul><!-- .list-dropdown-passengers end -->
								</div><!-- .form-group end -->
								<div class="form-group">
									<button type="submit" class="form-control icon"><i class="fas fa-search"></i></button>
								</div><!-- .form-group end -->
							</form><!-- .form-banner-reservation end -->
						</li>
						<li>
							<form class="form-banner-reservation form-inline style-2 form-h-50">
								<div class="form-group">
									<input type="text" name="brPlaceStart" class="form-control" placeholder="From">
									<i class="fas fa-plane"></i>
								</div><!-- .form-group end -->
								<div class="form-group">
									<input type="text" name="brPlaceEnd" class="form-control" placeholder="To">
									<i class="fas fa-plane"></i>
								</div><!-- .form-group end -->
								<div class="form-group">
									<input type="text" name="brTimeStart" class="form-control datepicker-2-time-start"
										placeholder="2019/09/30">
									<i class="far fa-calendar"></i>
								</div><!-- .form-group end -->
								<div class="form-group">
									<input type="text" name="brPassengerNumber" class="form-control show-dropdown-passengers"
										placeholder="Passengers">
									<i class="fas fa-user"></i>
									<ul class="list-dropdown-passengers">
										<li>
											<ul class="list-persons-count">
												<li>
													<span>Adults:</span>
													<div class="counter-add-item">
														<a class="decrease-btn" href="javascript:;">-</a>
														<input type="text" value="1">
														<a class="increase-btn" href="javascript:;">+</a>
													</div><!-- .counter-add-item end -->
												</li>
												<li>
													<span>Childs:</span>
													<div class="counter-add-item">
														<a class="decrease-btn" href="javascript:;">-</a>
														<input type="text" value="0">
														<a class="increase-btn" href="javascript:;">+</a>
													</div><!-- .counter-add-item end -->
												</li>
											</ul><!-- .list-persons-count end -->
										</li>
										<li>
											<ul class="list-select-grade">
												<li>
													<label class="radio-container radio-default">
														<input type="radio" checked="checked" name="radio">
														<span class="checkmark"></span>
														Economy Class
													</label>
												</li>
												<li>
													<label class="radio-container radio-default">
														<input type="radio" checked="checked" name="radio">
														<span class="checkmark"></span>
														Business Class
													</label>
												</li>
												<li>
													<label class="radio-container radio-default">
														<input type="radio" checked="checked" name="radio">
														<span class="checkmark"></span>
														First Class
													</label>
												</li>
											</ul><!-- .list-select-grade end -->
										</li>
										<li>
											<ul class="list-reservation-options">
												<li>
													<label class="label-container checkbox-default">
														<span>
															Nonstop
														</span>
														<input type="checkbox">
														<span class="checkmark"></span>
													</label>
												</li>
												<li>
													<label class="label-container checkbox-default">
														<span>
															Refundable
														</span>
														<input type="checkbox">
														<span class="checkmark"></span>
													</label>
												</li>
											</ul><!-- .list-reservation-options end -->
										</li>
										<li>
											<a class="btn-reservation-passengers btn x-small colorful hover-dark"
												href="javascript:;">Done</a>
										</li>
									</ul><!-- .list-dropdown-passengers end -->
								</div><!-- .form-group end -->
								<div class="form-group">
									<button type="submit" class="form-control icon"><i class="fas fa-search"></i></button>
								</div><!-- .form-group end -->
							</form><!-- .form-banner-reservation end -->
						</li>
						<li>
							<div class="multiple-destinations">
								<form class="form-banner-reservation form-inline style-2 form-h-50">
									<div class="form-group">
										<div class="fields-row fields-4">
											<div class="box-field">
												<input type="text" name="brPlaceStart" class="form-control" placeholder="From">
												<i class="fas fa-plane rotate-90-pos"></i>
											</div><!-- .box-field end -->
											<div class="box-field">
												<input type="text" name="brPlaceEnd" class="form-control" placeholder="To">
												<i class="fas fa-plane rotate-90-neg"></i>
											</div><!-- .box-field end -->
											<div class="box-field">
												<input type="text" name="brTimeStart" class="form-control datepicker-2-time-start"
													placeholder="2019/09/30">
												<i class="far fa-calendar"></i>
											</div><!-- .box-field end -->
											<div class="box-field">
												<input type="text" name="brPassengerNumber"
													class="form-control show-dropdown-passengers" placeholder="Passengers">
												<i class="fas fa-user"></i>
												<ul class="list-dropdown-passengers">
													<li>
														<ul class="list-persons-count">
															<li>
																<span>Adults:</span>
																<div class="counter-add-item">
																	<a class="decrease-btn" href="javascript:;">-</a>
																	<input type="text" value="1">
																	<a class="increase-btn" href="javascript:;">+</a>
																</div><!-- .counter-add-item end -->
															</li>
															<li>
																<span>Childs:</span>
																<div class="counter-add-item">
																	<a class="decrease-btn" href="javascript:;">-</a>
																	<input type="text" value="0">
																	<a class="increase-btn" href="javascript:;">+</a>
																</div><!-- .counter-add-item end -->
															</li>
														</ul><!-- .list-persons-count end -->
													</li>
													<li>
														<ul class="list-select-grade">
															<li>
																<label class="radio-container radio-default">
																	<input type="radio" checked="checked" name="radio">
																	<span class="checkmark"></span>
																	Economy Class
																</label>
															</li>
															<li>
																<label class="radio-container radio-default">
																	<input type="radio" checked="checked" name="radio">
																	<span class="checkmark"></span>
																	Business Class
																</label>
															</li>
															<li>
																<label class="radio-container radio-default">
																	<input type="radio" checked="checked" name="radio">
																	<span class="checkmark"></span>
																	First Class
																</label>
															</li>
														</ul><!-- .list-select-grade end -->
													</li>
													<li>
														<ul class="list-reservation-options">
															<li>
																<label class="label-container checkbox-default">
																	<span>
																		Nonstop
																	</span>
																	<input type="checkbox">
																	<span class="checkmark"></span>
																</label>
															</li>
															<li>
																<label class="label-container checkbox-default">
																	<span>
																		Refundable
																	</span>
																	<input type="checkbox">
																	<span class="checkmark"></span>
																</label>
															</li>
														</ul><!-- .list-reservation-options end -->
													</li>
													<li>
														<a class="btn-reservation-passengers btn x-small colorful hover-dark"
															href="javascript:;">Done</a>
													</li>
												</ul><!-- .list-dropdown-passengers end -->
											</div><!-- .box-field end -->
										</div><!-- .fields-row end -->
									</div><!-- .form-group end -->
									<div class="form-group">
										<button type="submit" class="form-control icon"><i class="fas fa-search"></i></button>
									</div><!-- .form-group end -->
								</form><!-- .form-banner-reservation end -->
								<a class="btn-multiple-destinations btn x-small colorful hover-dark" href="javascript:;">
									<i class="fas fa-plus"></i>
									Add Another Flight
								</a>
							</div><!-- .multiple-destinations end -->
						</li>
					</ul><!-- .br-tabs-content end -->
				</div><!-- .banner-reservation-tabs end -->

			</div><!-- .container end -->


		</div><!-- .slide-content end -->
	</div><!-- .banner-parallax end -->

</section><!-- #banner end -->

<!-- Content
		============================================= -->
<section id="content">
	<div id="content-wrap">

		<section id="section-banner-2">
			<div class="container">
				<div class="row">
					<div class="col-12 mt-70">
						<div class="sec-banner-2_img ">
							<h3>Can’t decide where to go?</h3>
							<h1>Explore every <br> destination</h1>
							<button class="bannar-btn">Get Started</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div id="section-about-1" class="section-flat">
			<div class="section-content">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="section-title">
								<h2><strong>About</strong> Booking App</h2>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="box-info box-about-1">
										<div class="box-content">
											<h4>
												<i class="far fa-heart"></i>
												Sed Magni
											</h4>
											<p>
												Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. architecto beatae vitae dicta.
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="box-info box-about-1 mt-md-40">
										<div class="box-content">
											<h4>
												<i class="far fa-compass"></i>
												Veritatis et Quasi
											</h4>
											<p>
												Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
												architecto beatae vitae dicta.
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="box-info box-about-1 mt-40">
										<div class="box-content">
											<h4>
												<i class="far fa-flag"></i>
												Doloremque
											</h4>
											<p>
												Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
												architecto beatae vitae dicta.
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="box-info box-about-1 mt-40">
										<div class="box-content">
											<h4>
												<i class="far fa-bell"></i>
												Sunt in Culpa
											</h4>
											<p>
												Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
												architecto beatae vitae dicta.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="video-preview mt-md-60">
								<a class="img-bg lightbox-iframe" href="https://vimeo.com/45830194">
									<div class="overlay-colored color-bg-dark opacity-50"></div><!-- .overlay-colored end -->
									<img src="./images/01.jpeg">
								</a><!-- .img-bg end -->
								<!-- <a class="btn-video lightbox-iframe" href="https://vimeo.com/45830194">
									<i class="fa fa-play"></i>
								</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="section-top-destintations" class="section-flat">
			<div class="section-content">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="section-title">
								<h2><strong>Trending destinations</strong></h2>
								<p>Most popular choices for travelers from Pakistan</p>
							</div>
						</div>
					</div>
				</div>
				<div class="container" style="overflow: hidden;">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-top-destinations">
								<ul class="slick-slider">
									<li>
										<div class="box-preview box-area-destination">
											<img src="images/places/islamabad.png" alt="" style="width: 100%; height: 350px;">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Lahore</a></h5>
													<h6>3 Tours</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination">
											<img src="images/places/lahore.png" alt="" style="width: 100%; height: 350px;">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Islamabad</a></h5>
													<h6>7 Tours</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination">
											<img src="images/places/islamabad.png" alt="" style="width: 100%; height: 350px;">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Lahore</a></h5>
													<h6>3 Tours</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination">
											<img src="images/places/lahore.png" alt="" style="width: 100%; height: 350px;">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Islamabad</a></h5>
													<h6>7 Tours</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination">
											<img src="images/places/islamabad.png" alt="" style="width: 100%; height: 350px;">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Lahore</a></h5>
													<h6>3 Tours</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination">
											<img src="images/places/lahore.png" alt="" style="width: 100%; height: 350px;">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Islamabad</a></h5>
													<h6>7 Tours</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination">
											<img src="images/places/islamabad.png" alt="" style="width: 100%; height: 350px;">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Lahore</a></h5>
													<h6>3 Tours</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination">
											<img src="images/places/lahore.png" alt="" style="width: 100%; height: 350px;">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Islamabad</a></h5>
													<h6>7 Tours</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
								</ul><!-- .slick-slider end -->
								<div class="slick-arrows"></div><!-- .slick-arrows end -->
							</div><!-- .slider-top-destinations end -->

						</div><!-- .col-md-12 end -->
					</div><!-- .row end -->
				</div>

				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="section-title">
								<h2><strong>Explore Pakistan</strong></h2>
								<p>These popular destinations have a lot to offer</p>
							</div>
						</div>
					</div>
				</div>


				<div class="container" style="overflow: hidden;">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-top-destinations-small">
								<ul class="slick-slider-small">
									<li>
										<div class="box-preview box-area-destination des-small">
											<img src="images/places/islamabad.png" alt="">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Lahore</a></h5>
													<h6>30 Properties</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination des-small">
											<img src="images/places/lahore.png" alt="">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Islamabad</a></h5>
													<h6>400 Properties</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination des-small">
											<img src="images/places/islamabad.png" alt="">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Lahore</a></h5>
													<h6>70 Properties</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination des-small">
											<img src="images/places/lahore.png" alt="">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Islamabad</a></h5>
													<h6>300 Properties</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination des-small">
											<img src="images/places/islamabad.png" alt="">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Lahore</a></h5>
													<h6>430 Properties</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination des-small">
											<img src="images/places/lahore.png" alt="">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Islamabad</a></h5>
													<h6>500 Properties</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination des-small">
											<img src="images/places/islamabad.png" alt="">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Lahore</a></h5>
													<h6>150 Properties</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
									<li>
										<div class="box-preview box-area-destination des-small">
											<img src="images/places/lahore.png" alt="">
											<div class="box-content">
												<i class="fas fa-map-marker-alt"></i>
												<div class="title">
													<h5><a href="javascript:;">Islamabad</a></h5>
													<h6>120 Properties</h6>
												</div><!-- .title end -->
											</div><!-- .box-content end -->
										</div><!-- .box-preview end -->
									</li>
								</ul><!-- .slick-slider end -->

							</div><!-- .slider-top-destinations end -->

						</div><!-- .col-md-12 end -->
					</div><!-- .row end -->
				</div>


			</div>

		</div>

		<div class="flight-section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-md-4 ">
								<h3>Popular Airlines in <br> Pakistan</h3>
								<p>
									Book cheap flights on your favourite airlines
								</p>
							</div>
							<div class="col-md-8" style="padding: 0px;">
								<div class="row flight-img">
									<div class="col-md-3">
										<img src="./images/flight/ER.webp" alt="">
										<img src="./images/flight/FZ.webp" alt="">
									</div>
									<div class="col-md-3">
										<img src="./images/flight/G9.webp" alt="">
										<img src="./images/flight/PA.webp" alt="">
									</div>
									<div class="col-md-3">
										<img src="./images/flight/PK.webp" alt="">
										<img src="./images/flight/QR.webp" alt="">
									</div>
									<div class="col-md-3">
										<img src="./images/flight/EK.webp" alt="">
										<img src="./images/flight/XY.webp" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12">

					</div>
				</div>
			</div>
		</div>
		<div class="flight-section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row pb-80">
							<div class="col-md-4 plr-120 ">
								<h3>Our Travels Partners</h3>
								<p>
									Wego searches for the best deals on these sites in Pakistan
								</p>
							</div>
							<div class="col-md-8">
								<div class="row flight-img">
									<div class="col-md-3">
										<img src="./images/travel-partner/city.travel.webp" alt="">
										<img src="./images/travel-partner/kiwi.com.webp" alt="">
									</div>
									<div class="col-md-3">
										<img src="./images/travel-partner/lucky2go.com.webp" alt="">
										<img src="./images/travel-partner/odigeo.com.webp" alt="">
									</div>
									<div class="col-md-3">
										<img src="./images/travel-partner/onetravel.com.webp" alt="">
										<img src="./images/travel-partner/rehlat.com.webp" alt="">
									</div>
									<div class="col-md-3">
										<img src="./images/travel-partner/sastaticket.pk.webp" alt="">
										<img src="./images/travel-partner/sky-tours.com.webp" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12">

					</div>
				</div>
			</div>
		</div>


		<section id="banner" class="sec-one">
			<div class="sec-one-bg">
				<div class="container plr-120">
					<div class="row">
						<div class="col-12 sec-one-heading">
							<h4>
								A booking engine to propel your hotel forward.
							</h4>
							<div class="row mt-80">
								<div class="col-md-6">
									<div class="sec-one-text">
										<h5>
											Easy mobile bookings
										</h5>
										<p>Make it simple for guests no matter where they are with a seamless 3-step mobile booking experience.</p>
									</div>
									<div class="sec-one-text">
										<h5>
											Competitor and rate parity insights
										</h5>
										<p>Be a winner in your local market with real-time data to ensure you always offer the most competitive rate for your rooms.</p>
									</div>
									<div class="sec-one-text">
										<h5>
											Drive Bookings from Social Media
										</h5>
										<p>Easily connect social media channels with your booking engine to maximise your direct revenue.</p>
									</div>

								</div>
								<div class="col-md-6">
									<img src="./images/bg/1.webp" alt="">
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="banner" class="sec-one">
			<div class="sec-two-bg">
				<div class="container ptb-60">
					<div class="row">
						<div class="col-12 sec-one-heading">
							<h4>
								How an online booking engine turns browsers into buyers.
							</h4>
							<div class="row mt-80">
								<div class="col-md-6 sec-two-img">
									<img src="./images/bg/2.webp" alt="">
								</div>
								<div class="col-md-6">
									<div class="sec-one-text">
										<h5>
											Simple payment processing

										</h5>
										<p>Streamline your payment process with a seamless and secure PCI compliant payment gateway.</p>
									</div>
									<div class="sec-one-text">
										<h5>
											Advanced and intuitive booking calendar
										</h5>
										<p>Drive more bookings with a flexible date calendar that gives guests the ability to book multiple rooms in a single reservation.</p>
									</div>
									<div class="sec-one-text">
										<h5>
											Powerful plug-in apps
										</h5>
										<p>Maximise your direct revenue and improve your guests’ booking experience with a range of powerful third party apps.</p>
									</div>

								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>














	</div><!-- #content-wrap -->

</section><!-- #content end -->

<!-- Footer
		============================================= -->

<?php include 'attachments/footer.php'; ?>
<?php include 'attachments/foot.php'; ?>