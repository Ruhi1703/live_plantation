@include('Home.Header')
<style>
.details {
    font-size: 20px;
    color: black;
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
                        Plant Details</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- plant 1 -->
            <div class=" col-md-12 ">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color:lightgreen">
                        <h1 class="text-center " style="font-weight:600">Snake plant</h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        ( Dracaena Trifasciata )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        The snake plant purifying air by absorbing toxins through the leaves and produce
                                        pure
                                        oxygen
                                        whole
                                        day. This plant absorb cancer causing pollutants like benzene, co2, and
                                        formaldehyde
                                        convert
                                        into
                                        fresh oxygen. This is one of the best plant for removing of ozone from indoor
                                        air.
                                    </h5>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://images.unsplash.com/photo-1599009944997-3544a939813c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" height="300px"
                                        width="200px" class="d-block w-100">
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