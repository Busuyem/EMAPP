@extends('layouts.main')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Users</h1>
</div>

<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Create New User</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">User Creation Form</h1>
                                </div>
                                <form class="user" action="{{ route('users.store') }}" method="Post">
                                    @csrf
                                    @method('post')
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control form-control-user @error('first_name') is-invalid @enderror"
                                            id="first_name" aria-describedby="first_name"
                                            placeholder="Enter Your First Name...">

                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control form-control-user @error('last_name') is-invalid @enderror"
                                            id="last_name" aria-describedby="last_name"
                                            placeholder="Enter Last Name...">

                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" value="{{ old('username') }}" class="form-control form-control-user @error('username') is-invalid @enderror"
                                            id="username" aria-describedby="username"
                                            placeholder="Enter Your Username...">

                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-user @error('email') is-invalid @enderror"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">User's Password</label>
                                        <div class="form-group">
                                            <input type="password" name="password" value="{{ old('password') }}" class="form-control form-control-user @error('password') is-invalid @enderror"
                                                id="exampleInputPassword" placeholder="Password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password Confirmation</label>
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control form-control-user @error('password_confirmation') is-invalid @enderror"
                                                id="exampleInputPassword" placeholder="Password Confirmation">
                                                @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary">Create user</button>
                                    </div>
                                </form>
                                <hr class="mb-5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
