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
<div class="container-fluid bg-white" id="product" style="padding-top:50px">
    <div id="product">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center" style="font-size:44px;font-weight:bold;color:#070707;margin:5px;">Our Products
                </h1>
            </div>
            <hr>
        </div>
        <!-- product 1 -->
        <div class="row" style="margin-top:50px">
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg p-3 mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1598531403144-43fdb36c9ae8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:bold;margin:0 25px;font-size:20px">ARECA PALM

                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:20px"><a href="{{route('areca')}}" class="  btn btn-default">More
                                Details..</a></p>
                    </div>
                </div>
            </DIV>
            <!-- product 2 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg p-3 mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.pexels.com/photos/6614042/pexels-photo-6614042.jpeg?cs=srgb&dl=pexels-vania-k-6614042.jpg&fm=jpg" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:900;margin:0 25px;font-size:20px"> Himalayan
                            Salt Lamp
                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:20px"><a href="{{route('salt')}}" class="btn btn-default">More
                                Details..</a></p>
                    </div>
                </div>
            </div>
            <!-- product 3 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg p-3 mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1509928939474-1ce02eae4b62?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:bold;margin: 0 25px;font-size:20px">
                            ENGLISH
                            IVY

                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:20px"><a href="{{route('english')}}" class="btn btn-default">More
                                Details..</a></p>
                    </div>
                </div>
            </div>
            <!-- product 4 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg p-3 mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1610551724444-5fb527b5ad20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:bold;margin: 0 25px;font-size:20px">
                            SPIDER
                            PLANT

                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:20px"><a href="{{route('spider')}}" class="btn btn-default">More
                                Details..</a></p>
                    </div>
                </div>
            </div>
            <!-- product 5 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg p-3 mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1620311497344-bce841c9c060?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=930&q=80" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:bold;margin: 0 25px;font-size:20px">
                            Peace
                            lily
                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:20px"><a href="{{route('peace')}}" class="btn btn-default">More
                                Details..</a></p>
                    </div>
                </div>
            </div>
            <!-- product 6 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg p-3 mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1599009944997-3544a939813c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:bold;margin: 0 25px;font-size:20px">
                            Snake
                            plant
                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:20px"><a href="{{route('snake')}}" class="btn btn-default">More
                                Details..</a></p>
                    </div>
                </div>
            </div>
            <!-- product 7 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg p-3 mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://www.naturescolours.com.au/wp-content/uploads/2019/10/Lady-Palm-White-Ceramic-Pot-Set-210mm.jpg" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:bold;margin: 0 25px;font-size:20px">
                            Broad lady
                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:20px"><a href="{{route('broad')}}" class="btn btn-default">More
                                Details..</a></p>
                    </div>
                </div>
            </div>
            <!-- product 8 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg p-3 mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1509423350716-97f9360b4e09?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:bold;margin: 0 25px;font-size:20px">
                            Aloe Vera
                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:20px"><a href="{{route('aloe')}}" class="btn btn-default">More
                                Details..</a></p>
                    </div>
                </div>
            </div>
            <!-- product 9 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg p-3 mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1616132803693-958f93bffb5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:bold;margin: 0 25px;font-size:20px">
                            Rubber
                            Plant
                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:20px"><a href="{{route('rubber')}}" class="btn btn-default">More
                                Details..</a></p>
                    </div>
                </div>
            </div>
            <!-- product 10 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg p-3 mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1596539849014-759d6add3941?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1325&q=80" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:900;margin: 0 25px;font-size:20px"> Money Plant
                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:20px"><a href="{{route('money')}}" class="btn btn-default">More
                                Details..</a></p>
                    </div>
                </div>
            </div>
            <!-- product 11 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg p-3 mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1610551835289-9f8a81fc3a6c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:900;margin: 0 25px;font-size:20px"> Chinese
                            Evergreen
                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:20px"><a href="{{route('chiense')}}" class="btn btn-default">More
                                Details..</a></p>
                    </div>
                </div>
            </div>
            <!-- product 12 -->
            <DIV class="col-md-4 col-sm-6 col-xs-12">
                <div class="card shadow-lg p-3 mb-5 bg-white " style="margin:15px">
                    <div class="geeks">
                        <img src="https://images.unsplash.com/photo-1497250681960-ef046c08a56e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="people-working-img-1"
                            class="img-responsive" style="width: 100%; height: 380px;">
                    </div>
                    <div>
                        <h4 class="text-uppercase" style="font-weight:900;margin: 0 25px;font-size:20px"> Boston Fern
                        </h4>
                        <br>
                        <br>
                        <p style="padding-left:20px"><a href="{{route('boston')}}" class="btn btn-default">More
                                Details..</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center f_img">
                <img src="{{URL('./images/plant/footer.jpeg')}}" alt="">
            </div>
        </div>
    </div>
</div>