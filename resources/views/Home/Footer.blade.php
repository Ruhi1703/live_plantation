<style>
ul {
    list-style-type: none;
}

.address li .fa {
    float: left;
    width: 36px;
    height: 36px;
    font-size: 20px;
    color: #53a92c;
    line-height: 36px;
    text-align: center;
    background: #000000;
    border: 1px solid #272727;
    border-radius: 2px;
    margin-right: 14px;
}

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.address li span {
    display: table;
    color: #bcbcbc;
    padding-top: 6px;
}

@media screen and (min-width: 700px) {
    .f_photo {
        margin: 100px 100px 0px 50px;
    }
    .contact{
        padding-left:80px;
    }
}

@media screen and (max-width: 480px) {
    .f_photo{
    margin:0;
    text-align:center;
}
.add{
    padding-left:40px;
    border-bottom:solid 0.5px lightgrey;
    margin-bottom:10px;
}
    
}
@media screen and (max-width: 480px) .footer-instagram {
    text-align: center;
}

img {
    height: auto;
    max-width: 100%;
    vertical-align: middle;
}

img {
    height: auto;
    max-width: 100%;
    vertical-align: middle;
}

img {
    border: 0;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

img {
    vertical-align: middle;
}

img {
    border: 0;
}

.footer-instagram a img {
    width: 84px;
    height: 84px;
}
</style>
<div class="container-fluid text-center bg-black  text-white">
    <div class="row"style="padding-top:30px">
        <div class="col-md-4 col-sm-12">
            <div class="f_photo">
                <h1 class="text-uppercase" style="font-size:24px;font-weight:900">About Us</h1>
                <div class="row" style="margin-top:30px">
                    <p style="font-size:17px; color:lightgrey;text-align:justify;line-height:1.5rem;;width:100%">
                        PlantationAtHome brings nature to your ambience for pollution
                        free
                        life. We installs variety of indoor
                        plants which remove indoor air pollution.</p>
                    <div class="flex">
                        <a href="https://www.facebook.com/112185104887388/posts/pfbid02t9tRoaxaDSdoery7rHVoLKTdhwQnjsEXBeetoa2NH9je5WLGhg51Du3cN8Wys1nHl/?app=fbl"
                            style="text-decoration :none">
                            <i class="fa fa-facebook-square" aria-hidden="true"
                                style="font-size:30px;color:lightblue;cursor:pointer;margin:5px"></i></a>
                        <a href="https://instagram.com/plantationathome_?igshid=YmMyMTA2M2Y="
                            style="text-decoration :none"><i class="fa fa-instagram" aria-hidden="true"
                                style="font-size:30px;color:pink;cursor:pointer;margin:5px"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="f_photo ">
                <h1 class="text-uppercase text-center" style="font-size:24px;font-weight:900">Contact</h1>
                <div class="row add contact text-center" style="margin-top:30px">
                    <ul class="address">
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>+91 7004218506,8092990637</span>
                        </li>
                    </ul>
                    <ul class="address">
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span>plantationathome@gmail.com</span>
                        </li>
                    </ul>
                    <ul class="address">
                        <li>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>www.plantationathome.com</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="f_photo">
                <h1 class="text-uppercase" style="font-size:24px;font-weight:900">photo gallery</h1>
                <div class="row" style="margin:30px 0px">
                    <div class="footer-instagram">
                        <a href="{{route('gallery')}}"><img src="https://images.unsplash.com/photo-1598531403144-43fdb36c9ae8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80" alt="people-working-img-1" alt="footer-instagram-img-1"></a>
                        <a href="{{route('gallery')}}"><img src="https://images.pexels.com/photos/6614042/pexels-photo-6614042.jpeg?cs=srgb&dl=pexels-vania-k-6614042.jpg&fm=jpg" alt="people-working-img-1" alt="footer-instagram-img-1"></a>
                        <a href="{{route('gallery')}}"><img src="https://images.unsplash.com/photo-1509928939474-1ce02eae4b62?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="people-working-img-1" alt="footer-instagram-img-1"></a>
                        <a href="{{route('gallery')}}"><img src="https://images.unsplash.com/photo-1610551724444-5fb527b5ad20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80" alt="people-working-img-1" alt="footer-instagram-img-1"></a>
                        <a href="{{route('gallery')}}"><img src="https://images.unsplash.com/photo-1620311497344-bce841c9c060?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=930&q=80" alt="people-working-img-1" alt="footer-instagram-img-1"></a>
                        <a href="{{route('gallery')}}"><img src="https://images.unsplash.com/photo-1599009944997-3544a939813c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="people-working-img-1"
                                alt="footer-instagram-img-1"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="footer bg-dark text-white text-center" style="height:50px;">
    <p style="padding-top:15px"> © Copyright <?php echo  "  ".date("Y") ?> by PlantationAtHome</p>
</div>