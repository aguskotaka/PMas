@extends('temp')
@section('auth')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                @if (Session::has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{Session::get('error')}}
                                  </div>
                                @endif


                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <h1 class="text-center">Login</h1>
                                </a>

                                <form action="{{route('login')}}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email Addres</label>
                                        <input type="email" name="email" class="form-control" id="email" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" required>
                                    </div>
                                    <button class="btn btn-primary">Log In</button>

                                </form>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
