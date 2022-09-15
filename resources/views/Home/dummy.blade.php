{{-- @include('Home.Header')

<style>
    .rev_card {
     background: purple;
     box-shadow: 0 8px 30px -7px #c9dff0;
     margin: 50px 0;
     /* padding: px; */
     border-radius: 20px;
     border: 0;
    }
    .rev_card-img-top {
       max-width: 100px;
       border-radius: 50%;
       margin: 15px auto 0;
       box-shadow: 0 8px 20px -4px #95abbb;
       width: 100px;
       height: 100px;
     }
     .rev_h4 {
       color: red;
       font-size: 21px;
       line-height: 1.3;
 
       span {
         font-size: 18px;
         color: #666666;
       }
     }
 </style>

    <div id="carouselExampleCaptions" class="carousel slide bg-primary" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active slider-item">
                <div class="container text-center" style="background-color:white;padding-top:120px">
                    <div class="row">
                  
                  
                      <div class="card rev_card" style="width:400px">
                        <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp"  alt="" height="300px" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title rev_h4 ">John Doe</h4>
                            <p class="text-muted">
                              <i class="fas fa-quote-left pe-2"></i>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                            </p>
                          <ul class=" list-unstyled d-flex justify-content-center text-warning mb-0  m-3 " style="padding-left:75px">
                            <li><i class="fa fa-star fa-solid " style="font-size:30px;color:orange;"></i></li>
                            <li><i class="fa fa-star" style="font-size:30px;color:orange; "></i></li>
                            <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                            <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                          </ul>
                           
                        </div>
                      </div>
                      <div class="card rev_card" style="width:400px">
                        <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp"  alt="" height="300px" alt="Card image">
                        <div class="card-body">
                          <h5 class="mb-3">Maria Kate</h5>
                          <p>Photographer</p>
                          <p class="text-muted">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque corrupti.
                          </p>
                        </div>
                      </div>
                      <div class="card rev_card" style="width:400px">
                        <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"  alt="" height="300px" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title rev_h4 ">John Doe</h4>
                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                            suscipit laboriosam, nisi ut aliquid commodi.
                         
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
            </div>
            {{-- slider 2started here --}}
            <div class="carousel-item slider-item">
                <div class="container text-center" style="background-color:purple;padding-top:120px">
                    <div class="row">
                  
                  
                      <div class="card rev_card" style="width:400px">
                        <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp"  alt="" height="300px" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title rev_h4 ">John Doe</h4>
                            <p class="text-muted">
                              <i class="fas fa-quote-left pe-2"></i>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                            </p>
                          <ul class=" list-unstyled d-flex justify-content-center text-warning mb-0  m-3 " style="padding-left:75px">
                            <li><i class="fa fa-star fa-solid " style="font-size:30px;color:orange;"></i></li>
                            <li><i class="fa fa-star" style="font-size:30px;color:orange; "></i></li>
                            <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                            <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                          </ul>
                           
                        </div>
                      </div>
                      <div class="card rev_card" style="width:400px">
                        <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp"  alt="" height="300px" alt="Card image">
                        <div class="card-body">
                          <h5 class="mb-3">Maria Kate</h5>
                          <p>Photographer</p>
                          <p class="text-muted">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque corrupti.
                          </p>
                        </div>
                      </div>
                      <div class="card rev_card" style="width:400px">
                        <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"  alt="" height="300px" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title rev_h4 ">John Doe</h4>
                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                            suscipit laboriosam, nisi ut aliquid commodi.
                         
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
            </div>
            {{-- slider three started here... --}}
            <div class="carousel-item slider-item">
                <div class="container text-center" style="background-color:purple;padding-top:120px">
                    <div class="row">
                  
                  
                      <div class="card rev_card" style="width:400px">
                        <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp"  alt="" height="300px" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title rev_h4 ">John Doe</h4>
                            <p class="text-muted">
                              <i class="fas fa-quote-left pe-2"></i>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                            </p>
                          <ul class=" list-unstyled d-flex justify-content-center text-warning mb-0  m-3 " style="padding-left:75px">
                            <li><i class="fa fa-star fa-solid " style="font-size:30px;color:orange;"></i></li>
                            <li><i class="fa fa-star" style="font-size:30px;color:orange; "></i></li>
                            <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                            <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                          </ul>
                           
                        </div>
                      </div>
                      <div class="card rev_card" style="width:400px">
                        <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp"  alt="" height="300px" alt="Card image">
                        <div class="card-body">
                          <h5 class="mb-3">Maria Kate</h5>
                          <p>Photographer</p>
                          <p class="text-muted">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque corrupti.
                          </p>
                        </div>
                      </div>
                      <div class="card rev_card" style="width:400px">
                        <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"  alt="" height="300px" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title rev_h4 ">John Doe</h4>
                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                            suscipit laboriosam, nisi ut aliquid commodi.
                         
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

 --}}











    {{-- one slide review --}}

    @include('Home.Header')

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Testimonial Carousel with Star Ratings</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	font-family: "Open Sans", sans-serif;
}
h2 {
	color: #333;
	text-align: center;
	text-transform: uppercase;
	font-family: "Roboto", sans-serif;
	font-weight: bold;
	position: relative;
	margin: 25px 0 50px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 3px;
	background: #ffdc12;
	left: 0;
	right: 0;
	bottom: -10px;
}
.carousel {
	width: 650px;
	margin: 0 auto;
	padding-bottom: 50px;
}
.carousel .carousel-item {
	color: #999;
	font-size: 14px;
	text-align: center;
	overflow: hidden;
	min-height: 340px;
}
.carousel .carousel-item a {
	color: #eb7245;
}
.carousel .img-box {
	width: 145px;
	height: 145px;
	margin: 0 auto;
	border-radius: 50%;
}
.carousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {	
	padding: 30px 0 10px;
}
.carousel .overview {	
	text-align: center;
	padding-bottom: 5px;
}
.carousel .overview b {
	color: #333;
	font-size: 15px;
	text-transform: uppercase;
	display: block;	
	padding-bottom: 5px;
}
.carousel .star-rating i {
	font-size: 18px;
	color: #ffdc12;
}
.carousel-control-prev, .carousel-control-next {
	width: 30px;
	height: 30px;
	border-radius: 50%;
	background: #999;
	text-shadow: none;
	top: 4px;
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 20px;
	margin-right: 2px;
}
.carousel-control-prev {
	left: auto;
	right: 40px;
}
.carousel-control-next i {
	margin-right: -2px;
}
.carousel .carousel-indicators {
	bottom: 15px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 11px;
	height: 11px;
	margin: 1px 5px;
	border-radius: 50%;
}
.carousel-indicators li {	
	background: #e2e2e2;
	border: none;
}
.carousel-indicators li.active {		
	background: #888;		
}
</style>
</head>
<body style="background-color:white;padding-top:120px">
<h2 >Our Clients Say</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Carousel indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>   
	<!-- Wrapper for carousel items -->
	<div class="carousel-inner" >		
		<div class="carousel-item active">
			<div class="img-box"><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt=""></div>
			<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
			<p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
			<div class="star-rating m-5">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
				</ul>
			</div>
		</div>
		<div class="carousel-item">
			<div class="img-box"><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""></div>
			<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
			<p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a></p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
				</ul>
			</div>
		</div>
		<div class="carousel-item">
			<div class="img-box"><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt=""></div>
			<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
			<p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
				</ul>
			</div>
		</div>		
	</div>
	<!-- Carousel controls -->
	{{-- <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
		<i class="fa fa-angle-left"></i>
	</a>
	<a class="carousel-control-next" href="#myCarousel" data-slide="next">
		<i class="fa fa-angle-right"></i>
	</a> --}}
</div>
</body>
</html>
{{-- @include('Home.Product') --}}
