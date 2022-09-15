@include('admin::Header')
<style>
    @media screen and(min-width:500px){.contr{
    margin:30px;
}}
</style>
<main>
    <div class="container-fluid px-4">
        <div class="card shadow-lg  contr">
            <div class="card-body">
                <ol class="breadcrumb mb-4" style="background-color:lightgreen">
                    <li class="breadcrumb-item active">Dashboard/Upload</li>
                </ol>
            </div>
        </div>
        <div class="card shadow-lg contr">
            <div class="card-body">
                <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center">U P L O A D * I M A G E </h3>
                    <hr>
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @elseif(Session::has('fail'))
                    <div class="alert alert-warning">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                    <div class="row" style="margin:50px 0">
                        <div class="col-md-6 offset-md-3">

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="file">Select Image</label>
                                    <input type="file" name="file" accept="image/jpeg, image/jpg image/png"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group p-3">
                                    <button type="submit" class="btn btn-outline-success btn-block ">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8">



                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>
@include('admin::footer')