

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');
    .con_container {
        position: relative;
        width: 350px;
        background-color: #c2fbd7;

        /* height: 50%; */
        border-radius: 20px;
        padding: 0px 30px 30px 30px;
        box-sizing: boder-box;
        /* background: #ecf0f3; */
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;    }
    /* .brand-logo {
        height: 100px;
        width: 100px;
        background: url("https://img.icons8.com/color/100/000000/twitter--v2.png");
        margin: auto;
        border-radius: 50%;
        box-sizing: border-box;
        box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
    } */

    .con_brand-title {
        margin-top: 10px;
        font-weight: 900;
        font-size: 1.8rem;
        color: #1DA1F2;
        letter-spacing: 1px;
    }

    .inputs {
        text-align: left;
        margin-top: 30px;
    }

    .con_label,
    .con_input,
    .con_button {
        display: block;
        width: 100%;
        padding: 0;
        border: none;
        outline: none;
        box-sizing: border-box;
    }

    .con_label {
        margin-bottom: 4px;
    }

    .con_label:nth-of-type(2) {
        margin-top: 12px;
    }

    .con_input::placeholder {
        color: gray;
    }

    .con_input {
        background: #ecf0f3;
        padding: 10px;
        padding-left: 20px;
        height: 50px;
        font-size: 14px;
        border-radius: 50px;
        box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
    }

    /* .con_button {
        color: white;
        margin-top: 20px;
        background: #1DA1F2;
        height: 40px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: 900;
        box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
        transition: 0.5s;
    } */

    .con_button:hover {
        box-shadow: none;
    }

    /* a {
        position: absolute;
        font-size: 8px;
        bottom: 4px;
        right: 4px;
        text-decoration: none;
        color: black;
        background: yellow;
        border-radius: 10px;
        padding: 2px;
    } */

    h1 {
        position: absolute;
        top: 0;
        left: 0;
    }

/* CSS */
.button-33 {
  background-color: orange;
  border-radius: 100px;
  box-shadow: rgba(224, 169, 41, 0.2) 0 -25px 18px -14px inset,rgba(212, 145, 37, 0.15) 0 1px 2px,rgba(232, 140, 20, 0.15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
  color: white;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;


}

.button-33:hover {
    background-color:white;
    border:2px solid orange;
    transition: transform 250ms ease;
    color: black
}



</style>


<div class="container-fluid  bg-warning shadow-lg">
    <hr>
    <div class="row p-3 text-center text-uppercase">
        <div class="col-md-8" style="margin-top:5px;font-size:30px;color:black;font-weight:bold">Contact us for free
            consultantation </div>
        <div class="col-md-4">
            <button class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"><a style="text-decoration:none;color:white"> Contact Us</a></button>
                    
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content con_container">

                <!-- Modal Header -->
                <div class="modal-header">
                    {{-- <h4 class="modal-title">Modal Heading</h4> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button> <hr>
                </div>
                {{-- <div class="con_container"> --}}
                    <div class="con_brand-title text-center text-success text-uppercase">Contact Us</div> <hr>

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
                        <div class="inputs">
                            <label for="name" class="con_label ">NAME:</label>
                            <input  type="text" name="name" placeholder="Enter your full name.."   class="mt-2 mb-2 con_input form-control  @error('name') is-invalid @enderror" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label for="name" >MOBILE:</label>
                            <input  type="text"  name="mob" placeholder="Min 6 charaters long"  class="mt-2 mb-2 con_input form-control @error('mob') is-invalid @enderror"/>
                            @error('mob')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label for="name" >MESSAGE:</label>
                            <textarea  type="text"  name="msg" placeholder="Enter your message.."  class="mt-2 mb-2 con_input form-control @error('msg') is-invalid @enderror" > </textarea>
                            @error('msg')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                                
                            <div style="padding-top: 20px">
                            <button class="button-33 " type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                {{-- </div> --}}
            </div>
        </div>
    </div>



</div>
<hr>


