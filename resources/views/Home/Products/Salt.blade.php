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
                        <h1 class="text-center " style="font-weight:600">Himalayan Salt Lamp</h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        (  Pink Halite or Mineral Halite  )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        This premium quality unique salt lamp is made from the finest salt
crystals from the Himalayan foothills and hand carved to retain
the unique natural look & beauty of the pure salt crystals.
There are no two crystals exactly alike and Himalayan salt is
the purest in the world.
Heating the salt with a bulb or a candle creates an effect
similar to an ionizer and has many healthful benefits.
Some of the more dramatic claims include migraine
headache relief, enhanced serotonin levels in the blood,
reduced severity of asthma attacks, immune system
enhancement, and reduced vulnerability to colds and flu's.
There is scientific evidence to support these claims, however,
in a effort to avoid hyperbole and scientific debate, here
is what we can tell you for sure about our Himalayan Salt
Lamps.
1. They will release negative ions into the air.
2. They will purify the air.
3. It's relaxing appearance will help you rest and reduce stress.
4. It will help relieve asthma, sinus and allergy symptoms.
                                    </h5>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://images.pexels.com/photos/6614042/pexels-photo-6614042.jpeg?cs=srgb&dl=pexels-vania-k-6614042.jpg&fm=jpg" alt="" height="300px" width="200px"
                                        class="d-block w-100">
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