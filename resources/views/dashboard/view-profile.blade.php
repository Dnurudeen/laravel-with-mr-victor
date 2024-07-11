@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Profile') }}</div>

                <div class="card-body">
                    <table class="table table-responsive">
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>{{ $user->username }}</td>
                        </tr>
                        <tr>
                            <th>Date Created</th>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><input type="password" class="form-control" value="{{ $user->password }}" disabled></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="my-4">
                <a href="{{ url('dashboard/') }}" class="btn btn-danger"><- Go back</a>
            </div>
        </div>
    </div>
</div>
@endsection
