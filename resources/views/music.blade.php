<!DOCTYPE html>
<html lang="en">

<head>
    <title> PlantationAtHome </title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <audio id="audio">
        <source src="{{URL('./alan.mp3')}}" type="audio/mpeg" />
    </audio>
    <button class="btn btn-primary" id="playPauseBtn" onclick="playpause();">Play</button>
    <button class="btn btn-primary" onclick="stop();">Pause</button>
    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="{{URL('../images/music.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <div>
                        <button><i class="fa-solid fa-backward-fast"></i></button>
                        <button class="btn btn-sm btn-outline-primarym"><i class="fa-solid fa-play"></i></button
                            class="btn btn-sm btn-outline-primary">
                        <button class="btn btn-sm btn-outline-primarym"><i class="fa-solid fa-pause"></i></button
                            class="btn btn-sm btn-outline-primary">
                        <button class="btn btn-sm btn-outline-primarym"><i class="fa-solid fa-forward-fast"></i></button
                            class="btn btn-sm btn-outline-primary">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<section id="header" className="d-flexalign-items-center">
    <div className="container-fluid nav_bg">
        <div className="row">
            <div className="col-10 mx-auto">
                <div className="row">
                    <div className="col-md-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center flex-column">

                        <h1>
                            Welcome to About page
                            <strong className=" brand-name">ThapaTechnical</strong>
                        </h1>
                        <h2 className="my-3">
                            We are the team of talented developer making websites
                        </h2>
                        <div className="mt-3">
                            <NavLink to="/service" className="btn-get-started">
                                Get Started
                            </NavLink>
                        </div>
                    </div>
                    <div className=" col-md-6 order-1 order-lg-2 header-img">
                        <img src={web} className="img-fluid animated" alt="home img" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<script>
var audio = document.getElementById('audio');
var playPauseBtn = document.getElementById('playPauseBtn');
var count = 0;

function playpause() {
    if (count == 0) {
        count = 1;
        audio.play();
    } else {
        count = 0;
        audio.pause();
    }
}

function stop() {
    if (count == 1) {
        count = 0;
        audio.pause();
    }
}
</script>

</html>