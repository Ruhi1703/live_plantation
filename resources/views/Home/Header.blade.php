<head>
    <title> PlantationAtHome </title>

   <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.navbar-brand {
    font-size: 42px;
    font-family: Poppins, sans-serif;
    font-weight: 600;
    color: white;
}

li {
    font-size: 0.9rem;
    font-family: Poppins, sans-serif;
    font-weight: 900;
    line-height: 15px;
    color: white;
}

li a {
    text-decoration: none;
    color: white;
}

li a:hover {
    text-decoration: none;
    color: #53A92C;
    webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}

.navbar {
    background-color: rgba(1, 25, 0, 0.6);
}

.navbar-toggler {
    padding: 1px 5px;
    font-size: 18px;
    line-height: .3;
    background: #fff;
}

@media screen and (min-width: 500px) {
    .navbar-brand {
        font-size: 42px;
        font-family: Poppins, sans-serif;
        font-weight: bold;
        padding-left: 100px;
    }

    ul {
        padding-right: 100px;
    }

}

@media screen and (max-width: 500px) {
    .navbar-brand {
        font-size: 28px;
        font-family: Poppins, sans-serif;
        font-weight: bold;
        padding-left: 0px;
    }

    ul {
        text-align: center;
    }

    nav ul li{
        transition: all ease-in-out .2s;
        border-bottom: solid 2px white;
        width: 100%;
    }
    nav ul li:hover{
        
    }

    .navbar {
        background-color: black;
    }

}
</style>
<nav class="navbar navbar-expand-lg navbar-light  fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="javascript:void(0)">PlantationAtHome</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item" style="display:none">
                    <a class="nav-link" href="javascript:void(0)">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto text-uppercase">
                <li class="nav-link" style="padding:15px 15px;"><a href="/">Home</a> </li>
                <li class="nav-link" style="padding:15px 15px;"><a href="{{route('about')}}">About Us</a> </li>
                <li class="nav-link" style="padding:15px 15px;"><a href="{{route('more_about')}}">Product</a> </li>
                <li class="nav-link" style="padding:15px 15px;"><a href="{{route('gallery')}}">Gallery</a> </li>
                <li class="nav-link" style="padding:15px 15px;"><a href="{{route('contact')}}">Contact Us</a> </li>
                <li class="nav-link" style="padding:15px 15px;"><a href="{{route('admin_login')}}">Admin</a> </li>
            </ul>
        </div>
    </div>
</nav>