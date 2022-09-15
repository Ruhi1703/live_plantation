<style>
a {
    text-decoration: none;
}

@media screen and (max-width: 768px) {
    .btn-large {
        padding: 5px 25px;
        font-size: 14px;
    }

    h3 {
        font-size: 15px;
        color: white;
        font-weight: bold;
        font-family: Poppins, sans-serif;
        margin: 30px;
        background: rgba(0, 0, 0, 0.2);

    }


     .C_img {
        min-height: 400px;
        max-height: 400px;
    }

    .carousel-caption {
        padding-bottom: 80px;

    }
}

@media screen and (min-width: 768px) {
    .carousel-caption {
        padding-bottom: 200px;

    }

    .C_img {
        min-height: 900px;
        max-height: 900px;
    }

    h3 {
        font-size: 60px;
        color: white;
        font-weight: bold;
        margin: 50px;
        font-family: Poppins, sans-serif;
        background: rgba(0, 0, 0, 0.2);
    }

    .btn-large {
        padding: 11px 45px;
        font-size: 18px;
    }
}

/**
 * Button
 */
.btn-transparent {
    background: transparent;
    color: #fff;
    border: 2px solid #fff;
}

.btn-transparent:hover {
    background-color: #53A92C;
    color: #fff;
}

.btn-rounded {
    border-radius: 70px;
}



/**
 * Change animation duration
 */
.animated {
    -webkit-animation-duration: 1.5s;
    animation-duration: 1.5s;
}

@-webkit-keyframes fadeInRight {
    from {
        opacity: 0;
        -webkit-transform: translate3d(100px, 0, 0);
        transform: translate3d(100px, 0, 0);
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        -webkit-transform: translate3d(100px, 0, 0);
        transform: translate3d(100px, 0, 0);
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}

.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
}
</style>
<!-- Full Page Image Background Carousel Header -->

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="C_img" src="https://images.unsplash.com/photo-1592150621744-aca64f48394a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1791&q=80" alt="Los Angeles" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h3 class="animated bounceInLeft">WELCOME TO
                    PLANTATIONATHOME</h3>
                <p class="animated zoomIn" style="animation-delay: 1s"><a class="btn-large btn-rounded btn-transparent"
                        href="{{route('about')}}">Learn More</a>
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="C_img" src="https://images.unsplash.com/photo-1615875882968-3e393f78765a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2064&q=80" alt="Chicago" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h3 class="animated zoomIn
">INSTALL 100% NATURAL AIR PURIFIER PLANT
                    RECOMMENDED BY NASA</h3>
                <p class="animated zoomIn" style="animation-delay: 1s"><a class="btn-large btn-rounded btn-transparent"
                        href="{{route('about')}}">Learn More</a>
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="C_img" src="https://images.unsplash.com/photo-1525247862234-30193931fdf7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1504&q=80" alt="New York" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h3 class="animated tada">SO TRY TO GROW THESE PLANTS INSIDE YOUR HOME
                    AND HAVE GOOD,CLEAN AIR TO BREATHE</h3>
                <p class="animated zoomIn" style="animation-delay: 1s"><a class="btn-large btn-rounded btn-transparent"
                        href="{{route('about')}}">Learn More</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>