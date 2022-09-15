<!DOCTYPE html>
<html lang="en">

<head>
    <title>PlantationAtHome</title>
    <link rel="icon" href="{{URL('./plantlogo.png')}}" style="width:10px">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <link href="{{URL('./admin/css/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-white shadow-lg " style="background-color:#33cc33">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 text-black" href="#">

            PlantationAtHome</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-black" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 text-black">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"
                        style="color:black"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" style="color:black" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav" class="text-black ">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion shadow-lg" style="background-color:lightgreen" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav text-black">

                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{route('/dashboard')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading" style="border-bottom:solid 1px black;">
                            Features</div>


                        <a class="nav-link" href="{{route('profile')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Profile
                        </a>
                        <a class="nav-link" href="{{route('users.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-message"></i></div>
                            Message
                        </a>
                        <a class="nav-link" href="{{route('image')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-upload"></i></div>
                            Upload Image
                        </a>
                        <a class="nav-link" href="{{route('list_img')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                            List Images
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Upcoming Features
                        </a>
                    </div>
                </div>
                <hr>
                <div class="sb-sidenav-footer" style="text-transform: capitalize;">
                    <div class="small">Logged in as:</div>
                    {{Auth::user()->name}}
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">