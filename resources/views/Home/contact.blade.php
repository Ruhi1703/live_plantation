@include('Home.Header')
<style>
.details {
    font-size: 20px;
    color: black;
    font-weight: 900;
    text-align: justify;
    line-height: 1.5rem;
    letter-spacing: 1px;
    padding-top: 20px;
}


.card {
    margin-top: 20px;
}

@media screen and (max-width: 500px) {
    .details {
        font-size: 18px;
        color: black;
        font-weight: 900;
        text-align: justify;
        line-height: 1.5rem;

    }

    img {
        height: 250px;
        width: 200px;
        margin: 0px
    }
}
</style>

<body class="bg-white">


    <div class="container " style="background-color:#fff;padding-top:120px">
        <div class="row">
            <div class="col-md-12 ">
                <div class="row">
                    <h2 class=" text-center"
                        style="font-size: 2.5rem;font-family: Poppins, sans-serif;font-weight: 600;">
                        Contact Us</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- plant 1 -->
            <div class=" col-md-12 ">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-6 ">
                                <div class="card shadow-lg">
                                    <div class="mapouter">
                                        <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%"
                                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                                src="https://maps.google.com/maps?width=620&amp;height=435&amp;hl=en&amp;q=Gaya college,Gaya&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                                href="https://www.kokagames.com/fnf-friday-night-funkin-mods/">Friday
                                                Night Funkin Mods</a></div>
                                        <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            width: 100%;
                                            height: 435px;
                                        }

                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            width: 100%;
                                            height: 435px;
                                        }

                                        .gmap_iframe {
                                            height: 435px !important;
                                        }
                                        </style>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="card shadow-lg">
                                    <div class="card-header">
                                        <h1 class="text-center">Fill The Form</h1>
                                    </div>
                                    <div class="card-body">
                                        @if (Session::has('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                            @elseif(Session::has('fail'))
                                            <div class="alert alert-warning">
                                                {{ Session::get('fail') }}
                                            </div>
                                        @endif
                                        <form action="{{route('message')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 form-group" style="margin:10px">
                                                    <label for="name">Name::</label>
                                                    <input type="text" name="name" placeholder="Enter your full name.."
                                                        class="form-control @error('name') is-invalid @enderror">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 form-group" style="margin:10px">
                                                    <label for="name">Mobile::</label>
                                                    <input type="text" name="mob"
                                                        placeholder="Enter your mobile number.."
                                                        class="form-control @error('mob') is-invalid @enderror">
                                                    @error('mob')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                
                                                <div class="col-md-12 form-group" style="margin:10px">
                                                    <label for="name">Message::</label>
                                                    <textarea type="text" name="msg" placeholder="Enter your message.."
                                                        class="form-control @error('msg') is-invalid @enderror"></textarea>
                                                    @error('msg')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-12 form-group" style="margin:10px">
                                                    <button type="submit"
                                                        class="btn btn-block btn-outline-success">Submit</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div style="padding-top:40px">
        @include('Home.Footer')
    </div>


</body>