<style>
* {
    font-family: 'Montserrat', sans-serif;
}

.bg-light {
    background-color: transparent !important;
}

.carousel-caption {
    bottom: 200px;
}

.carousel-caption h5 {
    font-size: 45px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top: 25px;
    font-weight: 900;
}

.carousel-caption p {
    width: 60%;
    margin: auto;
    font-size: 18px;
    line-height: 1.9;
}

.carousel-caption a {
    text-transform: uppercase;
    text-decoration: none;
    background: lightgreen;
    padding: 10px 30px;
    display: inline-block;
    color: #000;
    margin-top: 15px;
    border-radius: 25px;
}

.navbar-nav a {
    font-size: 14px;
    text-transform: uppercase;
    font-weight: bold;
}

/* .navbar-light .navbar-brand {
	color: #fff;
	font-size: 25px;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 2px;
} */
.navbar-light .navbar-brand:focus,
.navbar-light .navbar-brand:hover {
    color: #fff;
}

.navbar-light .navbar-nav .nav-link {
    color: #fff;
}

.navbar-light .navbar-nav .nav-link:focus,
.navbar-light .navbar-nav .nav-link:hover {
    color: #fff;
}

.navbar-toggler {
    padding: 1px 5px;
    font-size: 18px;
    line-height: 0.3;
    background: #fff;
}

@media only screen and (max-width: 767px) {
    .navbar-nav {
        text-align: center;
        background: rgba(0, 0, 0, 0.5);
    }

    .carousel-caption h5 {
        font-size: 40px;
    }

    .carousel-caption a {
        padding: 10px 15px;
        font-size: 15px;
    }

    .w-100 {
        height: auto;
    }

    .carousel-caption h5 {
        font-size: 20px;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 900;
    }



}

.carousel-caption {
    background: rgba(0, 0, 0, 0.2);
}

.slider-item {
    position: relative;
    max-height: 800px;
    height: 100%;
}
</style>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
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
            <!-- <img src="{{URL('./images/Slides/slide2.jpeg')}}"  class="d-block w-100"  alt="..."> -->
            <img src="https://images.unsplash.com/photo-1592150621744-aca64f48394a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1791&q=80" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 class="animated bounceInRight" style="animation-delay: .5s">WELCOME TO
                    PLANTATIONATHOME</h5>
                <p class="animated zoomIn" style="animation-delay: 3s"><a href="{{route('about')}}">Learn More</a>
                </p>
            </div>
        </div>
        <div class="carousel-item slider-item">
            <img src="https://images.unsplash.com/photo-1592150621744-aca64f48394a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1791&q=80" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 class="animated bounceInLeft" style="animation-delay: 1s">INSTALL 100% NATURAL AIR PURIFIER PLANT
                    RECOMMENDED BY NASA</h5>

                <p class="animated zoomIn" style="animation-delay: 3s"><a href="{{route('about')}}">Learn More</a>
                </p>
            </div>
        </div>
        <div class="carousel-item slider-item">
            <img src="https://images.unsplash.com/photo-1592150621744-aca64f48394a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1791&q=80" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 class="animated bounceInUp" style="animation-delay: 1s">SO TRY TO GROW THESE PLANTS INSIDE YOUR HOME
                    AND HAVE GOOD,CLEAN AIR TO BREATHE</h5>
                <p class="animated zoomIn" style="animation-delay: 3s"><a href="{{route('about')}}">Learn More</a>
                </p>
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