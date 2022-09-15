@include('Home.Header')
<style>


@media screen and(max-width:480px){
    .gallery-img {
    max-height: 300px;
    max-width: 100%;
    min-height: 300px;
    min-width: 250px;
    padding-left:20px;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 lightgreen;
}
}
.gallery-header {
    color: black;
    font-family: arial;
    text-align: center;
    font-size: 30px;
    font-weight: lighter;
}

.gallery-img {
    max-height: 300px;
    max-width: 250px;
    min-height: 300px;
    min-width: 250px;
    margin: 5px 10px;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 lightgreen;
}

.gallery-img:hover {
    transform: scale(1.1);

}
</style>

<body class="bg-white">


    <div class="container-fluid" style="background-color:#fff;padding-top:120px">
        <div class="row">
            <div class="col-md-12 ">
                <div class="row">
                    <h2 class=" text-center gallery-header">G A L L E R Y</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- plant 1 -->
            <div class=" col-md-12 ">
                <div id="data"></div>
            </div>

        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
    $(document).ready(function() {
        function get_image() {
            $.ajax({
                type: 'get',
                url: "{{route('load_img')}}",
                success: function(data) {
                    console.log(data);
                    html =
                        '<div class="card shadow-lg"><div class="card-body">';

    
                    $(data).each(function(index, value) {
                        html += '<img class="gallery-img" src="../public/uploads/' + value.image +
                            '" alt="">';
                    });
                    html += "</div> </div>";
                    $("#data").html(html);
                }
            });
        }
        get_image();
    });
    </script>

    <div style="padding-top:40px">
        @include('Home.Footer')
    </div>
</body>

<!-- @include('Home.Footer') -->