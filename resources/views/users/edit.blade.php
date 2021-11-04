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
                    <h6 class="m-0 font-weight-bold text-primary">Edit User's Details</h6>
                    <div class="float-right">
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Go Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Edit User</h1>
                                </div>
                                <form class="user" action="" method="Get">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}" class="form-control form-control-user @error('first_name') is-invalid @enderror"
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
                                        <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}" class="form-control form-control-user @error('last_name') is-invalid @enderror"
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
                                        <input type="text" name="username" value="{{ old('username', $user->username) }}" class="form-control form-control-user @error('username') is-invalid @enderror"
                                            id="username" aria-describedby="username"
                                            placeholder="Enter Your Username...">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control form-control-user @error('email') is-invalid @enderror"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-primary">Update Details</button>
                                    </div>
                                </form>
                                <hr class="mb-5">
                                <div class="container">
                                    <form action="" method="post">
                                        <div class="form-group">
                                        <label for="">Change User's Password</label>
                                        <div class="form-group">
                                            <input type="password" name="change_password" value="{{ old('change_password', $user->password) }}" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
