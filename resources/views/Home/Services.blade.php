<style>
.geeks img {
    cursor: pointer:
}

.geeks {
    width: 100%;
    height: 400px;
    overflow: hidden;
    margin: 0 auto;
}

.geeks img {
    width: 100%;
    transition: 0.5s all ease-in-out;
}

.geeks:hover img {
    transform: scale(1.1);
}

.f_img {
    padding: 20px
}

@media screen and(min-width:500px) {
    #product {
        margin: 0px;
    }

    .f_img {
        padding: 100px
    }
}
</style>
<div class="container bg-white" id="product">
    <div id="product">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center" style="font-size:44px;font-weight:bold;color:#070707;margin:5px;">Our Services
                </h1>
            </div>
            <hr>
        </div>
        <!-- product 1 -->
        <div class="row" style="margin-top:50px">
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg  mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1595311182166-d63273ddc386?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=686&q=80" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:bold;margin:10px;font-size:20px">Air Quality
                            Testing
                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:30px"><a href="#" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#airQuality">
                                Model Details
                            </a></p>
                    </div>
                </div>
            </DIV>
            <!-- product 2 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg  mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1610232603071-0070518c79d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80" alt="people-working-img-1" class="img-responsive"
                            style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase text-black" style="font-weight:bold;margin:10px;font-size:20px"> CMP with Insurance
                            
                        </h4>
                        <br>
                        <br>
                         <p style="padding-left:30px"><a  href="#" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#envorment">
                                Model Details
                            </a></p>
                    </div>
                </div>
            </div>
            <!-- product 3 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg  mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1485115905815-74a5c9fda2f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=718&q=80" alt="people-working-img-1" class="img-responsive"
                            style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:bold;margin:10px;font-size:20px">Coming Soon..
                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:30px">
                            <a href="#" class="btn btn-default">More Details..</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

{{-- 
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center f_img">
                <img src="{{URL('./images/plant/footer.jpeg')}}" alt="">
            </div>
        </div>
    </div> --}}
</div>
<!-- Call Us  -->

<div class="container  bg-warning shadow-lg" >
    <div class="row p-3 text-center text-uppercase" >
        <div class="col-md-8" style="margin-top:5px;font-size:30px;color:black;font-weight:bold">Call us for free consultantation </div>
        <div class="col-md-4">
            <button class="btn btn-lg btn-success"><a style="text-decoration:none;color:white"
                    href="tel:+91 7004218506"><i class="fa fa-phone" aria-hidden="true"></i>  Call Now</a></button>
        </div>
        {{-- <div class="col-md-4">
            <button class="btn btn-lg btn-primary"><a href="contact" style="text-decoration:none;color:white"> Contact Us</a></button>
        </div> --}}
    </div>

    
  
</div>

<!-- Air Quality Testing -->
<div class="modal fade" id="airQuality" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Air Quality Testing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body " style="padding:20px;font-size:20px;color:#53A92C">
                <img src="https://images.unsplash.com/photo-1595311182166-d63273ddc386?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=686&amp;q=80"
                    alt="people-working-img-1" class="img-responsive" style="width: 100%; height: 350px;">
                <hr>
                <p>1.Testing of HCHO, TVOC, PM2.5, PM10,
                    Fresness Level.</p>
                <p>
                    2.Details reports are provided in 2- 3
                    working days.</p>
                <p>
                    3.Only available in gaya (Bodhgaya)</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Envorment Testing -->
<div class="modal fade" id="envorment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-warning" id="exampleModalLabel">Envoirment Testing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body " style="padding:20px;font-size:20px;color:#53A92C">
                <h4 class="text-uppercase text-black"" style="font-weigth:bold"># Comprehensive Maintenance
                    Policy (CMP)
                </h4>
                <hr>
                <p>We are very happy to provide our
                    comprehensive maintenance of plants under
                    CMP for better growth & long living of plants
                    and also make a healthy relationship between
                    customers and clients.</p>
                <hr>
                <p class="text-black">
                    In our CMP, following services will be provided.</p>
                <p>
                    <hr>
                    • CUTTING of dried and rotten leaves from
                    plants.
                </p>
                <p>
                    •
                    CLEANING of full plants with pot.</p>
                <p>
                    • WATERING of plants as per requirement.</p>
                <p>
                    • FEEDING organic fertilizer for continuous
                    growth of plants.</p>
                <hr>
                <p class="text-black">
                    In our CMP, one personnel through</p>
                <hr>
                <p>
                    PlantationAtHome will visit customer location for
                    4 times in a month (once in a week).
                    On purchasing our services under CMP.
                    PlantationAtHome will take care of your plants.
                    In case if plants get dried or damaged during
                    CMP period, we will replace it with new plants
                    without any cost within a week.
                    For enjoying our services, you can pay
                    through either online or offline as per your
                    convenience.</p>
                <hr>
                <p>
                    Charges for our services- 100/plant per
                    month 25/plant per visit).</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



