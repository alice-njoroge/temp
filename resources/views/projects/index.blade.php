@extends('layout')
<!--header-->


@section('content')


		</div>
		<!--banner-->
		<div class="banner-w3">
			<div class="demo-1">
				<div id="example1" class="core-slider core-slider__carousel example_1">
					<div class="core-slider_viewport">
						<div class="core-slider_list">
							<div class="core-slider_item">
								<img src="images/b1.jpg" class="img-responsive" alt="">
							</div>
							 <div class="core-slider_item">
								 <img src="images/b2.jpg" class="img-responsive" alt="">
							 </div>
							<div class="core-slider_item">
								  <img src="images/b3.jpg" class="img-responsive" alt="">
							</div>
							<div class="core-slider_item">
								  <img src="images/b4.jpg" class="img-responsive" alt="">
							</div>
						 </div>
					</div>
					<div class="core-slider_nav">
						<div class="core-slider_arrow core-slider_arrow__right"></div>
						<div class="core-slider_arrow core-slider_arrow__left"></div>
					</div>
					<div class="core-slider_control-nav"></div>
				</div>
			</div>
			<link href="css/coreSlider.css" rel="stylesheet" type="text/css">
			<script src="js/coreSlider.js"></script>
			<script>
			$('#example1').coreSlider({
			  pauseOnHover: false,
			  interval: 3000,
			  controlNavEnabled: true
			});

			</script>
		<div class="content">
			<!--banner-bottom-->
				<div class="ban-bottom-w3l">
					<div class="container">
						<div class="col-md-6 ban-bottom">
							<div class="ban-top">
								<img src="images/p2.jpg" class="img-responsive" alt=""/>
								<div class="ban-text">
									<h4>Ankara mats</h4>
								</div>
								<div class="ban-text2 hvr-sweep-to-top">
									<h4>50% <span>Off/-</span></h4>
								</div>
							</div>
						</div>
						<div class="col-md-6 ban-bottom3">
							<div class="ban-top">
								<img src="images/p1.jpg" class="img-responsive" alt=""/>
								<div class="ban-text1">
									<h4>ladies' outfits</h4>
								</div>
							</div>
							<div class="ban-img">
								<div class=" ban-bottom1">
									<div class="ban-top">
										<img src="images/p3.jpg" class="img-responsive" alt=""/>
										<div class="ban-text1">
											<h4>Shoes</h4>
										</div>
									</div>
								</div>
								<div class="ban-bottom2">
									<div class="ban-top">
										<img src="images/p4.jpg" class="img-responsive" alt=""/>
										<div class="ban-text1">
											<h4>Hand Bags</h4>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			<!--banner-bottom-->
			<!--new-arrivals-->
				<div class="new-arrivals-w3agile">
					<div class="container">
						<h2 class="tittle">New Arrivals</h2>
						<div class="arrivals-grids">
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
												<div class="grid-img">
													<img  src="images/p5.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/p6.jpg" class="img-responsive"  alt="">
												</div>
											</a>
										</figure>
									</div>
									<div class="ribben">
										<p>outfits</p>
									</div>
									<div class="ribben1">
										<p>Couple</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Perfect matches!</a></h6>
										<span class="size">sizes: XL / XXL / S </span>

									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal2">
												<div class="grid-img">
													<img  src="images/p7.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/p4.jpg" class="img-responsive"  alt="">
												</div>
											</a>
										</figure>
									</div>
									<div class="ribben2">
										<p>Handbags</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Buy yours today!</a></h6>
										<span class="size">All sizes are available! </span>

									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3">
												<div class="grid-img">
													<img  src="images/p10.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/p9.jpg" class="img-responsive"  alt="">
												</div>
											</a>
										</figure>
									</div>
									<div class="ribben1">
										<p>Shambala</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Get customized ones at affodable prices</a></h6>
										<span class="size">All sizes are available!  </span>

									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">
												<div class="grid-img">
													<img  src="images/p12.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/p11.jpg" class="img-responsive"  alt="">
												</div>
											</a>
										</figure>
										<div class="ribben1">
										<p>Shoes</p>
									</div>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Nyafrika designs! get your pair now!</a></h6>
										<span class="size">All sizes are available!  </span>

									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

			<!--new-arrivals-->



			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3>Give us Your Feedback</h3>
						<form action="#" method="post">
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<textarea rows="5" cols="60">
									Enter text here...
									</textarea>

								<div class="clearfix"></div>
							</div>
							<input type="submit">
						</form>
					</div>
					<div class="forg">
	
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<!--accessories-->
			<div class="accessories-w3l">
				<div class="container">
					<h3 class="tittle">20% Discount on</h3>
					<span>TRENDING DESIGNS</span>
					<div class="button">
						<a href="#" class="button1"> Shop Now</a>
						<a href="#" class="button1"> Quick View</a>
					</div>
				</div>
			</div>
			<!--accessories-->
			<!--Products-->


			<!--new-arrivals-->
		</div>
		<!--content-->


@endsection
