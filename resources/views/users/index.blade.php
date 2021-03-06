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
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    <div class="float-right">
                        <a href="{{ route('users.create') }}" class="btn btn-primary mr-1 btn-sm">Create New User</a>
                    </div>
                </div>
                    <form action="{{ route('users.index') }}" method="Get">
                        <div class="card-body">
                            <div class="input-group mb-2 col-md-5 float-right">
                                <input type="text" name="search" value="{{ old('search') }}" class="form-control" placeholder="Search" aria-label="Recipient's username with two button addons">
                                <button class="btn btn-outline-secondary" type="submit">Search</button>
                            </div>
                        </form>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Email Address</th>
                                    <th>Start date</th>
                                    <th>Management</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('users.edit', $user) }}" class="btn btn-primary mr-1 btn-sm">Edit</a>
                                            <form action="{{ route('users.destroy', $user) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                                @empty
                                    No User Registered Yet!
                                @endforelse

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Email Address</th>
                                    <th>Start date</th>
                                    <th>Management</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
