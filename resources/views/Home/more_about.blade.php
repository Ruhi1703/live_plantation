@include('Home.Header')
<style>
.details {
    font-size: 15px;
    color: black;
    text-align: justify;
    line-height: 1.5rem;
    letter-spacing: 0.5px;
    padding-top: 20px;
}

h5 {
    display: -webkit-box;
    -webkit-line-clamp: 6;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

.card {
    margin-top: 20px;
}

@media screen and (min-width:700px) {
    img {
        max-height: 365px;
    }

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
                        BENEFITS OF PLANT IN HOME</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- plant 1 -->
            <div class=" col-md-6 ">
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
                                    </h5><a href="{{route('snake')}}" style="text-decoration:none">Read More...</a>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://images.unsplash.com/photo-1599009944997-3544a939813c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" style="max-height:300px"
                                        width="200px" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- plant 2 -->
            <div class=" col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color:lightgreen">
                        <h1 class="text-center " style="font-weight:600">Areca palm</h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        ( Dypsis lutescens )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        The areca palm plant is one of the best air purification plant absorbing co2 and
                                        producing o2 to detoxify its surrounding by removing air pollutants such as
                                        formaldehyde, xylene and toluene.It’s also release a large amount of water
                                        vapour into the air, which help to remove toxins from indoor.
                                    </h5><a href="{{route('areca')}}" style="text-decoration:none">Read More...</a>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://images.unsplash.com/photo-1598531403144-43fdb36c9ae8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80" alt="" height="300px"
                                        width="200px" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- plant 3 -->
            <div class=" col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color:lightgreen">
                        <h1 class="text-center " style="font-weight:600">Money plant</h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        ( Epipremnum aureum )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        Money plant is ideal for removing airborne pollutants from the indoor such as
                                        benzene, formaldehyde, carbon monoxide and xylene.This plant fresh oxygen whole
                                        day and help to reduce stress and anxiety. It’s is a lucky plant if you bring
                                        this plant in your home this plant help to increase in wealth.
                                    </h5><a href="{{route('money')}}" style="text-decoration:none">Read More...</a>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://images.unsplash.com/photo-1596539849014-759d6add3941?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1325&q=80" alt="people-working-img-1" alt="" height="300px"
                                        width="200px" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- plant 4 -->
            <div class=" col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color:lightgreen">
                        <h1 class="text-center " style="font-weight:600">Spider plant</h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        ( Chlorophytum comosum )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        According to NASA clean air study, the spider plant is extremely effective at
                                        removing carbon monoxide, formaldehyde, benzene, and toluene from the air.
                                        Spider plant is therapeutic because they offer so many benefits including
                                        reducing depression, stress, anger, anxiety and also help to sleep better.
                                        Spider plant and Snake plant are only that remove ozone from the indoor air.
                                    </h5><a href="{{route('spider')}}" style="text-decoration:none">Read More...</a>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://images.unsplash.com/photo-1610551724444-5fb527b5ad20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80" alt="" height="300px"
                                        width="200px" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- plant 5 -->
            <div class=" col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color:lightgreen">
                        <h1 class="text-center " style="font-weight:600">Aloe Vera plant</h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        ( Asphodelaceae )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        Aloe Vera plant is a flexible, perennial herb that can remove benzene and
                                        formaldehyde from the air and absorb large amount of co2 from indoor air. Aloe
                                        Vera juice is used for Irritable Bowel Syndrome (IBS) problems. The symptoms of
                                        IBS include cramping, abdominal pain, flatulence and vomiting. The aloe vera
                                        leaf innards are rich in compounds and plant mucilage. Topically these help with
                                        skin inflammation and burns. By the same logic, they may help to alleviate
                                        inflammation of the digestive track.
                                    </h5><a href="{{route('aloe')}}" style="text-decoration:none">Read More...</a>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://images.unsplash.com/photo-1509423350716-97f9360b4e09?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" alt="" height="300px" width="200px"
                                        class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- plant 6 -->
            <div class=" col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color:lightgreen">
                        <h1 class="text-center " style="font-weight:600">Broad Lady Palm</h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        ( Rhapis excelsa )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        Broad lady palm plant can break down a variety of toxic air pollutants such as
                                        nitrogen oxide, toluene, benzene and formaldehyde in indoor air. It’s is one of
                                        the few plants which help to remove ammonia that can found in a range of
                                        cleaning products. This plant provide enough oxygen day as well as night and
                                        make the air in your home cleaner and safer to breathe.
                                    </h5><a href="{{route('broad')}}" style="text-decoration:none">Read More...</a>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://www.naturescolours.com.au/wp-content/uploads/2019/10/Lady-Palm-White-Ceramic-Pot-Set-210mm.jpg" alt="" height="300px"
                                        width="200px" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- plant 6 -->
            <div class=" col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color:lightgreen">
                        <h1 class="text-center " style="font-weight:600">Peace lily</h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        ( Spathiphyllum )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        Peace lily help to filter the indoor air, increase the levels of humidity,
                                        helping you breathe better. Pollutants such as benzene, trichloroethylene,
                                        toluene and many other can be removed from the air by growing peace lily plant
                                        in your home. The beauty of this plant is known to bring calmness by alleviating
                                        fillings of stress in the mind and body.

                                    </h5><a href="{{route('peace')}}" style="text-decoration:none">Read More...</a>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://images.unsplash.com/photo-1620311497344-bce841c9c060?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=930&q=80" alt="" height="300px"
                                        width="200px" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- plant 8 -->
            <div class=" col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color:lightgreen">
                        <h1 class="text-center " style="font-weight:600">Chinese evergreen</h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        ( Aglaonema )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        Chinese evergreen is a great low light indoor plant and is easy to grow. It’s is
                                        considered one of the best foliage plant for cleansing room air of toxins such
                                        as benzene and formaldehyde. The evergreen foliage represents purity, nature and
                                        positive energy it radiates. It is also considered as the lucky plant as per
                                        feng shui and considered a bringer of fortune.
                                    </h5><a href="{{route('chiense')}}" style="text-decoration:none">Read More...</a>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://images.unsplash.com/photo-1610551835289-9f8a81fc3a6c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" alt="" height="300px"
                                        width="200px" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- plant 9 -->
            <div class=" col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color:lightgreen">
                        <h1 class="text-center " style="font-weight:600">English ivy</h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        ( Hedera helix )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        English ivy is very effective in reducing the air pollutants and increases the
                                        freshness in home. It is capable of removing benzene, trichloroethylene, toluene
                                        and formaldehyde from the air. This might to improve lung function in people in
                                        breathing difficulty. It's is also useful in reducing cough related to colds and
                                        viral- infections.
                                    </h5><a href="{{route('english')}}" style="text-decoration:none">Read More...</a>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://images.unsplash.com/photo-1509928939474-1ce02eae4b62?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"  alt="" height="300px"
                                        width="200px" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- plant 10 -->
            <div class=" col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color:lightgreen">
                        <h1 class="text-center " style="font-weight:600">Rubber plant</h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        ( Ficus elastica )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        A virture of the rubber plant is that it’s highly effective at cleaning the air.
                                        The rubber plant are top scorers when it comes to removing chemicals found in
                                        furnishings and household cleaning products. Its remove trichloroethylene,
                                        formaldehyde, carbon monoxide and benzene from the air. It’s also remove
                                        airborne toxins and fight tropical diseases and parasities. This plant produce
                                        lots of oxygen more than any other plants, in fact! In addition to producing
                                        oxygen and eliminating air toxins, the rubber plant effectively removes mold
                                        spores and bacteria from the air b y up o 60%. It’s is also a lucky plant when
                                        placed in the home, the plant foster fortune, abundance and increase in wealth.
                                    </h5><a href="{{route('rubber')}}" style="text-decoration:none">Read More...</a>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://images.unsplash.com/photo-1616132803693-958f93bffb5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80" alt="people-working-img-1" alt="" height="300px"
                                        width="200px" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- plant 11 -->
            <div class=" col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color:lightgreen">
                        <h1 class="text-center " style="font-weight:600">Himalayan Stone Salt</h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        ( Pink Halite or Mineral Halite )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        A virture of the rubber plant is that it’s highly effective at cleaning the air.
                                        The rubber plant are top scorers when it comes to removing chemicals found in
                                        furnishings and household cleaning products. Its remove trichloroethylene,
                                        formaldehyde, carbon monoxide and benzene from the air. It’s also remove
                                        airborne toxins and fight tropical diseases and parasities. This plant produce
                                        lots of oxygen more than any other plants, in fact! In addition to producing
                                        oxygen and eliminating air toxins, the rubber plant effectively removes mold
                                        spores and bacteria from the air b y up o 60%. It’s is also a lucky plant when
                                        placed in the home, the plant foster fortune, abundance and increase in wealth.
                                    </h5><a href="{{route('salt')}}" style="text-decoration:none">Read More...</a>
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
            <!-- plant 12 -->
            <div class=" col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color:lightgreen">
                        <h1 class="text-center " style="font-weight:600">Boston Fern </h1>
                    </div>
                    <div class="card-body">
                        <div class="row about-margin">
                            <div class="col-md-7 ">
                                <div class="row">
                                    <h2 style="font-size:28px;font-weight:400;color:#070707;margin-top:20px;">Scientific
                                        Name
                                        ( Nephrolepis exaltata )</h2>
                                    <hr>
                                </div>
                                <div class="row">
                                    <h5 class="details">
                                        Boston fern are fantastic for removing common airborne pollutants formaldehyde,
                                        benzene, toluene and other which have been thought to cause headache, trouble
                                        breathing and the growth of cancerous cells. The Boston fern not only spruce up
                                        the indoor air quality but also improves the humidity levels by restoring
                                        moisture to the air naturally, which gives a soothing effect. The air purifying
                                        proprieties relief to people suffering from dry skin, dry nose and sore throats
                                        in this way you can sleep peacefully, your plant will take care of everything.
                                </div>
                                <a href="{{route('boston')}}" style="text-decoration:none">Read More...</a>
                            </div>
                            <div class=" col-md-5">
                                <div class="row">
                                    <img src="https://images.unsplash.com/photo-1497250681960-ef046c08a56e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="people-working-img-1" alt="" height="300px"
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