@include('admin::Header')

<main>
    <div class="container-fluid px-4">
        <div class="card shadow-lg" style="margin:30px">
            <div class="card-body">
                <ol class="breadcrumb mb-4" style="background-color:lightgreen">
                    <li class="breadcrumb-item active">Dashboard/Profile</li>
                </ol>
            </div>
        </div>
        <div class="card shadow-lg" style="margin:30px">
            <div class="card-body">
                <form action="{{route('update_profile')}}" method="post">
                    @csrf
                    <h3 class="text-center">A D M I N * P R O F I L E </h3>
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
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{Auth::user()->name}}"
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="name">Email</label>
                                    <input type="text" readonly name="email" value="{{Auth::user()->email}}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="name">Password</label>
                                    <input type="password" name="pass" value="{{Auth::user()->password}}"
                                        class="form-control @error('pass') is-invalid @enderror">
                                    @error('pass')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
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