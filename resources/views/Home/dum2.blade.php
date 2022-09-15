
{{-- very very important --}}

@include('Home.Header')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bootstrap Thumbnail Carousel</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    body {
      background: #ebebeb;
    }

    h2 {
      color: #696969;
      font-size: 26px;
      font-weight: 300;
      text-align: center;
      position: relative;
      margin: 40px 70px;
      text-transform: uppercase;
      font-family: 'Open Sans', sans-serif;
    }

    h2::after {
      content: "";
      width: 100%;
      position: absolute;
      margin: 0 auto;
      height: 1px;
      border-radius: 1px;
      background: #d4d4d4;
      left: 0;
      right: 0;
      bottom: 14px;
    }

    h2 span {
      display: inline-block;
      padding: 0 25px;
      background: #ebebeb;
      position: relative;
      z-index: 2;
    }

    .carousel {
      margin: 0 auto;
      /* padding: 0 68px; */
    }

    .carousel .carousel-item {
      text-align: center;
      overflow: hidden;
      height: auto;
      padding-left: 2px
    }

    .carousel .carousel-item .img-box {
      background: #fff;
      padding: 9px;
      box-shadow: 0 6px 20px -6px rgba(0, 0, 0, 0.4);
    }

    .carousel .carousel-item img {
      margin: 0 auto;
    }

    .carousel-control-prev,
    .carousel-control-next {
      width: 68px;
      background: none;
    }

    .carousel-control-prev i,
    .carousel-control-next i {
      /* //arrow crousal */
      font-size: 28px;
      position: absolute;
      top: 50%; 
      /* padding-right:70px;
      padding-left:70px; */ruhi
      display: inline-block;
      margin-top: -15px;
      /* z-index: 5; */
      left: 0;
      right: 0;
      color: rgba(0, 0, 0, 0.8);
      text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
    }

    .carousel-indicators {
      bottom: -40px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
      /* underline crousal css */
      width: 10px;
      height: 20px;
      border: none;
      border-radius: 50%;
      margin: 1px 4px;
      box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
    }

    .carousel-indicators li {
      background: #999;
      border-color: transparent;
    }

    .carousel-indicators li.active {
      background: #555;
    }
/* ruhi */
    .rev_card {
      background: rgb(240, 236, 240);
      box-shadow: 0 8px 30px -7px #c9dff0;
      margin: 50px 0;
      padding: 20px;
      border-radius: 20px;
      border: 0;
    }

    .rev_card-img-top {
      /* max-width: 100px; */
      border-radius: 50%;
      margin: 15px auto 0;
      box-shadow: 0 8px 20px -4px #95abbb;
      /* width: 100px; */
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
</head>

<body>
  <div class="container-fluid" style="background-color:white;padding-top:120px">
    <div class="row ">
      <div class="col-md-12 ">
        <h2><span>Thumbnail <b>Carousel</b></span></h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-4 ">
                    <div class="card rev_card" style="width:280px">
                      <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp"
                        alt="" height="300px" alt="Card image">
                      <div class="card-body">
                        <h4 class="card-title rev_h4 ">John Doe</h4>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                          officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                        </p>
                        <ul class=" list-unstyled d-flex justify-content-center text-warning mb-0  m-3 "
                          style="padding-left:75px">
                          <li><i class="fa fa-star fa-solid " style="font-size:30px;color:orange;"></i></li>
                          <li><i class="fa fa-star" style="font-size:30px;color:orange; "></i></li>
                          <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                          <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                        </ul>
                      </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                  <div class="card rev_card" style="width:280px ">
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
                </div>
                <div class="col-sm-4">
                  <div class="">
                    <div class="card rev_card" style="width:260px">
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
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-4">
                  <div class="img-box"><img src="/examples/images/thumbs/4.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-sm-4">
                  <div class="img-box"><img src="/examples/images/thumbs/5.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-sm-4">
                  <div class="img-box"><img src="/examples/images/thumbs/6.jpg" class="img-fluid" alt=""></div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-4">
                  <div class="col-sm-4 m-5">
                    <div class="card rev_card" style="width:280px">
                      <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp"
                        alt="" height="300px" alt="Card image">
                      <div class="card-body">
                        <h4 class="card-title rev_h4 ">John Doe</h4>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                          officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                        </p>
                        <ul class=" list-unstyled d-flex justify-content-center text-warning mb-0  m-3 "
                          style="padding-left:75px">
                          <li><i class="fa fa-star fa-solid " style="font-size:30px;color:orange;"></i></li>
                          <li><i class="fa fa-star" style="font-size:30px;color:orange; "></i></li>
                          <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                          <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                        </ul>
                      </div>
                    </div>
                </div>                </div>
                <div class="col-sm-4">
                  <div class="col-sm-4 m-5">
                    <div class="card rev_card" style="width:280px">
                      <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp"
                        alt="" height="300px" alt="Card image">
                      <div class="card-body">
                        <h4 class="card-title rev_h4 ">John Doe</h4>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                          officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                        </p>
                        <ul class=" list-unstyled d-flex justify-content-center text-warning mb-0  m-3 "
                          style="padding-left:75px">
                          <li><i class="fa fa-star fa-solid " style="font-size:30px;color:orange;"></i></li>
                          <li><i class="fa fa-star" style="font-size:30px;color:orange; "></i></li>
                          <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                          <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                        </ul>
                      </div>
                    </div>
                </div>                </div>
                <div class="col-sm-4">
                  <div class="col-sm-4 m-5">
                    <div class="card rev_card" style="width:280px">
                      <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp"
                        alt="" height="300px" alt="Card image">
                      <div class="card-body">
                        <h4 class="card-title rev_h4 ">John Doe</h4>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                          officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                        </p>
                        <ul class=" list-unstyled d-flex justify-content-center text-warning mb-0  m-3 "
                          style="padding-left:75px">
                          <li><i class="fa fa-star fa-solid " style="font-size:30px;color:orange;"></i></li>
                          <li><i class="fa fa-star" style="font-size:30px;color:orange; "></i></li>
                          <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                          <li><i class="fa fa-star" style="font-size:30px;color:orange;"></i></li>
                        </ul>
                      </div>
                    </div>
                </div>                </div>
              </div>
            </div>
          </div>
          {{-- <!-- Carousel controls -->
          <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right"></i>
          </a> --}}
        </div>
      </div>
    </div>
  </div>
</body>

</html>
@include('Home.Product')
























{{-- @include('Home.Header')



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bootstrap Thumbnail Carousel</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    body {
      background: #ebebeb;
    }

    /* h2 {
    color: #696969;
    font-size: 26px;
    font-weight: 300;
    text-align: center;
    position: relative;
    margin: 40px 70px;
    text-transform: uppercase;
    font-family: 'Open Sans', sans-serif;
  }
  h2::after {
    content: "";
    width: 100%;
    position: absolute;
    margin: 0 auto;
    height: 1px;
    border-radius: 1px;
    background: #d4d4d4;
    left: 0;
    right: 0;
    bottom: 14px;
  }
  h2 span {
    display: inline-block;
    padding: 0 25px;
    background:#ebebeb;
    position:relative;
    z-index:2;
  } */
    .carousel {
      margin: 0 auto;
      /* padding: 0 68px; */
    }

    .carousel .carousel-item {
      text-align: center;
      overflow: hidden;
      height: 460px;
    }

    .carousel .carousel-item .img-box {
      background: #fff;
      /* padding: 9px; */
      box-shadow: 0 6px 20px -6px rgba(0, 0, 0, 0.4);
    }

    .carousel .carousel-item img {
      /* margin: 0 auto; */
    }

    .carousel-control-prev,
    .carousel-control-next {
      width: 68px;
      background: none;
    }

    .carousel-control-prev i,
    .carousel-control-next i {
      font-size: 28px;
      position: absolute;
      top: 50%;
      display: inline-block;
      margin-top: -15px;
      /* z-index: 5; */
      left: 0;
      right: 0;
      color: rgba(0, 0, 0, 0.8);
      text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
    }

    .carousel-indicators {
      /* //dot crosual */
      bottom: -40px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
      width: 10px;
      height: 10px;
      border: none;
      border-radius: 50%;
      margin: 1px 4px;
      ? box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
    }

    .carousel-indicators li {
      background: #999;
      border-color: transparent;
    }

    .carousel-indicators li.active {
      background: #555;
    }

    .rev_card {
      background: rgb(240, 236, 240);
      box-shadow: 0 8px 30px -7px #c9dff0;
      /* margin: 50px 0; */
      /* padding: px; */
      border-radius: 20px;
      border: 0;
    }

    .rev_card-img-top {
      /* max-width: 100px; */
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
</head>

<body>
  <div class="container-fluid" style="background-color:rgb(243, 216, 13);padding-top:120px;padding-bottom:120px ">
    <div class="row">
      <div class="col-md-12  ">
        <h2><span>Thumbnail <b>Carousel</b></span></h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-4">
                  <div class="img-box">
                    <div class="card rev_card">
                      <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp"
                        alt="" height="300px" alt="Card image">
                      <div class="card-body">
                        <h5 class="mb-3">Maria Kate</h5>
                        <p>Photographer</p>
                        <p class="text-muted">
                          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                          praesentium voluptatum deleniti atque corrupti.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="img-box">
                    <div class="card rev_card">
                      <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp"
                        alt="" height="300px" alt="Card image">
                      <div class="card-body">
                        <h5 class="mb-3">Maria Kate</h5>
                        <p>Photographer</p>
                        <p class="text-muted">
                          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                          praesentium voluptatum deleniti atque corrupti.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="img-box">
                    <div class="card rev_card" >
                      <img class="rev_card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp"
                        alt="" height="300px" alt="Card image">
                      <div class="card-body">
                        <h5 class="mb-3">Maria Kate</h5>
                        <p>Photographer</p>
                        <p class="text-muted">
                          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                          praesentium voluptatum deleniti atque corrupti.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-4">
                  <div class="img-box"><img src="/examples/images/thumbs/4.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-sm-4">
                  <div class="img-box"><img src="/examples/images/thumbs/5.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-sm-4">
                  <div class="img-box"><img src="/examples/images/thumbs/6.jpg" class="img-fluid" alt=""></div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-4">
                  <div class="img-box"><img src="/examples/images/thumbs/7.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-sm-4">
                  <div class="img-box"><img src="/examples/images/thumbs/8.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-sm-4">
                  <div class="img-box"><img src="/examples/images/thumbs/9.jpg" class="img-fluid" alt=""></div>
                </div>
              </div>
            </div>
          </div>
          {{--
          <!-- Carousel controls -->
          <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right"></i> --}}
          </a>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>
@include('Home.Product') --}}