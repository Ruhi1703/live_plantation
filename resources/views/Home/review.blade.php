<style>
  /* .rev_img_box {
      width: 145px;
      height: 145px;
      border: 2px solid green;

      margin: 0 auto;
      border-radius: 50%;
  }
  
  .rev_img {
      width: 90%;
      height: 90%;
      display: block;
      border-radius: 50%;
      background-color: white;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  } */

  .checked {
    color: orange;
  }

  .rev_h2 {
    color: #333;
    text-align: center;
    text-transform: uppercase;
    font-family: "Roboto", sans-serif;
    font-weight: bold;
    position: relative;
    margin: 25px 0 50px;
  }

  .rev_overview {
    text-align: center;
    padding-bottom: 5px;
  }

  .rev_testimonial {
    padding-left: 70px;
    padding-right: 90px;
  }


  .round-6 {
    border-radius: 70%;
    border: 4px solid green;
    width: 145px;
    height: 145px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

  }
 .carousel-indicators button.active {
	width: 11px;
	height: 11px;
	margin: 1px 5px;
	border-radius: 50%;
}
 .rev_crcl {
	width: 11px;
	height: 11px;
	margin: 1px 5px;
	border-radius: 50%;
  

}

</style>
<!-- Carousel -->
<div id="rev_demo" class="carousel slide " data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators " >
    <button type="button" data-bs-target="#rev_demo" data-bs-slide-to="0" class="active bg-success " ></button>
    <button type="button" data-bs-target="#rev_demo" data-bs-slide-to="1" class="rev_crcl  bg-success"></button>
    <button type="button" data-bs-target="#rev_demo" data-bs-slide-to="2" class="rev_crcl  bg-success"></button>
  </div>
  <div class="row">
    <div class="col-12 ">
      <h1 class="text-center" style="font-size:44px;font-weight:bold;color:#070707;margin:5px;">Our Clients Say
      </h1>
    </div>
    {{-- <hr class="m-3 "> --}}
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row justify-content-md-center">
        <div class="card ">
          <div class="card-body text-center ">
            <div class="rev_img_box  "><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                class="rev_img round-6 " alt=""></div>
            <p class="rev_testimonial mx-sm-4 my-sm-2 ">Vestibulum quis quam ut magna consequat faucibus. Pellentesque
              eget
              nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis
              quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida
              odio. Phasellus auctor velit.</p>
            <p class="rev_overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
            <div class="star-rating">
              <ul class="list-inline p-3">
                  <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </ul>
            </div>
          </div>
        </div>
        <div class="card ">
          <div class="card-body text-center ">
            <div class="rev_img_box  "><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                class="rev_img round-6 " alt=""></div>
            <p class="rev_testimonial mx-sm-4 my-sm-2 ">Vestibulum quis quam ut magna consequat faucibus. Pellentesque
              eget
              nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis
              quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida
              odio. Phasellus auctor velit.</p>
            <p class="rev_overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
            <div class="star-rating">
              <ul class="list-inline p-3">
                  <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item bg-danger">
      <div class="row justify-content-md-center">
        <div class="card  ">
          <div class="card-body text-center ">
            <div class="rev_img_box  "><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp"
                class="rev_img round-6 " alt=""></div>
            <p class="rev_testimonial mx-sm-4 my-sm-2 ">Vestibulum quis quam ut magna consequat faucibus. Pellentesque
              eget
              nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis
              quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida
              odio. Phasellus auctor velit.</p>
            <p class="rev_overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
            <div class="star-rating">
              <ul class="list-inline p-3  >
                ">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-o checked"></span>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row justify-content-md-center">
        <div class="card  ">
          <div class="card-body text-center ">
            <div class="rev_img_box  "><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp"
                class="rev_img round-6 " alt=""></div>
            <p class="rev_testimonial mx-sm-4 my-sm-2 ">Vestibulum quis quam ut magna consequat faucibus. Pellentesque
              eget
              nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis
              quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida
              odio. Phasellus auctor velit.</p>
            <p class="rev_overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
            <div class="star-rating">
              <ul class="list-inline p-3  >
                ">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-o checked"></span>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev " type="button" data-bs-target="#rev_demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#rev_demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>