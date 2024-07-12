@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input class="form-control" value="{{ $user->name }}" type="text">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input class="form-control" value="{{ $user->email }}" type="text">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Username</label>
                            <input class="form-control" value="{{ $user->username }}" type="text">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input class="form-control" value="{{ $user->password }}" type="password" disabled>
                        </div>
                    </form>
                </div>
            </div>

            <div class="my-4">
                <a href="{{ url('dashboard/') }}" class="btn btn-danger"><- Go back</a>
            </div>
        </div>
    </div>
</div>
@endsection
