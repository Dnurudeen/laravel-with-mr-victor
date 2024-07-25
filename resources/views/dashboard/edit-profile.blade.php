@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    @if(session()->has('success'))
                        <p class="bg-success text-light p-3 w-100">
                            {{ session()->get('success') }}
                        </p>
                    @endif
                    <form action="{{ route('update-profile') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input class="form-control" value="{{ $user->name }}" name="fullname" type="text">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input class="form-control" value="{{ $user->email }}" name="email" type="text">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Username</label>
                            <input class="form-control" value="{{ $user->username }}" name="username" type="text">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input class="form-control" value="{{ $user->password }}" type="password" disabled>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark w-100">Update Profile</button>
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
